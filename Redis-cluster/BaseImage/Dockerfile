FROM ubuntu:16.04
MAINTAINER Architect <ng_sou@163.com>

# 设置工作目录
WORKDIR /home/soft_data/

# 更新/安装基础软件
RUN apt-get update
RUN apt-get install -y wget
RUN apt-get install -y build-essential

# 下载Redis
RUN wget https://download.redis.io/releases/redis-6.0.9.tar.gz