<?php
  $dbopts = parse_url(getenv('DATABASE_URL'));
  $conn_string = "host=".$dbopts["host"] . " port=".$dbopts["port"] . " dbname=".ltrim($dbopts["path"],'/') . " user=".$dbopts["user"] . " password=".$dbopts["pass"];

  // For deploy
  $dbconn = pg_connect($conn_string);

  // For local
  //$dbconn = pg_connect("host=localhost port=5432 dbname=simaonogueira");
?>
