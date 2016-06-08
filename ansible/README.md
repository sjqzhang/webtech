* #Ansible Command line


```
pip install ansible
yum install sshpass

ssh-copy-id 172.16.119.23

cat /etc/ansible/hosts 
[test]
172.16.119.69 ansible_user=root ansible_password=redhat
172.16.119.23 ansible_user=root ansible_password=redhat


安装mysql
ansible test  -m yum -a 'name=mysql state=latest' 

```


* #Ansible PlayBook

```

mkdir test
cd test
touch test.yaml

```

cat test.yaml 
```
---
- hosts: test
  vars:
    http_port: 80
    max_clients: 200
  remote_user: root
  tasks:
  - name: ensure apache is at the latest version
    yum: pkg=httpd state=latest
#;  - name: write the apache config file
#;    template: src=/srv/httpd.j2 dest=/etc/httpd.conf
#;    notify:
#;    - restart apache
  - name: ensure apache is running
    service: name=httpd state=started
  handlers:
    - name: restart apache
      service: name=httpd state=restarted


```

run playbook
```
ansible-playbook test.yaml
```