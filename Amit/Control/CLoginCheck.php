<?php 
include("../Model/db.php");
session_start();

$fail="";
// $existingdata = file_get_contents('../Files/CSignUpData.json');
// $jsondata = json_decode($existingdata);

if (isset($_POST["CLogin"]))
{
    // if(empty($_POST["Cemail"])||empty($_POST["Cpass"]))
    // {
    //     $fail="Please Insert E-mail or Password!";
    // }
    // else
    // {
    //     foreach ($jsondata as $key => $newdata) 
    //     {
    //         if ($newdata->Email == $_POST["Cemail"] && $newdata->Password == $_POST["Cpass"]) 
    //         {
    //             $_SESSION["email"] = $_POST["Cemail"];
    //             $_SESSION["password"] = $_POST["Cpass"];
    //             header("location: ../View/CIndex.php");
    //         }
    //         else 
    //         {
    //             $fail="invalid email or password!";
    //         }
    //     }
       
    // }

    $email=$_POST["Cemail"];
    $password=$_POST["Cpass"];

    $db = new mydb();
    $conobj = $db->openCon();
    $result = $db->checkLogin($conobj, "account", $email,$password);

    if($result->num_rows >0)
    {
        $_SESSION["email"]=$email;
        header("Location: ../View/CIndex.php");
    }
    else
    {
        $fail="User Doesn't Exists".$conobj->error;
    }
    
}

?>