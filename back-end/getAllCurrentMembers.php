<?php

function getAllCurrentMembers(){
  $current_members = array();
  require("conn.php");

  $query = "SELECT * FROM `current_members`";

  $result = mysqli_query($link, $query);

  while($row = mysqli_fetch_assoc($result)) {
      array_push($current_members,$row);
    }

  return $current_members;

}

// print_r(getAllCurrentMembers());

?>
