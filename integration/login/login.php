<?php

session_start();

$message = "";
$error = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){

  $email = $_POST["email"];
  $secret = $_POST["password"];

  if(empty(trim($_POST["email"]))){
        $error = $error.'<div class="alert alert-warning" role="alert">Please enter an email.</div>';
  }
  if(empty(trim($_POST["password"]))){
        $error = $error.'<div class="alert alert-warning" role="alert">Please enter a password.</div>';
  }

  if($error == ""){

  require("../back-end/studentLoginFunction.php");

    $loggedIn = studentLogin($email, $secret);

    //print_r($loggedIn);

    if(empty($loggedIn[0])){
      $message = '<div class="alert alert-danger" role="alert">That email does not exist.</div>';
    }
    else{
      if($loggedIn["status"]){

        $_SESSION["student_id"] = $loggedIn[0]["student_id"];
        $_SESSION["permission"] = true;

        //print_r($_SESSION);

        header("Location: ../vote/index.php");
        exit();

      }
      else{
        $message = '<div class="alert alert-danger" role="alert">Password does not match the email.</div>';
      }

    }

  }

}

?>
