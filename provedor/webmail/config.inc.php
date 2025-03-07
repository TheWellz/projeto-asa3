<?php

$config['db_dsnw'] = 'sqlite:////var/www/html/roundcubemail.sqlite';  // Usando SQLite para armazenar as configurações
$config['default_host'] = 'imaps://mail.rosado.com';  // Servidor IMAP (Dovecot)
$config['smtp_server'] = 'localhost'; 
$config['smtp_port'] = 25;  // Porta do SMTP (configurada no Postfix)
$config['smtp_user'] = '%u';  // Nome de usuário SMTP (será substituído pelo usuário autenticado)
$config['smtp_pass'] = '%p';  // Senha do usuário SMTP
$config['imap_conn_options'] = [
    'ssl' => [
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    ]
];
$config['smtp_conn_options'] = [
    'ssl' => [
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    ]
];

$config['log_driver'] = 'syslog';  // Configuração de logs
$config['enable_installer'] = false;  // Desabilita o instalador do Roundcube
$config['support_url'] = '';  // URL de suporte, pode ser deixada em branco
$config['product_name'] = 'Roundcube Webmail';  // Nome do produto (Webmail)

$config['mail_domain'] = 'rosado.com';  // Domínio de email
$config['imap_open_notify'] = true;  // Exibe a notificação de novas mensagens
$config['smtp_auth_type'] = 'PLAIN';  // Tipo de autenticação SMTP
include(__DIR__ . '/config.docker.inc.php');
