<?php
  session_start();

  include '../../php/server-connection.php';

  $result = pg_query($dbconn, "SELECT * FROM user_table");

  $rowResource = pg_query($dbconn, "SELECT count(*) AS exact_count FROM user_table");
  $rowCount = pg_fetch_result($rowResource, 0, 0);
  //echo $rowResources;
  //echo "<br/>";

  $USER_ARRAY = array();

  for ($i=0; $i < $rowCount; $i++) {
    $val = pg_fetch_result($result, $i, 0);
    //echo $val;
    array_push($USER_ARRAY, $val);
    //echo "</br>";
  }

  //print_r($USER_ARRAY);

  $USERNAME = $_POST["usernameNEW"];
  $USERPASS = $_POST["passwordNEW"];

  /*
  echo "</br>";
  echo "user: " . $USERNAME;
  echo "</br>";
  echo "pass: " . $USERPASS;
  echo "</br>";
  */
  if ( empty($USERNAME) || empty($USERPASS) ) {
    $USERSTRING = "'admin.php?empty=true'";
    echo "<script> window.location.assign(" . $USERSTRING . "); </script>";
  } else {
    if (in_array($USERNAME, $USER_ARRAY)) {
      $USERSTRING = "'admin.php?user=" . $USERNAME . "&repeat=true'";
      //echo "Got " . $USERNAME;
      echo "<script> window.location.assign(" . $USERSTRING . "); </script>";
    } else {
      $USERSTRING = "'admin.php?user=" . $USERNAME . "&repeat=false'";
      //echo "Not got " . $USERNAME;
      $result = pg_query($dbconn, "INSERT INTO user_table VALUES ('" . $USERNAME . "','" . $USERPASS . "')");
      echo "<script> window.location.assign(" . $USERSTRING . "); </script>";
    }
  }

?>
