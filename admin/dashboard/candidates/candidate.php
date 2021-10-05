<?php
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

$first_name = filter_input(INPUT_POST, 'first_name');
$last_name = filter_input(INPUT_POST, 'last_name');
$political_party = filter_input(INPUT_POST, 'political_party');
$faculty = filter_input(INPUT_POST, 'faculty');

$sql = "INSERT INTO candidates (candidate_name, candidate_surname, political_party, faculty)
VALUES ('$first_name', '$last_name', '$political_party', '$faculty')";

if ($conn->query($sql)){
echo "New record is inserted sucessfully";
}
else{
echo "Error: ". $sql ."
". $conn->error;
}

$conn->close();
?>
