<?php
// $json = file_get_contents('php://input');
// $data = json_encode($json);

// require("../back-end/conn.php");

// $member_id = $data["member_id"];

// $query = "SELECT * FROM `current_members` WHERE member_id = '".mysqli_real_escape_string($link, 1)."'";

// $result = mysqli_query($link, $query);

// $row = mysqli_fetch_assoc($result);

// echo json_encode($row);

function getCurrentMember($member_id){
    require("conn.php");

    $query = "SELECT * FROM `current_members` WHERE member_id = '".mysqli_real_escape_string($link, $member_id)."'";

    $result = mysqli_query($link, $query);

    $row = mysqli_fetch_assoc($result);

    return $row;

}

// print_r(getCurrentMember(1));

 ?>
