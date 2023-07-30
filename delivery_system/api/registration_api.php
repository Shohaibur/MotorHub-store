<?php

	require 'api_config.php';

	if($_SERVER["REQUEST_METHOD"] == "POST") {



		$response = new \stdClass();

		
		$name = $_REQUEST['name'];
		$email = $_REQUEST['email'];
		$phone = $_REQUEST['phone'];
		$gender = $_REQUEST['gender'];
		$dob = $_REQUEST['dob'];
		$drivingLicenseNo = $_REQUEST['driving_license_no'];
		$transportLicenseNo = $_REQUEST['transport_license_no'];
		$deliveryArea = $_REQUEST['delivery_area'];
		$transport = $_REQUEST['transport'];
		$paymentOption = $_REQUEST['payment_option'];
		$password = $_REQUEST['password'];



		$sql = "INSERT INTO delivery_user (name, email, phone_number, gender, dob, driving_license_no, transport_license_no, transport, delivery_area, payment_option, password)
		VALUES ('$name', '$email', '$phone', '$gender', '$dob', '$drivingLicenseNo', '$transportLicenseNo', '$transport', '$deliveryArea', '$paymentOption', '$password')";

		try{

			if (mysqli_query($conn, $sql)) {

				$response->status = 200;
				$response->message = "User Registered Successfully";
	  
			  } else {
	  
				  // $error_no = mysqli_errno($conn);
				  // $error_msg = mysqli_error($conn);
	  
				$response->status = 409;
				$response->message = "User Already Exist With This Email";
			  }

		} catch(Exception $e){
			$response->status = 409;
			$response->message = "User Already Exist With This Email";

		}	
		
		


		echo json_encode($response);

		mysqli_close($conn);

	}

?>