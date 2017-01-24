<?php
	if(isset($_POST['register'])) 
	{
		$studentNo = $_POST['sid'];
		$lastName =$_POST['ln'];
		$firstName =$_POST['fn'];
		$emailAddress =$_POST['email'];
		$password =$_POST['pwd'];
		$birthDate =$_POST['bday'];
		
		// echo "Welcome, " . $firstName . " " . $lastName . "!<br/>" . 
		// 		'Your ID Number is ' . $studentNo . '. <br/>
		// 		Your E-mail Address is ' . $emailAddress . '. <br/>
		// 		Your password is ' . $password . '. <br/>
		// 		Your birthday is ' . $birthDate . '. <br/>
				
		// 		The time is ' . date('c');	
	
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
			Please review your account details.
		</br>
			ID Number: <?php echo $studentNo ?></br>
			First Name: <?php echo $firstName ?></br>
			Last Name: <?php echo $lastName ?></br>
			E-mail Address: <?php echo $emailAddress ?></br>
			Birthday: <?php echo $birthDate ?></br>
			Password: <?php echo $password ?></br>

		</div>
		</div>


	</body>
</html>