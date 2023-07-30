<?php
session_start();
$loginerror=0;
include("../model/db.php");

if (isset($_REQUEST ["enter"]))
{
$name=$_REQUEST["name"];
$pass=$_REQUEST["pass"];

$mydb=new mydb(); //new=constructor
$conobj=$mydb->openCon();//->=access through mydb, openCon=function,conobj=connection object
$result=$mydb->checkLogin($conobj,"user",$name, $pass); //$result=variable

if($result->num_rows >0) //num_row=property
{
  $_SESSION["name"]=$name;
  header("Location:../view/profile.php");

}
else  
{
  echo "user not exists";
}





// $mydata=file_get_contents("../view/data.json");
// $data=json_decode($mydata);

// foreach($data as $myobject)
// {
// if($name== $myobject->name && $pass== $myobject->pass)
// {
//  $_SESSION["name"]=$name;
//  header("Location:../view/profile.php");
// }
// else
// {
// $loginerror=1;
// }

// }
// if ($loginerror==1)
// {
//   echo "user not exists";
// }

}

?>
