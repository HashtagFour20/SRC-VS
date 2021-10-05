<?php 

function studentLogin($email, $secret){
  $response = array();
  $success = false;

  require("conn.php");

  $query = "SELECT `student_id` FROM `student` WHERE student_email = '".mysqli_real_escape_string($link, $email)."'";

  $result = mysqli_query($link, $query);

  if (mysqli_num_rows($result) > 0) {
    $query = "SELECT * FROM `student` WHERE student_email = '".mysqli_real_escape_string($link, $email)."'";

    $result = mysqli_query($link, $query);

    $row = mysqli_fetch_assoc($result);

    array_push($response, $row);

    if(password_verify($secret, $row["password"]) ){

      $success = true;
    }
 
  }

  else{
      
    array_push($response, []);
  }

  $response["status"] = $success;

  return $response;

}

// print_r(studentLogin("219071438@mycput.ac.za","123asd4"));

?>
