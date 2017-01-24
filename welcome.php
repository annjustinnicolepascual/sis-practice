<?php
	if(isset($_POST['register'])) 
	{


		$studentNo = $_POST['sid'];
		$lastName =$_POST['ln'];
		$firstName =$_POST['fn'];
		$emailAddress =$_POST['email'];
		$password =$_POST['pwd'];
		$birthDate =$_POST['bday'];
	
	
	}

	else 
	{
		header('location: register.php');
	}
?>

<html>
	<head>
		<title>Student Registration</title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/untitled.css" rel="stylesheet">
	</head>
	<body>
		<div class="col-lg-offset-3 col-lg-6">
		<div class="well">
			<h1>Welcome, <?php echo $firstName . "!"?></h1>
			<p>Good day! Today is <?php echo date("l") . ", " . date("F d, Y") . "- " . date("h:i:sa")?> </p>
			<p>Please review your account details.</p>
		</br>
			<p>ID Number: <?php echo $studentNo ?></br></p>
			<p>First Name: <?php echo $firstName ?></br></p>
			<p>Last Name: <?php echo $lastName ?></br></p>
			<p>E-mail Address: <?php echo $emailAddress ?></br></p>
			<p>Birthday: <?php echo $birthDate ?></br></p>
			<p>Password: <?php echo $password ?></br></p>
	

	<form>
    <button name="back" class="btn btn-success" formaction="register.php">Go Back!</button>
	</form>
		</div>
		</div>




	</body>
</html>