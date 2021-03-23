<?php

// Get Lando environment variables.
$lando_info = getenv('LANDO_INFO');
if (!empty($lando_info)) {
  $info = json_decode($lando_info, TRUE);
  $databases['default']['default'] = [
    'driver' => 'mysql',
    'database' => $info['database']['creds']['database'],
    'username' => $info['database']['creds']['user'],
    'password' => $info['database']['creds']['password'],
    'host' => $info['database']['internal_connection']['host'],
    'port' => $info['database']['internal_connection']['port'],
    'charset' => 'utf8mb4',
    'collation' => 'utf8mb4_unicode_ci',
  ];
} else {
  // Support for lando < 3.0.0-beta40
  $databases['default']['default'] = [
    'driver' => 'mysql',
    'database' => getenv('DB_NAME'),
    'username' => getenv('DB_USER'),
    'password' => getenv('DB_PASSWORD'),
    'host' => getenv('DB_HOST'),
    'port' => getenv('DB_PORT'),
    'charset' => 'utf8mb4',
    'collation' => 'utf8mb4_unicode_ci',
  ];
}
// Make hash salt out of whole lando info.
$settings['hash_salt'] = md5($lando_info);
$settings['container_yamls'][] = DRUPAL_ROOT . '/sites/development.services.yml';
