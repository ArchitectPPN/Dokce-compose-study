### 更新说明

#### v1

#### 启动问题

挂载卷权限问题, 修改挂载卷权限

```
[root@VM_0_6_centos nginx-dkc]# docker-compose up redis
Starting nginx-dkc_redis_1 ... done
Attaching to nginx-dkc_redis_1
redis_1    | 
redis_1    | *** FATAL CONFIG FILE ERROR ***
redis_1    | Reading the configuration file, at line 46
redis_1    | >>> 'logfile /var/logs/'
redis_1    | Can't open the log file: Is a directory
nginx-dkc_redis_1 exited with code 1
```
