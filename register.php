<!DOCTYPE html>
<html>
	<head>
		<title>Student Registration</title>
		<link href="css/bootstrap.min.css" rel="stylesheet" />
	<style type = "text/css">
		h1 
		{
			background-color: white;
		}
		
		body
		{
   		 	background-image: url("https://userscontent2.emaze.com/images/8803f7e9-655f-45fe-b1d0-69b2b67aeec1/fe2574db2c5dc192b9872c9b4dc6be22.jpg");
   			background-color: #cccccc;
		}

		img 
		{
			display: block;
    		margin-left: auto;
   			margin-right: auto 
		}

</style>

	</head>
	<body>
		<div class="container">
			<h1 class="text-center">Student Registration</h1>
			<div class="col-lg-offset-3 col-lg-6">
				<div class="well">
					<form method="POST" action="welcome.php"
						class="form-horizontal">
						<div class="form-group">

							<div class="col-lg-8">
								<input type="text" name="sid"
									class="form-control" placeholder="Student ID" required />
							</div>
						</div>

							<div class="col-lg-8">
								<input type="text" name="fn"
									class="form-control" placeholder="First Name" required />
							</div>
						</div>

				
							<div class="col-lg-8">
								<input type="text" name="ln"
									class="form-control" placeholder="Last Name" required />
							</div>
						</div>


							<div class="col-lg-8">
								<input type="email" name="email"
									class="form-control" placeholder="E-mail address" required />
							</div>
						</div>

				

						<div class="col-lg-8">
								<input type="email1" name="email"
									class="form-control" placeholder="Re-enter e-mail address" required />
							</div>
						</div>

					
		
							<div class="col-lg-8">
								<input type="password" name="pwd"
									class="form-control" placeholder="New password" required />
							</div>
						</div>

		
							<div class="col-lg-8">
								<input type="date" name="bday"
									class="form-control" placeholder="Re-enter e-mail address" required />
							</div>
						</div>

							<div class="col-lg-offset-4 col-lg-8">
								<button name="register" class="btn btn-success">
									Register
							</button>

					</form>
				</div>
			</div>
		</div>
	</body>
</html>