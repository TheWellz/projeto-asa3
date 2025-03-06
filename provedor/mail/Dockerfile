FROM ubuntu:latest

RUN #apt update --fix-missing -y && \
    #apt upgrade -y && \
    apt-get install -y postfix dovecot-imapd dovecot-pop3d syslog-ng

RUN useradd -m -s /bin/bash wellton
RUN echo "wellton:redes" | chpasswd
    
RUN useradd -m -s /bin/bash gabriel
RUN echo "gabriel:redes" | chpasswd

RUN mkdir -p /maildata/wellton/Maildir /maildata/gabriel/Maildir && \
    chown -R wellton:wellton /maildata/wellton && \
    chown -R gabriel:gabriel /maildata/gabriel && \
    chmod -R 700 /maildata/*

COPY main.cf /etc/postfix/
COPY dovecot.conf /etc/dovecot/

RUN service syslog-ng start && \
    service dovecot start && \
    service postfix start

CMD tail -F /var/log/mail.log
