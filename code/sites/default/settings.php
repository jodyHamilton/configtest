<?php

ini_set('arg_separator.output', '&amp;');
ini_set('magic_quotes_runtime', 0);
ini_set('magic_quotes_sybase', 0);
ini_set('session.cache_expire', 200000);
ini_set('session.cache_limiter', 'none');
ini_set('session.cookie_lifetime', 0);
ini_set('session.gc_divisor', 100);
ini_set('session.gc_probability', 1);
ini_set('session.gc_maxlifetime', 200000);
ini_set('session.save_handler', 'user');
ini_set('session.use_cookies', 1);
ini_set('session.use_only_cookies', 1);
ini_set('session.use_trans_sid', 0);
ini_set('url_rewriter.tags', '');

$protocol = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') ? 'https://' : 'http://';
$base_url = $protocol . 'eight.local';

$conf = array(
  'fetcher_environment' => 'local',
);
$databases = array(
  'default' => array(
    'default' => array(
      'database' => 'eight',
      'username' => 'eight',
      'password' => 'pGbzif4Ds583mxgRwlIr',
      'host' => 'localhost',
      'port' => '',
      'driver' => 'mysql',
      'prefix' => '',
      'namespace' => 'Drupal\Core\Database\Driver\mysql',
    ),
  ),
);
$settings = array(
  'container_yamls' => array(
    '0' => '/usr/share/drush/commands/drush_fetcher/lib/Fetcher/Configurator/DrupalVersion/services.yml',
  ),
);$databases['default']['default'] = array (
  'database' => 'eight',
  'username' => 'eight',
  'password' => 'pGbzif4Ds583mxgRwlIr',
  'prefix' => '',
  'host' => 'localhost',
  'port' => '',
  'namespace' => 'Drupal\\Core\\Database\\Driver\\mysql',
  'driver' => 'mysql',
);
$settings['hash_salt'] = 'pjPBt23GTjTPjuEb6CHaxpqxkLAwz7LNQljYoi8DkCdnB65JR1QOsT1jmiBQW43tMKeVjnxzPA';
$settings['install_profile'] = 'standard';
$config_directories['sync'] = 'sites/default/files/config_z2ecGtzTaNp5zjhsav21KVxmTasrNYMZGLYPYmazIOfgBWrt4lr0aKkP4P8kFcDtIybSM63tLA/sync';
