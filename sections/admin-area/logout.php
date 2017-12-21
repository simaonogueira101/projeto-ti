<?php
  session_start();
  $_SESSION[‘logged’] = "false";
  echo "<script> window.location.assign('/admin-login.php'); </script>";
?>
