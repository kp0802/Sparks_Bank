<?php

  $db_host = "localhost";
  $db_user = "user";
  $db_pass = "root1";
  $db_name = "sparksfoundation";

  $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

  if(!$conn){
    die("Unable to connect to the database due to the following error: ".mysqli_connect_error());
  }

?>