FROM base_image:1.1
MAINTAINER Architect <ng_sou@163.com>

WORKDIR /home/soft_data/
RUN tar -xf redis-6.0.9.tar.gz
RUN cd redis-6.0.9 && make && make install

CMD ["/bin/bash"]
