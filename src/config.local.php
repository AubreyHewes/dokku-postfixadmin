<?php

$url = parse_url(getenv('DATABASE_URL'));

$CONF['database_type'] = $url['scheme'] === 'mysql' ? 'mysqli' : $url['scheme'];
$CONF['database_host'] = $url['host'];
$CONF['database_port'] = $url['port'];
$CONF['database_user'] = $url['user'];
$CONF['database_password'] = $url['pass'];
$CONF['database_name'] = ltrim($url['path'], '/');
$CONF['setup_password'] = getenv('POSTFIXADMIN_SETUP_PASSWORD') ?? '';
$CONF['smtp_server'] = getenv('POSTFIXADMIN_SMTP_SERVER') ?? '';
$CONF['smtp_port'] = getenv('POSTFIXADMIN_SMTP_PORT') ?? '';
$CONF['configured'] = true;

