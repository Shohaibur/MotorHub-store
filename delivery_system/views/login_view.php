<!DOCTYPE html>
<html lang="en">
	<head>
	    <meta charset="UTF-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <title>Login</title>
	    <link rel="stylesheet" type="text/css" href="views/css/login.css">
	    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

	    <script type="text/javascript" src="controllers/login_controller.js"></script>
	</head>

	<body>

		<div class="root">

			<div class="login-container">
				
				<div class="login-pic js-tilt" data-tilt>
					<img src="images/img-03.jpg" alt="IMG">
				</div>

				<div class="login-form-container">

					<form class="login-form validate-form" name="login-form" method="post">

						<h3 id="logo">Sign In</h3>

					    <label for="email">Email</label>
					    <input type="email" id="email" name="email" placeholder="john@example.com" autocomplete="off" />

					    <label for="password">Password</label>
					    <input type="password" id="password" name="password" placeholder="Enter your password.." autocomplete="off" />

					    <input type="button" name="button" value="Sign In" onclick="return validateForm()"/>

					    <div class="next">
							<a class="txt" href="registration.php">
								Create your Account
								<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
							</a>
						</div>
						
					</form>
					<br>

					

					
				</div>

								
			</div>
			
		</div>
		

	</body>
</html>