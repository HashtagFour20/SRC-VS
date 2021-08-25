<?php

session_start();

if($_SERVER["REQUEST_METHOD"] == "POST"){

  $email = $_POST["email"];
  $password = $_POST["password"];
  $message = "";
  $error = "";

  if(empty(trim($_POST["email"]))){
        $error = $error.'<div class="alert alert-warning" role="alert">Please enter an email.</div>';
  }
  if(empty(trim($_POST["password"]))){
        $error = $error.'<div class="alert alert-warning" role="alert">Please enter a password.</div>';
  }

  if($error == ""){

	//get the file that establishes a connection to the DB
  require("../back-end/conn.php");

  $query = "SELECT `student_id` FROM `student` WHERE student_email = '".mysqli_real_escape_string($link, $email)."'";

  $result = mysqli_query($link, $query);

  if (mysqli_num_rows($result) <= 0) {
    $message = '<div class="alert alert-danger" role="alert">That email does not exist.</div>';
  }
  else{

    $query = "SELECT * FROM `student` WHERE student_email = '".mysqli_real_escape_string($link, $email)."'";

    $result = mysqli_query($link, $query);

    $row = mysqli_fetch_array($result);

    if(password_verify($password, $row["password"]) ){

      $_SESSION["student_id"] = $row["student_id"];
      $_SESSION["permission"] = true;
      // header("Location: ../vote/index.html");
      // exit();

      print_r($_SESSION);

  }
  else {
      $message = '<div class="alert alert-danger" role="alert">Password does not match the email.</div>';
  }

  }

  }

  echo $message;
  echo $error;
}

?>
