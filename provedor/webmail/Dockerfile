# Dockerfile para o Webmail (Roundcube)
FROM roundcube/roundcubemail:latest

# Criar diretório de configuração
RUN mkdir -p /var/www/html/config

# Copiar o arquivo de configuração para o contêiner
COPY config.docker.inc.php /var/www/html/config/config.docker.inc.php

# Definir permissões adequadas
RUN chown -R www-data:www-data /var/www/html/config && \
    chmod 644 /var/www/html/config/config.docker.inc.php

# Expor a porta do Apache
EXPOSE 80

# Comando padrão
CMD ["apache2-foreground"]
