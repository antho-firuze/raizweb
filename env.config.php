<?php

return [
  /**
   * -------------------------------------------------------------------
   * Define Host (Domain or IP) to access this services
   * -------------------------------------------------------------------
   * 
   */
  'http_host' => [
    'localhost',            // for php cli mode.
    '127.0.0.1',            // for php cli mode.
    '192.168.18.234',          // mbp
    '147.139.173.24',          // RaizWeb
    'simpi-pro.com',            // RaizWeb
    'www.simpi-pro.com',        // RaizWeb
  ],

  /**
   * -------------------------------------------------------------------
   * Define Cache Server status, is redis/memcached server is available on this server?
   * -------------------------------------------------------------------
   * 
   */
  'cache_server' => [
    'localhost'              => true,
    '127.0.0.1'              => true,
    '192.168.18.234'         => true,
    '147.139.173.24'         => true,
    'simpi-pro.com'          => true,
    'www.simpi-pro.com'      => true,
  ],

  /**
   * ---------------------------------------------------------------
   *  Define default route to controller for each host 
   * ---------------------------------------------------------------
   */
  'route' => [
    'localhost'              => 'frontend',
    '127.0.0.1'              => 'frontend',
    '192.168.18.234'         => 'frontend',
    '147.139.173.24'         => 'frontend',
    'simpi-pro.com'          => 'frontend',
    'www.simpi-pro.com'      => 'frontend',
  ],

  /**
   * --------------------------------------------------------------------
   * Define default Prefix folder for each domain in application/model
   * --------------------------------------------------------------------
   * 
   * This prefix folder is for separate script in application/model for each domain
   * Because this API only uses model to put all the scripts
   * 
   */
  'prefix' => [
    'localhost'             => 'api',
    '127.0.0.1'             => 'api',
    '192.168.18.234'        => 'api',
    '147.139.173.24'        => 'api',
    'simpi-pro.com'         => 'api',
    'www.simpi-pro.com'     => 'api',
  ],

  /**
   * --------------------------------------------------------------------
   * Define default database connection for each domain
   * --------------------------------------------------------------------
   * 
   */
  'database_conn' => [
    // for php cli mode.
    'localhost'    => [
      'dsn'        => '',
      'dbdriver'  => 'mysqli',
      'port'      => '3306',
      'hostname'  => '103.31.233.61',
      'username'  => 'aasiapp',
      'password'  => 'Lk4Ji8_S9ax0',
      'database'  => 'aasi',
      'debug'      => FALSE,
    ],
    // for php cli mode.
    '127.0.0.1'    => [
      'dsn'        => '',
      'dbdriver'  => 'mysqli',
      'port'      => '3306',
      'hostname'  => '103.31.233.61',
      'username'  => 'aasiapp',
      'password'  => 'Lk4Ji8_S9ax0',
      'database'  => 'aasi',
      'debug'      => FALSE,
    ],
    // for macbook pro.
    '192.168.18.234'    => [
      'dsn'        => '',
      'dbdriver'  => 'mysqli',
      'port'      => '3306',
      'hostname'  => '103.31.233.61',
      'username'  => 'aasiapp',
      'password'  => 'Lk4Ji8_S9ax0',
      'database'  => 'aasi',
      'debug'      => FALSE,
    ],
    // LIVE: 
    '147.139.173.24'    => [
      'dsn'        => '',
      'dbdriver'  => 'mysqli',
      'port'      => '3306',
      'hostname'  => '103.31.233.61',
      'username'  => 'aasiapp',
      'password'  => 'Lk4Ji8_S9ax0',
      'database'  => 'aasi',
      'debug'      => FALSE,
    ],
    // LIVE: 
    'simpi-pro.com'    => [
      'dsn'        => '',
      'dbdriver'  => 'mysqli',
      'port'      => '3306',
      'hostname'  => '103.31.233.61',
      'username'  => 'aasiapp',
      'password'  => 'Lk4Ji8_S9ax0',
      'database'  => 'aasi',
      'debug'      => FALSE,
    ],
    // LIVE: 
    'www.simpi-pro.com'    => [
      'dsn'        => '',
      'dbdriver'  => 'mysqli',
      'port'      => '3306',
      'hostname'  => '103.31.233.61',
      'username'  => 'aasiapp',
      'password'  => 'Lk4Ji8_S9ax0',
      'database'  => 'aasi',
      'debug'      => FALSE,
    ],
  ],
];
