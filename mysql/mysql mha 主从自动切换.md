

      
			
				
#### －－一步，二步，三步，N步，二行脚印


			



			
				 
#### mysql mha 主从自动切换 高可用


	


 			
			
	mha（Master High Availability）目前在MySQL多服务器（超过二台），高可用方面是一个相对成熟的解决方案。







#### 一，什么是mha，有什么特性






#### 1. 主服务器的自动监控和故障转移




MHA监控复制架构的主服务器，一旦检测到主服务器故障，就会自动进行故障转移。即使有些从服务器没有收到最新的relay log，MHA自动从最新的从服务器上识别差异的relay log并把这些日志应用到其他从服务器上，因此所有的从服务器保持一致性了。MHA通常在几秒内完成故障转移，9-12秒可以检测出主服务器故障，7-10秒内关闭故障的主服务器以避免脑裂，几秒中内应用差异的relay log到新的主服务器上，整个过程可以在10-30s内完成。还可以设置优先级指定其中的一台slave作为master的候选人。由于MHA在slaves之间修复一致性，因此可以将任何slave变成新的master，而不会发生一致性的问题，从而导致复制失败。




#### 2. 交互式主服务器故障转移




可以只使用MHA的故障转移，而不用于监控主服务器，当主服务器故障时，人工调用MHA来进行故障故障。




#### 3. 非交互式的主故障转移




不监控主服务器，但自动实现故障转移。这种特征适用于已经使用其他软件来监控主服务器状态，比如heartbeat来检测主服务器故障和虚拟IP地址接管，可以使用MHA来实现故障转移和slave服务器晋级为master服务器。




#### 4. 在线切换主从服务器




在许多情况下，需要将现有的主服务器迁移到另外一台服务器上。比如主服务器硬件故障，RAID控制卡需要重建，将主服务器移到性能更好的服务器上等等。维护主服务器引起性能下降，导致停机时间至少无法写入数据。另外，阻塞或杀掉当前运行的会话会导致主主之间数据不一致的问题发生。MHA提供快速切换和优雅的阻塞写入，这个切换过程只需要0.5-2s的时间，这段时间内数据是无法写入的。在很多情况下，0.5-2s的阻塞写入是可以接受的。因此切换主服务器不需要计划分配维护时间窗口(呵呵，不需要你在夜黑风高时通宵达旦完成切换主服务器的任务)。




#### 5.MHA由两部分组成：MHA Manager（管理节点）和MHA Node（数据节点）




要搭建MHA,要求一个复制集群中必须最少有三台数据库服务器，一主二从，即一台充当master，一台充当备用master，另外一台充当从库，管理节点可以和master在一台机器上。所以如果你只有二台机器的话，heartbeat,keepalive等都是不错的选择了。




#### 6.MHA比较灵活，可以写脚本，来进行故障转移，或者主从切换等。






#### 7.mha出现故障后，配置文件会被修改掉，这一点，让我觉得很搞笑，如果故障转移需要重新修改配置文件，重新启动masterha_manager服务.






#### 二，服务器说明





```
192.168.10.103 masters   //主
192.168.10.209 slave1    //从
192.168.10.219 slave2    //从（主备）
192.168.10.220 manage    //管理节点
```



#### 一主二从，一个管理节点，将上面的内容写入到每台/etc/hosts当中






#### 三，服务器间，无密码ssh登录





```
# ssh-keygen -t rsa
# ssh-copy-id -i /root/.ssh/id_rsa.pub root@192.168.10.103
# ssh-copy-id -i /root/.ssh/id_rsa.pub root@192.168.10.209
# ssh-copy-id -i /root/.ssh/id_rsa.pub root@192.168.10.219
# ssh-copy-id -i /root/.ssh/id_rsa.pub root@192.168.10.220
```



#### 上面有5个命令，如果在103机器上，103本身不需要执行ssh-copy-id。copy完了以后，ssh测试一下，机器间切换是不是需要密码了。






#### 四，安装mha






#### 1,下载mha




https://code.google.com/p/mysql-master-ha/downloads/list




#### 2,所有节点都要安装





```
# yum install -y perl-DBD-MySQL
# rpm -ivh mha4mysql-node-0.54-0.el6.noarch.rpm
```



#### 3,管理节点





```
# yum install -y perl-DBD-MySQL perl-Config-Tiny perl-Log-Dispatch perl-Parallel-ForkManager
# rpm -ivh mha4mysql-manager-0.55-0.el6.noarch.rpm
```



#### 注意：manager和node节点的版本可以不一样






#### 五，配置mysql replication




请参考：[

#### mysql replication 主从(master-slave)同步

](http://blog.51yip.com/mysql/1716.html)


要符合mha的配置，根这篇文章有点不同。




#### 1，主从的配置都要有





```
binlog-do-db=test
replicate-do-db=test
```



#### 一般情况下，主服务器需要包含binlog-do-db=test，从服务器需要包含replicate-do-db=test，这样主从就可以同步了

。但是只是这样配置的话，会报以下错误




#### All log-bin enabled servers must have same binlog filtering rules (same binlog-do-db and binlog-ignore-db). Check SHOW MASTER STATUS output and set my.cnf correctly.






#### 在摸索这一块配置的时候，浪费很多时间，我一直以为，上面英文的意思是说，主从同步的数据库要一样，其实不是，而是配置文件中，配置数据库这一块要一样。






#### 2，从服务器，要加上relay_log_purge=0，不加的话，会报出warning,relay_log_purge=0 is not set on slave






#### 六，corosync pacemaker mysql replication配置




请参考：

#### [corosync pacemaker mysql replication 实现高可用](http://blog.51yip.com/mysql/1720.html)






#### 配置corosync pacemaker的目的，其实就是为得到一个虚拟IP，连主和主备中的一个，我可以通过虚拟IP连接，这样做的好处就是，如果主down机了，我通过虚拟IP可以连接主备，如果主修改好了，那么虚拟IP可以连接到主，而不需要去修改代码。






#### 七，配置mha manage






#### 1，添加管理账号，每台机器都执行以下操作





```
grant all privileges on *.* TO mha@'192.168.%' IDENTIFIED BY 'test';
flush privileges;
```



#### 2，配置/etc/mha/app1.cnf，只在管理端做，manage这台机器





```
# mkdir /etc/mha
# mkdir -p /var/log/mha/app1

[root@manage mysql]# cat /etc/mha/app1.cnf
[server default]
manager_log=/var/log/mha/app1/manager.log
manager_workdir=/var/log/mha/app1.log
master_binlog_dir=/var/lib/mysql
user=mha
password=test
ping_interval=2
repl_password=test
repl_user=test
ssh_user=root

[server1]
hostname=192.168.10.103
port=3306

[server2]
candidate_master=1
check_repl_delay=0
hostname=192.168.10.219
port=3306

[server3]
hostname=192.168.10.209
port=3306
```



#### 在server default中的配置，是三台机器共同的配置，也可以放到具体的server中进行定制






#### 八，检查mha manage是不是配置成功






#### 1,检查ssh登录





```
# masterha_check_ssh --conf=/etc/mha/app1.cnf
```



#### 如果看到，All SSH connection tests passed successfully，就说明ssh配置成功了






#### 2,检查mysql replication是否配置成功





```
# masterha_check_repl --conf=/etc/mha/app1.cnf
```

如果，出现以下内容，说明配置成功了。



[![http://blog.51yip.com/wp-content/uploads/2015/04/mha_replication-300x184.jpg](http://blog.51yip.com/wp-content/uploads/2015/04/mha_replication-300x184.jpg)](http://blog.51yip.com/wp-content/uploads/2015/04/mha_replication.jpg)mha 检验 mysql replication





3,管理端常用命令



```
masterha_check_ssh       检查MHA的SSH配置状况
masterha_check_repl      检查MySQL复制状况
masterha_manger          启动MHA
masterha_check_status    检测当前MHA运行状态
masterha_master_monitor  检测master是否宕机
masterha_master_switch   控制故障转移（自动或者手动）
masterha_conf_host       添加或删除配置的server信息
```



#### 九，在管理端，启动监控





```
[root@manage mha]# nohup masterha_manager --conf=/etc/mha/app1.cnf --remove_dead_master_conf --ignore_last_failover < /dev/null > /var/log/mha/app1/manager.log 2>&1 &
[1] 13675

[root@manage mha]# masterha_check_status --conf=/etc/mha/app1.cnf  //查看状态
app1 (pid:13675) is running(0:PING_OK), master:192.168.10.103

[root@manage mha]# masterha_stop --conf=/etc/mha/app1.cnf  //关闭监控
```

到这儿，mha我们就配置好了。




#### 十，说一下，我的测试过程






#### 1,mysql -u test -p -h 192.168.10.130，通过虚拟IP登录






#### 2,插入数据，查看一下主103有没有该数据，以及二个从服务器，是不是同步了数据。






#### 3,在主103上，执行crm node standby,会带来几种结果。






#### 在220机器上

，/etc/mha/app1.cnf


[server1]


hostname=192.168.10.103


port=3306


这段配置消失了。




#### 在219机器上

，show master status;是有数据的，变成主机了




#### 在209机器上

，show slave status\G;中 Master_Host: 192.168.10.219，变成219了。




#### 4，在103上面，执行# crm node online,这个时候，103既不是主，也不是从，standby后mysqld进程被关闭，所以在这儿要启动mysqld，然后在将103加入到219中。





```
mysql> CHANGE MASTER TO MASTER_HOST='192.168.10.219',
MASTER_USER='test', MASTER_PASSWORD='test',
MASTER_LOG_FILE='mysql-bin.000048',
MASTER_LOG_POS=107;
```



#### 5,在线切换主从





```
[root@manage mysql]# masterha_master_switch --conf=/etc/mha/app1.cnf --master_state=alive --new_master_host=192.168.10.103 --new_master_port=3306 --orig_master_is_new_slave --running_updates_limit=10000
Wed Apr 29 04:14:55 2015 - [info] MHA::MasterRotate version 0.55.
Wed Apr 29 04:14:55 2015 - [info] Starting online master switch..
Wed Apr 29 04:14:55 2015 - [info]
Wed Apr 29 04:14:55 2015 - [info] * Phase 1: Configuration Check Phase..
Wed Apr 29 04:14:55 2015 - [info]
Wed Apr 29 04:14:55 2015 - [warning] Global configuration file /etc/masterha_default.cnf not found. Skipping.
Wed Apr 29 04:14:55 2015 - [info] Reading application default configurations from /etc/mha/app1.cnf..
Wed Apr 29 04:14:55 2015 - [info] Reading server configurations from /etc/mha/app1.cnf..
Wed Apr 29 04:14:55 2015 - [info] Current Alive Master: 192.168.10.219(192.168.10.219:3306)
Wed Apr 29 04:14:55 2015 - [info] Alive Slaves:
Wed Apr 29 04:14:55 2015 - [info] 192.168.10.209(192.168.10.209:3306) Version=5.1.73-log (oldest major version between slaves) log-bin:enabled
Wed Apr 29 04:14:55 2015 - [info] Replicating from 192.168.10.219(192.168.10.219:3306)

It is better to execute FLUSH NO_WRITE_TO_BINLOG TABLES on the master before switching. Is it ok to execute on 192.168.10.219(192.168.10.219:3306)? (YES/no): yes
Wed Apr 29 04:15:10 2015 - [info] Executing FLUSH NO_WRITE_TO_BINLOG TABLES. This may take long time..
Wed Apr 29 04:15:10 2015 - [info] ok.
Wed Apr 29 04:15:10 2015 - [info] Checking MHA is not monitoring or doing failover

。。。。。。。。。。。。。省略了。。。。。。。。。。。。。。。
```

这样就切换到最原始的状态了。


