<?php
session_start();
include("../model/db.php");

$mydb= new mydb();
$conobj=$mydb->openCon();
$result=$mydb->showUser($conobj,"user", $_SESSION["name"]);
if($result->num_rows > 0)
{
foreach ($result as $row) //foreach loop for associative array, $row=reference object(print)
   {
   $name= $row["Name"];
   $age= $row["Age"];
   $gender= $row["gender"];
   $profession= $row["profession"];
   $image= $row["image"];
   $id= $row["id"];


   }
}
if(isset($_REQUEST["submit"]))
{
   if(!empty($_FILES["myfile"]["name"]))
   {
      move_uploaded_file($_FILES["myfile"]["tmp_name"], "../uploads/".$_REQUEST["name"].".jpg");
      $image="../uploads/".$_REQUEST["name"].".jpg";
   }
   $mydb= new mydb();
$conobj=$mydb->openCon();
$result=$mydb->updateUser($conobj,"user", $_REQUEST["name"],$_REQUEST["age"],$_REQUEST["gender"],
$_REQUEST["manager"],$image,$id);
 
if($result==true)
echo "updated";
else
echo "not updated";
}


?>