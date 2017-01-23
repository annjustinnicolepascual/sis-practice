<!DOCTYPE html>
<html>
	<head>
		<title>Student Registration</title>
		<link href="css/bootstrap.min.css" rel="stylesheet" />
		<style type = "text/css">
		head
		{
			background-color:#dfe3ee;
		}

		body
		{
   		 	
   			background-color:#dfe3ee;
		}


		div
		{
			background-color:#dfe3ee;
		}

		form
		{

			background-color:#dfe3ee;
		}


		img 
		{
			display: block;
    		margin-left: auto;
   			margin-right: auto 
		}

</style>


	</head>
<?php
	if(isset($_POST['register'])) 
	{
		$studentNo = $_POST['sid'];
		$lastName =$_POST['ln'];
		$firstName =$_POST['fn'];
		$emailAddress =$_POST['email'];
		$password =$_POST['pwd'];
		$birthDate =$_POST['bday'];
		
		echo "Welcome, " . $firstName . " " . $lastName . "!<br/>" . 
				'Your ID Number is ' . $studentNo . '. <br/>
				Your E-mail Address is ' . $emailAddress . '. <br/>
				Your password is ' . $password . '. <br/>
				Your birthday is ' . $birthDate . '. <br/>
				
				The time is ' . date('c');	
	
	}

	else 
	{
		header('location: register.php');
	}
?>