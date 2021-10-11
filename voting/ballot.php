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

    //fetches student number from the session
    $studentNumber = $_SESSION["student_number"];

    //checks if student number already has a ballot
    $result = "SELECT student_number FROM ballot WHERE student_number = $studentNumber";

    //if no rows = student number
    if(mysqli_num_rows($result) <= 0){

        //create new ballot for student number
        $createBallot = "INSERT INTO ballot (date, student_number) VALUES (NOW(), $studentNumber)";

        //selects the ballot id that is linked to the student number
        $selectBallot = "SELECT ballot_id FROM ballot WHERE student_number = $studentNumber";

        //records each vote
        foreach($_POST as $vote){

            //inserts candidate id, ballot id and date in vote table
            $candidate = $vote['candidate_id'];
            $sql = "INSERT INTO vote (candidate_id, ballot_id, date) VALUES ($candidate, ballot_id, NOW())"
        }
    }
?>