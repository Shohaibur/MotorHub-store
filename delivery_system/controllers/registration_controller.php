<?php

require './helper/login_registration_manager.php';

$name = "";
$email = "";
$phoneNumber = "";
$gender = "";
$dob = "";
$password = "";
$confirmPassword = "";
$drivingLicenseNo = "";
$transportLicenseNo = "";
$transport = "";
$deliveryArea = "";
$paymentOption = "";

$nameError = "";
$emailError = "";
$phoneNumberError = "";
$genderError = "";
$dobError = "";
$passwordError = "";
$confirmPasswordError = "";
$licenseNoError = "";
$transportError = "";
$drivingLicenseNoError = "";
$transportLicenseNoError = "";
$deliveryAreaError = "";
$paymentOptionError = "";

if($_SERVER["REQUEST_METHOD"] == "POST") {


    if (validate()) {

        if (isUserAlreadyExist($email)) {

            $emailError = "Email already exist";
            // code...
        } else{
            registerUser($name, $email, $phoneNumber, $gender, $dob, $password, $confirmPassword, $drivingLicenseNo, $transportLicenseNo, $transport, $deliveryArea, $paymentOption);
            header("Location: login.php");
            die();
        }
        
    }
    

}


function validate() : bool
{ 
    $validate_name = validate_name();
    $validate_email = validate_email();
    $validate_phone = validate_phone();
    $validate_gender = validate_gender();
    $validate_age = validate_age();
    $validate_driving_license = validate_driving_license();
    $validate_transport_license = validate_transport_license();
    $validate_transport = validate_transport();
    $validate_payment_option = validate_payment_option();
    $validate_password = validate_password();


    return ($validate_name && $validate_email && $validate_phone && $validate_gender && $validate_age && $validate_driving_license && $validate_transport_license && $validate_transport && $validate_payment_option && $validate_password);

}




function validate_name() : bool
{
    global $nameError, $name;

    if (!empty($_POST['name'] && isset($_POST['name']))) {

        $name = get_input($_POST['name']);

        return true;
    } else{

        $nameError = "Name is Required";

        return false;
    }

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

        } 

        return true;

    } else{

        $emailError = "Email is Required";

        return false;
    }
}

function validate_phone() : bool
{
    global $phoneNumber,$phoneNumberError;

    if (!empty($_POST['phone']) && isset($_POST['phone'])) {

      $phoneNumber = get_input($_POST['phone']);

      if (strlen($phoneNumber) != 11) {
          $phoneNumberError = "Please enter valid phone number";
          return false;
      } 

      return true;
    } else{

        $phoneNumberError = "Phone number is required";

        return false;
    }

}

function validate_gender() : bool
{

    global $gender, $genderError;

    if (!empty($_POST['gender']) && isset($_POST['gender'])) {

        $gender = get_input($_POST['gender']);

        return true;
    } else{

        $genderError = "Gender is required";

        return false;
    }
}

function validate_age() : bool
{
    global $dob, $gender, $dobError;

    if (!empty($_POST['dob']) && isset($_POST['dob'])) {
        $dob = get_input($_POST['dob']);


        $birth_date = strtotime($dob);
        $now = time();
        $age = $now-$birth_date;
        $age = floor($age/60/60/24/365.25);

        if ($gender == "male" && $age<18) {
            $dobError = "Your age must be at least 18";
            return false;
        } else if ($gender == "female" && $age<20) {
            $dobError = "Your age must be at least 20";
            return false;
        }
        return true;


    } else{
        $dobError = "Please enter your date of birth";
        return false;
    }


}

function validate_driving_license() : bool
{
    global $drivingLicenseNo, $drivingLicenseNoError;

    if (!empty($_POST['driving_license_no']) && isset($_POST['driving_license_no'])) {

        $drivingLicenseNo = get_input($_POST['driving_license_no']);

        $pattern="/^\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])\S*$/";

        if (!preg_match($pattern, $drivingLicenseNo)) {
            global $drivingLicenseNoError;
            $drivingLicenseNoError = "License no. must contain atleast 8 character, 1 number, 1 upper-case and 1 lower-case character ";
            return false;
        }

        return true;

    } else{
        $drivingLicenseNoError = "Please enter your driving license no";
        return false;

    }
}


function validate_transport_license() : bool{
    global $transportLicenseNo, $transportLicenseNoError;

    if (!empty($_POST['transport_license_no']) && isset($_POST['transport_license_no'])) {
        $transportLicenseNo = get_input($_POST['transport_license_no']);

        $pattern="/^\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])\S*$/";

    

        if (!preg_match($pattern, $transportLicenseNo)) {
            global $transportLicenseNoError;
            $transportLicenseNoError = "License no. must contain atleast 8 character, 1 number, 1 upper-case and 1 lower-case character ";
            return false;
        }

        return true;

    } else{
        $transportLicenseNoError = "Please enter your transport license no";
        return false;;

    }
}


function validate_transport() : bool{
    global $deliveryArea, $deliveryAreaError,$transportError,$transport;

    if (empty($_POST['delivery_area']) || !isset($_POST['delivery_area'])) {
        $deliveryAreaError = "Please select your delivery area";
        return false;
    }

    if (empty($_POST['transport']) || !isset($_POST['transport'])) {
        $transportError = "Please select your delivery transport";
        return false;
    }


    $transport = get_input($_POST['transport']);
    $deliveryArea = get_input($_POST['delivery_area']);


    if ($deliveryArea == "outside_dhaka" && $transport == "bike") {
        $transportError = " You can't use Bike for outside Dhaka";
        return false;
    }

    return true;
    
}



function validate_payment_option() : bool
{

    global $paymentOption, $paymentOptionError;

    if (!empty($_POST['payment_option']) && isset($_POST['payment_option'])) {
        $paymentOption = get_input($_POST['payment_option']);
        return true;
    } else{

        $paymentOptionError = "Please Select Payment Option";
        return false;
    }
}

function validate_password() : bool
{

    global $password, $passwordError, $confirmPassword, $confirmPasswordError;


    if (empty($_POST['pass']) || !isset($_POST['pass'])) {

        $passwordError = "Password is required";

        return false;
    }

    

    $password =get_input($_POST['pass']);

    $pattern="/^\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])\S*$/";

    

    if (!preg_match($pattern, $password)) {

        $passwordError = "Password must contain atleast 8 character, 1 number, 1 upper-case and 1 lower-case character ";

        return false;
    }




    if (empty($_POST['confirm_pass']) || !isset($_POST['confirm_pass'])) {

        $confirmPasswordError = "Confirm Your Password";

        return false;
        
    }


    $confirmPassword = get_input($_POST['confirm_pass']);

    if ($password != $confirmPassword) {

        $confirmPasswordError = "Your password doesn't match";

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