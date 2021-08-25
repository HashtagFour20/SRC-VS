<?php

session_start();

if($_SERVER["REQUEST_METHOD"] == "POST"){

  $username = $_POST["username"];
  $password = $_POST["password"];
  $message = "";
  $error = "";

  if(empty(trim($_POST["username"]))){
        $error = $error.'<div class="alert alert-warning" role="alert">Please enter a username.</div>';
  }
  if(empty(trim($_POST["password"]))){
        $error = $error.'<div class="alert alert-warning" role="alert">Please enter a password.</div>';
  }

  if($error == ""){

  require("../back-end/conn.php");

  $query = "SELECT `username` FROM `admin` WHERE username = '".mysqli_real_escape_string($link, $username)."'";

  $result = mysqli_query($link, $query);

  if (mysqli_num_rows($result) <= 0) {
    $message = '<div class="alert alert-danger" role="alert">That username does not exist.</div>';
  }
  else{

    $query = "SELECT * FROM `admin` WHERE username = '".mysqli_real_escape_string($link, $username)."'";

    $result = mysqli_query($link, $query);

    $row = mysqli_fetch_array($result);

    if(password_verify($password, $row["password"]) ){

      $_SESSION["admin_id"] = $row["username"];
      $_SESSION["admin"] = true;
      // header("Location: ../vote/index.html");
      // exit();

      print_r($_SESSION);

  }
  else {
      $message = '<div class="alert alert-danger" role="alert">Password does not match the username.</div>';
  }

  }

  }

  echo $message;
  echo $error;
}

?>
