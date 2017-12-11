<?php
  $dbopts = parse_url('postgres://flhhfrpwgxcktk:117ff4b97a223dbef6349dd1bf86e75568d149b5ad23bcbf85d728cd7f28c6fe@ec2-79-125-118-221.eu-west-1.compute.amazonaws.com:5432/dde5e88nckdggp');
  $app->register(new Csanquer\Silex\PdoServiceProvider\Provider\PDOServiceProvider('pdo'),
               array(
                'pdo.server' => array(
                   'driver'   => 'pgsql',
                   'user' => $dbopts["user"],
                   'password' => $dbopts["pass"],
                   'host' => $dbopts["host"],
                   'port' => $dbopts["port"],
                   'dbname' => ltrim($dbopts["path"],'/')
                   )
               )
  );
  $query = "SELECT * FROM products;";
  echo $query;
?>
