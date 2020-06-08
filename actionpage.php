<!DOCTYPE html>
<html>
<title>Student Records</title>
<link rel="shortcut icon" type="image/png" href="lol.png">
<head>
<style>
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  padding: 8px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}

tr:hover {background-color:#f5f5f5;}
</style>
</head>
<body>
	<title>Login</title>
	<table>
	    <tr>
	        <th>Full Name</th>
	        <th>Standard</th>
	        <th>Mobile</th>
	        <th>Email</th>
	        <th>address</th>
	    </tr>

<?php
if ( isset( $_POST['submit'] ) ) {
	$e = $_REQUEST['mail'];
    $p = $_REQUEST['pswd'];
}
if ( ($e == 'nilofarinamdar@gmail.com') && ($p == 'pi786'))
{


$conn = new mysqli("localhost","root","","student");
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}



$sql2 = "SELECT *  FROM form";
$result = $conn->query($sql2);
if($result->num_rows > 0)
    {
    	while ($row = $result-> fetch_assoc()) {
    		echo "<tr><td>".$row["Fullname"].
    		     "</td><td>".$row["standard"].
    		     "</td><td>".$row["mobile"].
    		     "</td><td>".$row["email"].
    		     "</td><td>".$row["address"]."</td></tr>";
    	}
    	echo "</table>";
    }
$conn->close();
}
else
{
	echo "Ivalid credetial";
}
?>
</table>

</body>
</html>