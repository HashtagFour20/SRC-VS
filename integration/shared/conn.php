<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "voting_system";

$link = mysqli_connect($servername, $username, $password, $dbname);
if(mysqli_connect_error() )
  die("An error occured - Try again later");

?>
