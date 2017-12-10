<?php
  $dbopts = parse_url(getenv('postgres://flhhfrpwgxcktk:117ff4b97a223dbef6349dd1bf86e75568d149b5ad23bcbf85d728cd7f28c6fe@ec2-79-125-118-221.eu-west-1.compute.amazonaws.com:5432/dde5e88nckdggp'));
  $app->register(new Herrera\Pdo\PdoServiceProvider(),
                 array(
                     'pdo.dsn' => 'pgsql:dbname='.ltrim($dbopts["path"],'/').';host='.$dbopts["host"] . ';port=' . $dbopts["port"],
                     'pdo.username' => $dbopts["user"],
                     'pdo.password' => $dbopts["pass"]
                 )
  );
?>
