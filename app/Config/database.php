<?php
class DATABASE_CONFIG {

  public $master;
  public $default;  # Slaves
  public $test;


  public function __construct() {

    $master = array(
      'datasource'    => 'Database/Mysql',
      'persistent'    => false,
      'host'          => 'localhost',
      'login'         => 'root',
      'password'      => '',
      'database'      => 'db_master',
      'prefix'        => '',
      #'encoding'     => 'utf8'
    );

    $slaves = array(
      array(
        'datasource'  => 'Database/Mysql',
        'persistent'  => false,
        'host'        => 'localhost',
        'login'       => 'root',
        'password'    => '',
        'database'    => 'db_slave1',
        'prefix'      => '',
        #'encoding'   => 'utf8'
      ),
      array(
        'datasource'  => 'Database/Mysql',
        'persistent'  => false,
        'host'        => 'localhost',
        'login'       => 'root',
        'password'    => '',
        'database'    => 'db_slave2',
        'prefix'      => '',
        #'encoding'   => 'utf8'
      )

      // , ...
    );

    $test = array(
      'datasource'    => 'Database/Mysql',
      'persistent'    => false,
      'host'          => 'localhost',
      'login'         => 'root',
      'password'      => '',
      'database'      => 'db_test',
      'prefix'        => '',
      #'encoding'     => 'utf8'
    );

    $this->master = $master;
    $this->test = $test;

    if (!isset($this->default)) {
      $this->default = $slaves[mt_rand(0, count($slaves) - 1)];
    }
  }
}