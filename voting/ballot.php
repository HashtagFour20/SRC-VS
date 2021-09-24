<?php
    session_start();
    $studentNumber = 1;

    $deputyPosition = 9;
    $chairperson = 9;
    $secretary = 9;
    $treasurer = 9;
    $lhcOfficer = 9;
    $sacOfficer = 9;
    $communicationOfficer = 9;
    $projectOfficer = 9;
    $lirOfficer = 9;


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

    $sql = "INSERT INTO ballot (date, student_number) VALUES (NOW(), $studentNumber)";

    $sql = "SELECT ballot_id FROM ballot WHERE student_number = $studentNumber";

    $sql = "INSERT INTO vote (candidate_id, ballot_id, date) VALUES ($deputyPosition, ballot_id, NOW())";
    $sql = "INSERT INTO vote (candidate_id, ballot_id, date) VALUES ($chairperson, ballot_id, NOW())";
    $sql = "INSERT INTO vote (candidate_id, ballot_id, date) VALUES ($secretary, ballot_id, NOW())";
    $sql = "INSERT INTO vote (candidate_id, ballot_id, date) VALUES ($treasurer, ballot_id, NOW())";
    $sql = "INSERT INTO vote (candidate_id, ballot_id, date) VALUES ($lhcOfficer, ballot_id, NOW())";
    $sql = "INSERT INTO vote (candidate_id, ballot_id, date) VALUES ($sacOfficer, ballot_id, NOW())";
    $sql = "INSERT INTO vote (candidate_id, ballot_id, date) VALUES ($communicationOfficer, ballot_id, NOW())";
    $sql = "INSERT INTO vote (candidate_id, ballot_id, date) VALUES ($projectOfficer, ballot_id, NOW())";
    $sql = "INSERT INTO vote (candidate_id, ballot_id, date) VALUES ($lirOfficer, ballot_id, NOW())";
?>