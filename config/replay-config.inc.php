<?php

$config_replay_database = [
  'driver'   => 'pgsql',
  'server'   => 'ballast.proxy.rlwy.net',
  'port'     => '39166',
  'database' => 'railway',
  'username' => 'postgres',
  'password' => 'zSEKtchygxzVFJSxEqHsPWyuusmTDmGd',
  'sslmode'  => 'require',   // Railway PG usually needs this
  'prefix'   => 'ps_',
];