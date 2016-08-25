```python
#!/usr/local/easyops/python/bin/python
#-*- coding: utf-8 -*-
import os
import json
import time
import socket
import platform
import copy
import random
import traceback

import yaml
import psutil
# import gevent
import copy


import os

import sys
sys.path.insert(0,os.path.dirname( os.path.dirname(__file__)))

# from collector.easy_collector import EasyCollector
#
path = os.path.dirname(os.path.abspath(__file__))
AGENT_PATH = os.path.dirname(os.path.dirname(path))
AGENT_CONF = os.path.join(AGENT_PATH, 'easyAgent','conf','conf.yaml')
AGENT_SYSCONF = os.path.join(AGENT_PATH,'easyAgent','conf','sysconf.ini')
PKG_CONF_PATH = os.path.join(AGENT_PATH, 'easyAgent','pkg', 'conf')
PKG_CONF_FILE_NAME = 'instance.conf.yaml'
if platform.system() == 'Windows':
    UUID_PATH = "c:\\easyops\\etc\\agentId"
else:
    UUID_PATH = "/usr/local/easyops/etc/agentId"

import logging
import tempfile
from logging.handlers import  RotatingFileHandler

bin_name='cli'
client_log_filename= tempfile.gettempdir()+os.path.sep+ bin_name+".log"

logger = logging.getLogger()
logging.basicConfig(level=logging.DEBUG,
                format='%(asctime)-25s %(module)s:%(lineno)d  %(levelname)-8s %(message)s',
                #datefmt='%a, %d %b %Y %H:%M:%S',
                filename=tempfile.gettempdir()+ os.path.sep +'%s.log' % bin_name,
                filemode='a')
# logger.addHandler(RotatingFileHandler(filename=client_log_filename,maxBytes=100 * 1024 * 1024, backupCount=3))
# logging.basicConfig(
#     level=logging.DEBUG,
#     format="[%(asctime)s] %(name)s:%(levelname)s: %(message)s"
# )

class CmdbCollector(object):
    data_id = 1100
    max_text_length = 0

    component = 'cmdb'
    metric_define = {
        '_mac': {"type": "text", "unit": "", "name": u'mac', "info": ""},
        '_uuid': {"type": "text", "unit": "", "name": u'uuid', "info": ""},
        'ip': {"type": "text", "unit": "", "name": u'ip', "info": ""},
        'hostname': {"type": "text", "unit": "", "name": u'主机名', "info": ""},
        'status': {"type": "text", "unit": "", "name": u'运营状态', "info": ""},
        'agentVersion': {"type": "text", "unit": "", "name": u'agent版本', "info": ""},
        'memSize': {"type": "text", "unit": "KB", "name": u'内存大小', "info": ""},
        'osArchitecture': {"type": "text", "unit": "", "name": u'操作系统架构', "info": ""},
        'osDistro': {"type": "text", "unit": "", "name": u'操作系统发行版本', "info": ""},
        'osRelease': {"type": "text", "unit": "", "name": u'操作系统内核发行版本', "info": ""},
        'osSystem': {"type": "text", "unit": "", "name": u'操作系统类型', "info": ""},

        'eth': {"type": "text", "unit": "", "name": u'网卡信息', "info": ""},
        'cpu': {"type": "text", "unit": "", "name": u'CPU信息', "info": ""},
        'disk': {"type": "text", "unit": "", "name": u'硬盘信息', "info": ""},
        'service': {"type": "text", "unit": "", "name": u'主机服务信息', "info": ""},
        # 'package': {"type": "text", "unit": "", "name": u'agent版本信息', "info": ""},
    }
    basic_info = {}

    # version info:
    # 2.5.0 --------------------------------------
    # multiple keys('mac', 'uuid' and 'ip') must be reported
    # with 'hostname' and 'status', if diff exists
    # ------------------------------------------
    version = '2.5.0'

    def __init__(self):
        self.logger=logger


    def fill_default_config(self, config):
        config.setdefault('pkg_conf_path', PKG_CONF_PATH)
        config.setdefault('pkg_conf_file_name', PKG_CONF_FILE_NAME)
        self.report_metric_info_flag = True
        return config

    def get_instances(self):
        return [{}]

    def check(self, config):
        self.config = config
        res = self.get_all()
        # 2.9版本以后改为json上报，所以没有必要进行这种转换
        # for key, value in res.iteritems():
            # if isinstance(value, (dict, list)):
            #     res[key] = json.dumps(value)
        return res

    def get_all(self):
        res = {}

        eth = self.get_eth_info()
        pks = self.get_pks(eth)
        if not pks:
            return res

        # 是否有变更
        if not eth == self.basic_info.get('eth'):
            self.basic_info['eth'] = eth
            res['eth'] = eth
        # gevent.sleep()

        agent_version = self.get_agent_version()
        if not agent_version == self.basic_info.get('agentVersion'):
            self.basic_info['agentVersion'] = agent_version
            res['agentVersion'] = agent_version
        # gevent.sleep()

        cpu = self.get_cpu_info()
        if not cpu == self.basic_info.get('cpu'):
            self.basic_info['cpu'] = cpu
            res['cpu'] = cpu
        # gevent.sleep()

        disk = self.get_disk_info()
        if not disk == self.basic_info.get('disk'):
            self.basic_info['disk'] = disk
            res['disk'] = disk
        # gevent.sleep()

        memory_size = self.get_memory_info()
        if not memory_size == self.basic_info.get('memSize'):
            self.basic_info['memSize'] = memory_size
            res['memSize'] = memory_size
        # gevent.sleep()

        os = self.get_os_info()
        if not os == self.basic_info.get('os'):
            self.basic_info['os'] = os
            res['os'] = os
        # gevent.sleep()

        hostname = self.get_hostname()
        if not hostname == self.basic_info.get('hostname'):
            self.basic_info['hostname'] = hostname
            res['hostname'] = hostname
        # gevent.sleep()

        if platform.system().lower() == 'windows':   
            service = self.get_windows_service_info()
        else:
            service = self.get_service_info()
        if not service == self.basic_info.get('service'):
            self.basic_info['service'] = service
            res['service'] = service
        # gevent.sleep()

        if not self.is_pks_equal(pks):
            self.report_full_time = int(time.time() + random.random() * 60 * 60 * 12)
            self.basic_info.update(pks)
            res = copy.deepcopy(self.basic_info)
            self.logger.info('first report all, random time %s' % self.report_full_time)
        else:
            if res:
                res.update(pks)

        current = int(time.time())
        if current - self.report_full_time > 60 * 60 * 24:
            self.report_full_time = current
            res = copy.deepcopy(self.basic_info)
            self.logger.info('report all')

        # 对指标名进行转换，符合cmdb对象属性的定义
        flat_keys = ['os']
        for key in flat_keys:
            if key in res:
                flat_obj = res.pop(key, {})
                for k, v in flat_obj.iteritems():
                    res[ '%s%s' % (key, k.capitalize()) ] = v

        if res:
            # if diff exists, must report 'hostname', 'ip', and 'status' to create host
            res['status'] = u'运营中'
            if 'hostname' not in res:
                res['hostname'] = hostname
        self.logger.info('cmdb_collector report keys: %s' % res.keys())
        self.logger.info('cmdb_collector report : %s' % res)
        return res

    def is_pks_equal(self, pks):
        for key, value in pks.iteritems():
            if not self.basic_info.get(key) == value:
                return False
        return True

    def get_pks(self, eth):
        res = {}

        ip = '172.17.140.116'
        mac = '5C-F9-DD-73-12-4D'
        if os.path.exists(AGENT_SYSCONF):
            try:
                import ConfigParser
                config = ConfigParser.ConfigParser()
                config.read(AGENT_SYSCONF)
                ip = config.get('sys', 'local_ip')
                for entry in eth:
                    if entry['ip'] == ip:
                        mac = entry['mac']
                        break
            except Exception as e:
                self.logger.error('get ip error: %s' % e)

        import uuid

        uuid = str(uuid.uuid4())
        if os.path.exists(UUID_PATH):
            with open(UUID_PATH, 'r') as f:
                uuid = f.read()

        if ip and mac and uuid:
            res['ip'] = ip
            res['_mac'] = mac
            res['_uuid'] = uuid.strip()
        else:
            self.logger.error('pks error --- ip: %s, mac: %s, uuid: %s' % (ip, mac, uuid))
            self.logger.error('the eth info is: %s' % (unicode(eth)))

        return res

    def get_cpu_info(self): 
        res = {}
        try:
            # windows 2008 multiprocessing.cpu_count()可能会报错
            from cpuinfo import cpuinfo
            info = cpuinfo.get_cpu_info()
            res['name'] = info['brand']
            res['hz'] = info['hz_advertised']
            res['brand'] = info['brand']
            res['architecture'] = info['arch']
            res['physical_cores'] = psutil.cpu_count(logical=False)
            res['logical_cores'] = psutil.cpu_count()
        except:
            res = {}
            self.logger.error(traceback.format_exc())

        return res

    def get_disk_info(self):
        data = []
        try:
            disks = psutil.disk_partitions(all=True)
            for disk in disks:
                if not disk.device:
                    continue
                if disk.opts.upper() in ('CDROM', 'REMOVABLE'):
                    continue
                item = {}
                item['name'] = disk.device
                item['device'] = disk.device
                item['mountpoint'] = disk.mountpoint
                item['fstype'] = disk.fstype
                item['size'] = psutil.disk_usage(disk.mountpoint).total >> 10
                data.append(item)
            data.sort(key=lambda x: x['device'])
        except:
            data = []
            self.logger.error(traceback.format_exc())

        return data

    def get_memory_info(self):
        res = 0
        try:
            res = psutil.virtual_memory().total >> 10
        except:
            self.logger.error(traceback.format_exc())
        return res

    def get_eth_info(self):
        """
        需要解决：
        1. 网卡bond情况，bond0
        2. 虚拟网卡情况，eth0:1 
        3. 多ip情况，eth0(1.1.1.1,2.2.2.2)
        """
        data = []
        addrs = psutil.net_if_addrs()
        stats = psutil.net_if_stats()
        for name, entries in addrs.iteritems():
            eth = {
                'name': name, 
                'mac': '00:00:00:00:00:00', 
                'ip': '', 
                'mask': '', 
                'broadcast': '',
                'status': 'Unknown',
                'speed': 0
            }
            try: # windows下中文
                eth['name'] = name.decode('gbk')
            except:
                eth['name'] = name
            if name in stats:
                eth['status'] = 'Active' if int(stats[name].isup) else 'Inactive'
                eth['speed'] = stats[name].speed
            for entry in entries:
                if entry.family == psutil.AF_LINK:
                    eth['mac'] = entry.address.upper()
                elif entry.family == socket.AF_INET:
                    if eth['ip']:# 一个网卡多个ip，注意，这里不是虚拟网卡
                        data.append(copy.deepcopy(eth))
                    eth['ip'] = entry.address
                    eth['mask'] = entry.netmask
                    eth['broadcast'] = entry.broadcast
                else: # 暂不采集IPV6
                    continue
            data.append(eth)
        # 如果虚拟网卡，则取其实际网卡的mac，避免都是00:00:00:00:00:00，常见虚拟网卡名称都带有":"
        for item in data:
            # 是否虚拟网卡
            if ':' not in item['name']:
                continue
            # 已经有mac，一般不会进入到这个逻辑，网卡名本身就带有":"的情况。
            if item['mac'] != '00:00:00:00:00:00':
                continue
            name = item['name'].rsplit(':', 1)[0]
            for iitem in data:
                if name == iitem['name']:
                    item['mac'] = iitem['mac']
                    break
        data.sort(key=lambda x: x['name'])
        return data

    def get_os_info(self):
        data = {}
        try:
            data['system'] = platform.system()
            data['architecture'] = platform.machine()
            data['release'] = platform.release()
            if data['system'].lower() == 'windows':
                data['distro'] = platform.platform()
            else:
                data['distro'] = ' '.join(platform.linux_distribution()).strip() or platform.platform()
        except:
            data = {}
            self.logger.error(traceback.format_exc())
        return data

    def get_hostname(self):
        return socket.gethostname()

    def get_kernel_info(self):
        data = {}
        try:
            from procfs import Proc
            proc = Proc()
            ipv4 = proc.sys.net.ipv4
        except:
            return data
        tcp_params = ['tcp_mem', 'tcp_rmem', 'tcp_wmem', 'tcp_window_scaling', 'tcp_syncookies',
            'tcp_keepalive_time', 'tcp_keepalive_intvl', 'tcp_keepalive_probes', 'tcp_fin_timeout',
            'tcp_tw_reuse', 'tcp_tw_recycle'
        ]
        for param in tcp_params:
            value = None
            try:
                value = getattr(ipv4, param)
                value = value.replace('\n', '')
                value = value.replace('\t', ' ')
            except:
                pass
            data[param] = value
        return data

    def is_process_permanent(self, create_time):
        res = False
        current = time.time()
        boot_elapse = current - psutil.boot_time()
        run_time = current - create_time
        if boot_elapse > 60 * 15:
            if run_time >= 60 * 10:
                res = True
        else:
            if run_time >= boot_elapse * .5:
                res = True
        return res

    def is_system_process(self, proc_info):
        if not proc_info['exe']:
            return True
        return False
        # black_execute_path = ['/usr/bin', '/usr/sbin', '/sbin']
        # for path in black_execute_path:
        #     if proc_info['exe'] and proc_info['exe'].startswith(path):
        #         return True
        # if proc_info['cwd'] == '/':
        #     return True
        # return False

    def get_service_info(self):
        res = []
        conns = {}

        try:
            connections = psutil.net_connections()
            for conn in connections:
                if not conn.pid:
                    continue
                if not conn.status == psutil.CONN_LISTEN:
                    continue
                listening = conns.setdefault(conn.pid, [])
                ip, port = conn.laddr
                listening.append({'ip': ip, 'port': port})

            for pid, listening in conns.iteritems():
                listening.sort(key=lambda x: (x['ip'], x['port']))

            for proc in psutil.process_iter():
                info = {}
                info['create_time'] = proc.create_time()
                if not self.is_process_permanent(info['create_time']):
                    continue

                info['exe'] = proc.exe()
                if self.is_system_process(info):
                    continue

                info['pid'] = proc.pid
                listening = conns.get(proc.pid, [])
                if not listening:
                    continue

                info['name'] = proc.name()
                info['cwd'] = proc.cwd()
                info['username'] = proc.username()

                entry = {}
                # entry['pid'] = info['pid']
                # entry['create_time'] = int(info['create_time'])
                entry['name'] = info['name']
                entry['pname'] = info['name']
                entry['exe'] = info['exe']
                entry['cwd'] = info['cwd']
                entry['username'] = info['username']
                # entry['listening'] = listening
                for instance in listening:
                    # ignore ipv6
                    # if ':' in instance['ip']:
                        # continue

                    item = {}
                    item.update(entry)
                    item['listening_ip'] = instance['ip']
                    item['listening_port'] = instance['port']

                    res.append(item)

            res.sort(key=lambda x: x['listening_port'])

        except:
            res = []
            self.logger.error(traceback.format_exc())

        return res

    def get_windows_service_info(self):
        import wmi
        res = []
        conns = {}
        connections = psutil.net_connections()
        for conn in connections:
            if not conn.pid:
                continue
            if not conn.status == psutil.CONN_LISTEN:
                continue
            listening = conns.setdefault(conn.pid, [])
            ip, port = conn.laddr
            listening.append({'ip': ip, 'port': port})

        for pid, listening in conns.iteritems():
            listening.sort(key=lambda x: (x['ip'], x['port']))

        c = wmi.WMI()
        for proc in c.Win32_Process():
            info = {}
            try:
               info['create_time'] = psutil.Process(proc.ProcessId).create_time()
            except psutil.NoSuchProcess:
                continue
            if not self.is_process_permanent(info['create_time']):
                continue

            info['exe'] = proc.ExecutablePath
            if self.is_system_process(info):
                continue

            info['pid'] = proc.ProcessId
            listening = conns.get(proc.ProcessId, [])
            if not listening:
                continue

            info['name'] = proc.Name
            info['cwd'] = proc.CommandLine
            try:
                info['username'] = psutil.Process(proc.ProcessId).username();
            except psutil.AccessDenied:
                pass

            info['pname'] = '';
            parent_object = psutil.Process(proc.ProcessId).parent();
            if parent_object:
                info['pname'] = parent_object.name();

            entry = {}
            if not 'username' in info.keys():
                info['username']='unknown'
            # entry['pid'] = info['pid']
            # entry['create_time'] = int(info['create_time'])
            entry['name'] = info['name']
            entry['pname'] = info['pname']
            entry['exe'] = info['exe']
            entry['cwd'] = info['cwd']
            entry['username'] = info['username']
            # entry['listening'] = listening
            for instance in listening:
                # ignore ipv6
                # if ':' in instance['ip']:
                    # continue

                item = {}
                item.update(entry)
                item['listening_ip'] = instance['ip']
                item['listening_port'] = instance['port']

                res.append(item)
        res.sort(key=lambda x: x['listening_port'])
        return res

    def get_agent_version(self):
        version = ''
        if os.path.exists(AGENT_CONF):
            try:
                with open(AGENT_CONF, 'r') as f:
                    agent_info = yaml.load(f.read())
                    version = agent_info['base']['version']
            except Exception as e:
                self.logger.error('get agent version err: %s' % e)

        return version

    def get_package_info(self):
        '''agent package version'''
        res = []
        if os.path.exists(self.config['pkg_conf_path']):
            package_dirs = os.listdir(self.config['pkg_conf_path'])
            for package_dir in package_dirs:
                full_package_dir = os.path.join(self.config['pkg_conf_path'], package_dir)
                install_dirs = os.listdir(full_package_dir)
                for d in install_dirs:
                    path = os.path.join(full_package_dir, d, self.config['pkg_conf_file_name'])
                    if not os.path.exists(path):
                        continue
                    version = {}
                    with open(path) as f:
                        try:
                            versions = yaml.load(f.read())
                            version = versions[-1]
                            version.pop('fileList', None)
                        except:
                            version = {}
                    if version:
                        res.append(version)
            res.sort(key=lambda x: (x['packageId'], x['installPath']))
        return res


if __name__ == '__main__':
    basic = CmdbCollector()
    print json.dumps(basic.get_all(), indent=4, sort_keys=True)
```