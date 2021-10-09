<?php
    session_start();

     $servername = "localhost";
     $username = "root";
     $password = "";
     $dbname = "voting_system";

     // Create connection
     $conn = new mysqli($servername, $username, $password, $dbname);
     // Check connection
     if ($conn->connect_error) {
       die("Connection failed: " . $conn->connect_error);
     }

    $studentNumber = $_SESSION["student_number"];

    if(mysqli_num_rows($result) <= 0){
        $sql = "INSERT INTO ballot (date, student_number) VALUES (NOW(), $studentNumber)";

        $sql = "SELECT ballot_id FROM ballot WHERE student_number = $studentNumber";

        foreach($_POST as $vote){
            $candidate = $vote['candidate_id'];
            $sql = "INSERT INTO vote (candidate_id, ballot_id, date) VALUES ($candidate, ballot_id, NOW())"
        }
    }
?>