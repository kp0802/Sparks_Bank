<?php

  $db_host = "127.0.0.1:3306";
  $db_user = "kp";
  $db_pass = "kphp1302";
  $db_name = "sparksfoundation";

  $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

  if(!$conn){
    die("Unable to connect to the database due to the following error: ".mysqli_connect_error());
  }

?>
