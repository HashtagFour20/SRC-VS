<?php

session_start();
$message = "";
$error = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){

  $uname = $_POST["username"];
  $secret = $_POST["password"];
 
  if(empty(trim($_POST["username"]))){
        $error = $error.'<div class="alert alert-warning" role="alert">Please enter a username.</div>';
  }
  if(empty(trim($_POST["password"]))){
        $error = $error.'<div class="alert alert-warning" role="alert">Please enter a password.</div>';
  }

  if($error == ""){

    require("../back-end/adminLoginFunction.php");

    $loggedIn = adminLogin($uname, $secret);

    //print_r($loggedIn);

    if(empty($loggedIn[0])){
      $message = '<div class="alert alert-danger" role="alert">That username does not exist.</div>';
    }
    else{
      if($loggedIn["status"]){

        $_SESSION["admin_id"] = $loggedIn[0]["username"];
        $_SESSION["admin"] = true;

        //print_r($_SESSION);

        header("Location: ./dashboard/");
        exit();

      }
      else{
        $message = '<div class="alert alert-danger" role="alert">Password does not match the email.</div>';
      }


  }

}
  
}

?>
