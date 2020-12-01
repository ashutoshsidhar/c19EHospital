<!DOCTYPE html>
<html>
<head>
	<title>E Appointment</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<header>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<a class="navbar-brand" href="index.php">Covid-19 Self Test Portal</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">
		<li class="nav-item">
        <a class="nav-link" href="Self.php">Do A Self Assessment</a>
		</li>
		<li class="nav-item">
        <a class="nav-link enabled" href="Eapp.php" tabindex="-1" aria-enabled="true">E Appointment</a>
		</li>
		<li class="nav-item">
        <a class="nav-link enabled" href="BloodTest.php" tabindex="-1" aria-enabled="true">Blood Test</a>
		</li>
		<li class="nav-item">
        <a class="nav-link enabled" href="Del.php" tabindex="-1" aria-enabled="true">Medicine Delivery</a>
		</li>
		<li class="nav-item">
        <a class="nav-link enabled" href="contact.php" tabindex="-1" aria-enabled="true">Contact Us</a>
		</li>
		</ul>
	</header>
	<main>
	<div class='container-fluid'>
	<div class='jumbotron text-center'>
	<h1>E Appointment</h1>
	<p>Once Dr Confirms The Appointment You Will Be Mailed/Messaged</p>
	</div>
	</div>
	<div class='container'>
	<form action ='eappdb.php' method='POST'>
	<div class='form-group'>
	<label for='name'>Name</label>
	<input class ='form-control' id='name' name='name' type='text'>
	</div>
	<div class='form-group'>
	<label for='age'>Age</label>
	<input class ='form-control' id='age' name='age' type='text'>
	</div>
	<div class='form-group'>
	<label for='description'>Problem</label>
	<input class ='form-control' id='description' name='description' type='text'>
	</div>
	<div class='form-group'>
	<label for='ph'>Phone No.</label>
	<input class ='form-control' id='ph' name='ph' type='text'>
	</div>
	<div class='form-group'>
	<label for='email'>Email ID</label>
	<input class ='form-control' id='email' name='email' type='text'>
	</div>
	<button class ='btn btn-success' type ='submit'>Book An Appointment</button>
	</form>
	</div>
	</main>
	 
</body>
</html>