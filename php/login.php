<?php
  # This function reads your DATABASE_URL config var and returns a connection
  # string suitable for pg_connect. Put this in your app.
  function pg_connection_string_from_database_url() {
    extract(parse_url($_ENV["postgres://flhhfrpwgxcktk:117ff4b97a223dbef6349dd1bf86e75568d149b5ad23bcbf85d728cd7f28c6fe@ec2-79-125-118-221.eu-west-1.compute.amazonaws.com:5432/dde5e88nckdggp"]));
    return "user=$user password=$pass host=$host dbname=" . substr($path, 1); # <- you may want to add sslmode=require there too
  }
  # Here we establish the connection. Yes, that's all.
  $pg_conn = pg_connect(pg_connection_string_from_database_url());
  # Now let's use the connection for something silly just to prove it works:
  $result = pg_query($pg_conn, "SELECT relname FROM pg_stat_user_tables WHERE schemaname='public'");
  print "<pre>\n";
  if (!pg_num_rows($result)) {
    print("Your connection is working, but your database is empty.\nFret not. This is expected for new apps.\n");
  } else {
    print "Tables in your database:\n";
    while ($row = pg_fetch_row($result)) { print("- $row[0]\n"); }
  }
  print "\n";
?>
