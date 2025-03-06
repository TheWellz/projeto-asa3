FROM ubuntu:latest

# Instalar os pacotes necessários
RUN apt-get update && \
    apt-get install -y postfix dovecot-imapd dovecot-pop3d syslog-ng

# Criar usuários e definir senhas
RUN useradd -m -s /bin/bash wellton && \
    echo "wellton:redes" | chpasswd

RUN useradd -m -s /bin/bash gabriel && \
    echo "gabriel:redes" | chpasswd

# Criar diretórios de e-mail e configurar permissões
RUN mkdir -p /maildata/wellton/Maildir /maildata/gabriel/Maildir && \
    chown -R wellton:wellton /maildata/wellton && \
    chown -R gabriel:gabriel /maildata/gabriel && \
    chmod -R 700 /maildata/*

# Copiar as configurações do Postfix e Dovecot
COPY main.cf /etc/postfix/
COPY dovecot.conf /etc/dovecot/

# Iniciar os serviços
CMD service postfix start && service dovecot start && tail -f /var/log/mail.log
