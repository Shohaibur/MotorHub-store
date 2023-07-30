<?php

	session_start();

	require 'api_config.php';

	if($_SERVER["REQUEST_METHOD"] == "POST") {



		$response = new \stdClass();


		
		$email = $_REQUEST['email'];
		$password = $_REQUEST['password'];





		$sql = "SELECT * FROM delivery_user WHERE email = '$email' AND password = BINARY '$password'";
		$result = mysqli_query($conn,$sql);
		


		if (mysqli_num_rows($result) > 0) {
	  		$userId = "";
			while($row = mysqli_fetch_assoc($result)) {
			    $userId = $row["id"];
			}


			$response->status = 200;
		  	$response->message = "Sign In Successful";

		  	$_SESSION["isLoggedIn"] = true;



		} else {
		  $response->status = 401;
		  $response->message = "Invalid Email or Password";
		}



		echo json_encode($response);

		mysqli_close($conn);

	}

?>