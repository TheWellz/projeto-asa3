FROM ubuntu:latest
RUN apt update -y
RUN apt install bind9 dnsutils -y 
COPY named.conf.local /etc/bind/
COPY db.pescadores.com /etc/bind/
EXPOSE 53/tcp 53/udp
CMD ["/usr/sbin/named", "-g", "-c", "/etc/bind/named.conf", "-u", "bind"]
