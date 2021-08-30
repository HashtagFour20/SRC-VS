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
?>

<!DOCTYPE html>
<html>
<head>
<title> Voting</title>
</head>

<body>
<h2>Vote for a candidate</h2>
<?php
    $sql = "SELECT * FROM candidates;";
    $result = mysqli_query($conn, $sql);
    $i=0;
    while($row = mysqli_fetch_assoc($result)) {
?>
    <input type = "radio" name = "candidate" ><?php echo $row['candidate_name']; echo " "; echo $row['candidate_surname']; echo " "; echo $row['political_party'];?><br>
<?php
    $i++;
    }
?>
<input type="submit" value="Submit">
</body>
</html>