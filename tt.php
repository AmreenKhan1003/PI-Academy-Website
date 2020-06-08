<!DOCTYPE html>
<html>
<head>
<title>Student Records</title>
<link rel="shortcut icon" type="image/png" href="lol.png">
</head>
<body>
<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

if ( isset( $_POST['submit'] ) ) {
	$n = $_REQUEST['name'];
    $s = $_REQUEST['std'];
    $m = $_REQUEST['mob'];
    $e = $_REQUEST['email'];
    $a = $_REQUEST['address'];

 
// Create connection
$conn = new mysqli("localhost","root","","student");
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO form (Fullname, standard, mobile, email, address)
VALUES ('$n', '$s', '$m', '$e', '$a')";

if ($conn->query($sql) === TRUE) {
  echo "Your form is submitted";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
}
$conn->close();
?>
</body>
</html>