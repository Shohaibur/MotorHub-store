<?php 
    session_start();
	require './helper/login_registration_manager.php';



	$email = "";
	$password = "";

	$emailError = "";
	$passwordError = "";


	if($_SERVER["REQUEST_METHOD"] == "POST") {


    if (validate()) {

    	if(!isCorrectPassword($email,$password)){
    		$passwordError = "Wrong password";
    	} else{
            $_SESSION["isLoggedIn"] = true;
    		header("Location: home.php");
            die();
    	}

        
    }
    

	}




function validate() : bool
{ 
    
    $validate_email = validate_email();
    $validate_password = validate_password();

    return ($validate_email && $validate_password);

}


function validate_email() : bool
{

    global $email, $emailError;

    if (!empty($_POST['email']) && isset($_POST['email'])) {

        $email = get_input($_POST['email']);

        $pattern = "/^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i";
        if(!preg_match($pattern, strtolower($email))){
            $emailError = "Please enter valid email";
            return false;

        } else if(!isUserAlreadyExist($email)){
        	$emailError = "Email doesn't exist";
            return false;
        }

        return true;

    } else{

        $emailError = "Email is Required";

        return false;
    }
}


function validate_password() : bool
{

    global $password, $passwordError;


    if (empty($_POST['pass']) || !isset($_POST['pass'])) {

        $passwordError = "Password is required";

        return false;
    }

    

    $password =get_input($_POST['pass']);

    $pattern="/^\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])\S*$/";

    

    if (!preg_match($pattern, $password)) {

        $passwordError = "Password must contain atleast 8 character, 1 number, 1 upper-caase and 1 lower-case character ";

        return false;
    }


    return true;
}


function get_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}



?>