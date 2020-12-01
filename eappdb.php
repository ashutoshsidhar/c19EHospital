<!DOCTYPE html>
<html>
<head>
	<title>EAPP</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ashuecare";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$name = $_POST["name"];
$age = $_POST["age"];
$description = $_POST["description"];
$ph = $_POST["ph"];
$email = $_POST["email"];
$sql = "INSERT INTO eapp (Name, Age, problem, ph, Email)
VALUES ('$name', '$age', '$description', '$ph', '$email')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
	
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
  echo "<br>";
?>
<a href="index.php">
<button class ='btn btn-success' type ='submit' >Go to Home</button></a>
</body>
</html>