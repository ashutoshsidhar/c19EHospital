<!DOCTYPE html>
<html>
<head>
	<title>Self DB</title>
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
$temperature = $_POST["temp"];
$description = $_POST["description"];

$sql = "INSERT INTO selfassess (name, temperature, problem)
VALUES ('$name', '$temperature', '$description')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
	if($temperature > 97.9 && $temperature < 99  && $description == "NIL")
	{
		echo "<br>You Are Healthy";
	}
	else
	{
		echo "You Are Unhealthy";
	}
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
<a href="Self.php">
<button class ='btn btn-success' type ='submit' >Do it Again</button></a>
<a href="index.php">
<button class ='btn btn-success' type ='submit' >Go to Home</button></a>
</body>
</html>