<?php
return array (
  'backend' => 
  array (
    'frontName' => 'admin',
  ),
  'install' => 
  array (
    'date' => 'Wed, 10 Feb 2016 15:32:26 +0000',
  ),
  'crypt' => 
  array (
    'key' => 'e0ac82694e0447df41f53ae9d81371aa',
  ),
  'session' => 
  array (
    'save' => 'files',
  ),
  'db' => 
  array (
    'table_prefix' => '',
    'connection' => 
    array (
      'default' => 
      array (
        'host' => 'm2-aurora-cluster.cluster-cpxuovavkeun.us-west-2.rds.amazonaws.com',
        'dbname' => 'm2ce_medium',
        'username' => 'magento',
        'password' => 'pass1234',
        'active' => '1',
      ),
    ),
  ),
  'resource' => 
  array (
    'default_setup' => 
    array (
      'connection' => 'default',
    ),
  ),
  'x-frame-options' => 'SAMEORIGIN',
  'MAGE_MODE' => 'production',
  'cache' => 
  array (
    'frontend' => 
    array (
      'default' => 
      array (
        'backend' => 'Cm_Cache_Backend_Redis',
        'backend_options' => 
        array (
          'server' => 'redis.kg2kcy.0001.usw2.cache.amazonaws.com',
          'port' => '6379',
          'persistent' => '',
          'database' => '0',
          'force_standalone' => '0',
          'connect_retries' => '1',
          'read_timeout' => '10',
          'automatic_cleaning_factor' => '0',
          'compress_data' => '1',
          'compress_tags' => '1',
          'compress_threshold' => '20480',
          'compression_lib' => 'gzip',
        ),
      ),
    ),
  ),
  'cache_types' => 
  array (
    'config' => 1,
    'layout' => 1,
    'block_html' => 1,
    'collections' => 1,
    'reflection' => 1,
    'db_ddl' => 1,
    'eav' => 1,
    'config_integration' => 1,
    'config_integration_api' => 1,
    'full_page' => 1,
    'translate' => 1,
    'config_webservice' => 1,
    'compiled_config' => 1,
  ),
);
