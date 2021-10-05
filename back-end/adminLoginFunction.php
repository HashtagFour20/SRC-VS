<?php 

function adminLogin($uname, $secret){
  $response = array();
  $success = false;

  require("conn.php");

  $query = "SELECT `admin_id` FROM `admin` WHERE username = '".mysqli_real_escape_string($link, $uname)."'";

  $result = mysqli_query($link, $query);

  if (mysqli_num_rows($result) > 0) {
    $query = "SELECT * FROM `admin` WHERE username = '".mysqli_real_escape_string($link, $uname)."'";

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

// print_r(adminLogin("admin1","123s4"));

?>
