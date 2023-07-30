<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" type="text/css" href="views/css/registration.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

    <script type="text/javascript" src="controllers/registration_controller.js"></script>
</head>
<body>


	<div class="root">

			<div class="reg-container">

				<form class="reg-form validate-form" name="reg-form" method="post">


					<h3 id="logo">Sign Up</h3>

					<div class="left-reg-container">

						<label for="name">Name</label>
						<input type="text" id="name" name="name" value="" placeholder="John Doe">

					    <label for="email">Email</label>
					    <input type="email" id="email" name="email" placeholder="john@example.com" autocomplete="off" value="">

					    <label for="phone">Contact No</label>
					    <input type="Number" id="phone" name="phone" placeholder="01.." value=""> 

					    <label for="dob">Date Of Birth:</label>
                        <input type="date" id="dob" name="dob" value="">

					    <label for="driving_license_no">Driving License No</label>
						<input type="text" id="driving_license_no" name="driving_license_no" placeholder=" Driving License No:" value="">
						
						<label for="transport_license_no">Transport License No</label>
						<input type="text" id="transport_license_no" name="transport_license_no" placeholder=" Transport License No:" value="">

					    
						
					</div>

					<div class="right-reg-container">

						<label for="gender">Gender</label>
					    <div class="radio-group">

					    	<div class="radio" >
					    		<div class="radio-input">
					    			<input type="radio" name="gender" value="male">
					    		</div>

					    		<div class="radio-label">
					    			<label for="male">Male</label>
					    		</div>
					 
					    	</div>

					    	<div class="radio">
					    		<div class="radio-input">
					    			<input type="radio" name="gender" value="female">
					    		</div>

					    		<div class="radio-label">
					    			<label for="female">Female</label>
					    		</div>
					    	</div>
					    	
					    </div>


						<label for="delivery_area">Delivery Area</label>
						<select id="delivery_area" name="delivery_area">
                            <option value="inside_dhaka" selected>Inside Dhaka</option>
                            <option value="outside_dhaka">Outside Dhaka</option>
                        </select>

                        <label for="transport">Transport</label>
                        <select id="transport" name="transport">
                            <option value="car">Car</option>
                            <option value="bike">Bike</option>
                        </select>


                        <label for="payment_option">Payment Option</label>
                        <select id="payment_option" name="payment_option">
                            <option value="cash">Cash On Delivery</option>
                            <option value="online">Online Payment</option>
                        </select>


                        <label>Password</label>
                        <input type="password" id="pass" name="pass" value="" placeholder="Password">

                        <label>Confirm Password</label>
                        <input type="password" id="confirm_pass" name="confirm_pass" value="" placeholder="Confirm Password">

						
					</div>

					<div class="form-footer">

						<div class="footer-wrapper">


							<input type="button" name="button" value="Sign Up" onclick="return validateForm()"/>

							<div class="next">

								<a class="txt" href="login.php">
									Already Have An Account?
									<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
								</a>
								
							</div>
							
						</div>
						
					</div>

					
				</form>

								
			</div>
			
		</div>

</body>
</html>