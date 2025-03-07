# Dockerfile para o Webmail (Roundcube)
FROM roundcube/roundcubemail:latest

# Criar diretório de configuração
RUN mkdir -p /var/www/html/config

COPY config.docker.inc.php /var/www/html/config/config.docker.inc.php
COPY config.inc.php /var/www/html/config/config.inc.php

RUN chown -R www-data:www-data /var/www/html/config && \
    chmod 600 /var/www/html/config/config.inc.php && \
    chmod 600 /var/www/html/config/config.docker.inc.php

# Expor a porta do Apache
EXPOSE 80

# Comando padrão
CMD ["apache2-foreground"]
