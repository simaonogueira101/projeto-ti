<?php
  include 'server-connection.php';

  //Queries
  $result = pg_query($dbconn, "SELECT * FROM user_table");

  $rowResource = pg_query($dbconn, "SELECT count(*) AS exact_count FROM user_table");
  $rowCount = pg_fetch_result($rowResource, 0, 0);
  //echo $rowCount;
  //echo "<br/>";

  $USERNAME = $_POST["username"];
  $USERPASS = $_POST["password"];

  if($USERNAME && $USERPASS) {
    for ($i=0; $i < $rowCount; $i++) {
      if($USERNAME == pg_fetch_result($result, $i, 0) && $USERPASS == pg_fetch_result($result, $i, 1)) {
        /*
        echo "<br />";
        echo pg_fetch_result($result, $i, 0);
        echo "<br />";
        echo pg_fetch_result($result, $i, 1);
        echo "<br />";
        echo "login!";
        echo "<br />";
        echo "user " . $USERNAME;
        echo "<br />";
        echo "password " . $USERPASS;
        echo "<br />";
        */
        $_SESSION[‘logged’] = "true";
        //echo $_SESSION[‘logged’];
        echo "<script> window.location.assign('/admin-login.php?login=true'); </script>";
      } else {
        /*
        echo "<br />";
        echo pg_fetch_result($result, $i, 0);
        echo "<br />";
        echo pg_fetch_result($result, $i, 1);
        echo "<br />";
        echo "nope...";
        echo "<br />";
        echo "user " . $USERNAME;
        echo "<br />";
        echo "password " . $USERPASS;
        echo "<br />";
        */
        //echo "<script> window.location.assign('/admin-login.php?login=false'); </script>";
      }
    }
  }

  /*
  for ($j=0; $j < 2; $j++) {
    for ($i=0; $i < $rowCount; $i++) {
      $val = pg_fetch_result($result, $i, $j);
      echo $val;
      echo " ";
    }
    echo "<br/>";
  }
  */

?>
