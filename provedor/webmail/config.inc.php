<?php

/* Local configuration for Roundcube Webmail */

// ----------------------------------
// IMAP
// ----------------------------------
// The IMAP host (and optionally port number) chosen to perform the log-in.
// Leave blank to show a textbox at login, give a list of hosts
// to display a pulldown menu or set one host as string.
// Enter hostname with prefix ssl:// to use Implicit TLS, or use
// prefix tls:// to use STARTTLS.
// If port number is omitted it will be set to 993 (for ssl://) or 143 otherwise.
// Supported replacement variables:
// %n - hostname ($_SERVER['SERVER_NAME'])
// %t - hostname without the first part
// %d - domain (http hostname $_SERVER['HTTP_HOST'] without the first part)
// %s - domain name after the '@' from e-mail address provided at login screen
// For example %n = mail.domain.tld, %t = domain.tld
// WARNING: After hostname change update of mail_host column in users table is
//          required to match old user data records with the new host.
$config['imap_host'] = 'imaps://mail.rosado.com';

// ----------------------------------
// SMTP
// ----------------------------------
// SMTP server host (and optional port number) for sending mails.
// Enter hostname with prefix ssl:// to use Implicit TLS, or use
// prefix tls:// to use STARTTLS.
// If port number is omitted it will be set to 465 (for ssl://) or 587 otherwise.
// Supported replacement variables:
// %h - user's IMAP hostname
// %n - hostname ($_SERVER['SERVER_NAME'])
// %t - hostname without the first part
// %d - domain (http hostname $_SERVER['HTTP_HOST'] without the first part)
// %z - IMAP domain (IMAP hostname without the first part)
// For example %n = mail.domain.tld, %t = domain.tld
// To specify different SMTP servers for different IMAP hosts provide an array
// of IMAP host (no prefix or port) and SMTP server e.g. ['imap.example.com' => 'smtp.example.net']
$config['smtp_host'] = 'localhost:25';

// ----------------------------------
// SQL DATABASE
// ----------------------------------
// Database connection string (DSN) for read+write operations
// Format (compatible with PEAR MDB2): db_provider://user:password@host/database
// Currently supported db_providers: mysql, pgsql, sqlite, mssql, sqlsrv, oracle
// For examples see https://pear.php.net/manual/en/package.database.mdb2.intro-dsn.php
// Note: for SQLite use absolute path (Linux): 'sqlite:////full/path/to/sqlite.db?mode=0646'
//       or (Windows): 'sqlite:///C:/full/path/to/sqlite.db'
// Note: Various drivers support various additional arguments for connection,
//       for Mysql: key, cipher, cert, capath, ca, verify_server_cert,
//       for Postgres: application_name, sslmode, sslcert, sslkey, sslrootcert, sslcrl, sslcompression, service.
//       e.g. 'mysql://roundcube:@localhost/roundcubemail?verify_server_cert=false'
$config['db_dsnw'] = 'sqlite:////var/roundcube/db/sqlite.db?mode=0646';

// ----------------------------------
// LOGGING/DEBUGGING
// ----------------------------------
// log driver:  'syslog', 'stdout' or 'file'.
$config['log_driver'] = 'syslog';

// Senha do usuário SMTP
$config['imap_conn_options'] = array (
  'ssl' => 
  array (
    'verify_peer' => false,
    'verify_peer_name' => false,
    'allow_self_signed' => true,
  ),
);

// Exibe a notificação de novas mensagens
$config['smtp_auth_type'] = 'PLAIN';

// SMTP socket context options
// See https://php.net/manual/en/context.ssl.php
// The example below enables server certificate validation, and
// requires 'smtp_timeout' to be non zero.
// $config['smtp_conn_options'] = [
//     'ssl' => [
//         'verify_peer'  => true,
//         'verify_depth' => 3,
//         'cafile'       => '/etc/openssl/certs/ca.crt',
//     ],
// ];
// Note: These can be also specified as an array of options indexed by hostname
$config['smtp_conn_options'] = array (
  'ssl' => 
  array (
    'verify_peer' => false,
    'verify_peer_name' => false,
    'allow_self_signed' => true,
  ),
);

// Desabilita o instalador do Roundcube
$config['support_url'] = '';

// Location of temporary saved files such as attachments and cache files
// must be writeable for the user who runs PHP process (Apache user if mod_php is being used)
$config['temp_dir'] = '/tmp/roundcube-temp';

// This key is used for encrypting purposes, like storing of imap password
// in the session. For historical reasons it's called DES_key, but it's used
// with any configured cipher_method (see below).
// For the default cipher_method a required key length is 24 characters.
$config['des_key'] = '3gRfqM5QwhmrgeFAV8GvJuvv';

// Nome do produto (Webmail)
$config['mail_domain'] = 'rosado.com';

// Specifies the full path of the original HTTP request, either as a real path or
// $_SERVER field name. This might be useful when Roundcube runs behind a reverse
// proxy using a subpath. This is a path part of the URL, not the full URL!
// The reverse proxy config can specify a custom header (e.g. X-Forwarded-Path) containing
// the path under which Roundcube is exposed to the outside world (e.g. /rcube/).
// This header value is then available in PHP with $_SERVER['HTTP_X_FORWARDED_PATH'].
// By default the path comes from  'REDIRECT_SCRIPT_URL', 'SCRIPT_NAME' or 'REQUEST_URI',
// whichever is set (in this order).
$config['request_path'] = '/';

// ----------------------------------
// PLUGINS
// ----------------------------------
// List of active plugins (in plugins/ directory)
$config['plugins'] = ['archive', 'zipdownload'];

// Domínio de email
$config['imap_open_notify'] = true;

include(__DIR__ . '/config.docker.inc.php');
