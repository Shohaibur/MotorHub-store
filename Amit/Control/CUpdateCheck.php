<?php
include("../Model/db.php");
session_start();

$mydb= new mydb();
$conobj=$mydb->openCon();
$result=$mydb->showUser($conobj,"account", $_SESSION["email"]);
$id = "";

if($result->num_rows > 0)
{
  foreach($result as $row)
  {
    $id  = $row["id"];
    $firstname= $row["Firstname"];
    $lastname=  $row["Lastname"];
    $email= $row["Email"];
    $dob= $row["Dob"];
    $gender= $row["Gender"];
    $phone= $row["Phone"];
    $city= $row["City"];
    $address= $row["Address"];
    $password= $row["Password"];
  }
}

if(isset($_REQUEST["CSubmit"]))
{
    $mydb= new mydb();
    $conobj=$mydb->openCon();
    $result=$mydb->updateUser($conobj, "account",$_REQUEST["Cfname"], $_REQUEST["Clname"], $_REQUEST["Cemail"], $_REQUEST["Cdob"], $_REQUEST["Cgender"], $_REQUEST["Cphn"],
                                                  $_REQUEST["Ccity"], $_REQUEST["Caddress"], $_REQUEST["Cpass"], $id);

    if($result==true)
    {
      echo "Updated";
    }
    else
    {
      echo "Not Updated";
    }                                        
}

?>