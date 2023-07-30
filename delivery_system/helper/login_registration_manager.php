<?php 


function registerUser($name, $email, $phoneNumber, $gender ,$dob, $password, $confirmPassword, $drivingLicenseNo, $transportLicenseNo, $transport, $deliveryArea, $paymentOption){
	$jsonString = file_get_contents('./db/user.json');
	$userPool = json_decode($jsonString);

	$newUser = new \stdClass();
	$newUser->name = $name;
	$newUser->email = $email;
	$newUser->phoneNumber = $phoneNumber;
	$newUser->gender = $gender;
	$newUser->dob = $dob;
	$newUser->password = $password;
	$newUser->confirmPassword = $confirmPassword;
	$newUser->drivingLicenseNo = $drivingLicenseNo;
	$newUser->transportLicenseNo = $transportLicenseNo;
	$newUser->transport = $transport;
	$newUser->deliveryArea = $deliveryArea;
	$newUser->paymentOption = $paymentOption;

	if ($userPool == null) {
		$userPool = new \stdClass();
	}

	$userPool->$email = $newUser;

	$newJsonString = json_encode($userPool);
	
	file_put_contents('./db/user.json', $newJsonString);
}

function isUserAlreadyExist($email) : bool{

	$jsonString = file_get_contents('./db/user.json');
	$userPool = json_decode($jsonString);

	return isset($userPool->$email);

}


function isCorrectPassword($email, $password) : bool{

	$jsonString = file_get_contents('./db/user.json');
	$userPool = json_decode($jsonString);

	return $userPool->$email->password == $password;

}

 ?>