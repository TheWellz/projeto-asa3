FROM ubuntu:latest

RUN apt-get update
RUN apt-get install -y openssh-server
RUN mkdir /var/run/sshd

RUN useradd -m -s /bin/bash wellton
RUN echo "wellton:redes" | chpasswd

RUN useradd -m -s /bin/bash gabriel
RUN echo "gabriel:redes" | chpasswd

RUN sed -i 's/^#PasswordAuthentication yes/PasswordAuthentication yes/' /etc/ssh/sshd_config && \
    sed -i 's/^PasswordAuthentication no/#PasswordAuthentication no/' /etc/ssh/sshd_config

EXPOSE 22

CMD ["/usr/sbin/sshd", "-D"]