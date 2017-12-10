<?php
  function pg_connection_string_from_database_url() {
  extract(parse_url($_ENV["postgres://flhhfrpwgxcktk:117ff4b97a223dbef6349dd1bf86e75568d149b5ad23bcbf85d728cd7f28c6fe@ec2-79-125-118-221.eu-west-1.compute.amazonaws.com:5432/dde5e88nckdggp"]));
  return "user=$user password=$pass host=$host dbname=" . substr($path, 1); # <- you may want to add sslmode=require there too
  }
?>
