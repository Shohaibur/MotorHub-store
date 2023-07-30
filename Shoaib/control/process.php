<?php
include("../model/db.php");
session_start();
setcookie("user","visited",time()+3600*2);
$hasError=0;
$nameError="";
$managementError="";
$genderError="";
$image="";
if (isset($_COOKIE["user"]))
{
  echo "welcome back" ;
}
else
{
  echo"welcome to my site";

}

// if (isset($_REQUEST["hsubmit"]))
// {

//   $myjsondata= file_get_contents("../view/data.json");
//   $myphpdata= json_decode($myjsondata);

//   foreach($myphpdata as $myobject)
//   {
    
//       if($_REQUEST["name"]==$myobject->name && $_REQUEST["pass"]==$myobject->pass)
//       {
//         $_SESSION["username"]=$_REQUEST["name"];
//         header ("Location: ../view/profile.php");

//       }
//       else{
//         echo "not a valid user";
//       }  
//   }  
// }


if (isset($_REQUEST["submit"]))
{
  if (empty($_FILES["myfile"]["name"]))
  {
    echo " no file uploaded";
  }
   
  else
  {
    echo  "<br>"; 
    echo "your file name is ".$_FILES["myfile"]["name"];
    move_uploaded_file($_FILES["myfile"]["tmp_name"], "../uploads/".$_REQUEST["name"].".jpg");
    $image="../uploads/".$_REQUEST["name"].".jpg";

  }

  if (empty($_REQUEST["name"]))
  {
    $nameError="name is required";
    $hasError=1;
  }
  else 
  {
    $nameError="your name is ".$_REQUEST["name"];

  }
  if(strlen($_REQUEST["name"])<5)
  {
    $nameError= "your name is ".$_REQUEST["name"];
  }

echo"<br>";
echo $_REQUEST["age"];


  if(isset($_REQUEST["management"]))
  {
      $managementError= $_REQUEST["management"];
  }
  else
  {
      $managementError= "Please select management type you're familiar with *";
  }

  if(isset($_REQUEST["gender"]))
  {
      // $genderError= $_REQUEST["gender"];
      echo  "<br>";
      echo $_REQUEST["gender"];
  }
  else
  {
      echo "must select your gender *";
      $hasError=1;
  }

  
  // $data='';
  // $filename= "data.json" ;
  
  // if (is_file($filename))
  // {
  //   $data = file_get_contents($filename);
  // }
  // $json_arr = json_decode($data,true);
  // $json_arr[] = array ( 'name' => $_REQUEST['name'], 'pass' => $_REQUEST['pass']);

  // file_put_contents($filename,json_encode($json_arr));




  if(empty($_REQUEST["name"]))
  {
    $nameError="name is required*";
    $hasError=1;

  }
  else{
    $nameError="your name is" .$_REQUEST["name"];
  }
  
  $pass=$_REQUEST["pass"];
  if(strlen($pass) > 8) 
  {
    $pass="Password added";
  }
  else
  { 
    $pass="password must be atleast 8 characters *";
  }

   
  $numberval=$_REQUEST["number"];
  if(preg_match("/^([0-9]{11})$/", $numberval))
 {
  $numberError="Your mobile number is ".$_REQUEST["number"];
 }
 else
 {
  $numberError="your number is invalid *";
 }

 $ssnval=$_REQUEST["ssn"];
  if(preg_match("/^([0-9]{13})$/", $ssnval))
 {
  $ssnError="Your Social Security number is ".$_REQUEST["ssn"];
 }
 else
 {
  $ssnError="your Social Security number is invalid *";
 }
 $email=$_REQUEST["mail"];
 if (empty($_POST["mail"])) {
  $emailError = "Invalid email format *";
 } else {
  $emailError = "Your Email address is".$_REQUEST["mail"];
  
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $emailError = "Invalid email format";
  }
 }
 $var=$_REQUEST["pji"];
 if(strlen($var) > 10){
  $pjiError="pji is".$_REQUEST["pji"];
 }
 else{
  $pjiError="Give previous job info in short * ";
 }

  //finalterm
 $profession="";
 if(isset($_REQUEST["manager"]) || isset($_REQUEST["salesman"]) || isset($_REQUEST["clerk"]) || isset($_REQUEST["analyst"]))
 {
  if(isset($_REQUEST["manager"]))
  {
    
    $profession=$_REQUEST["manager"];
  }
  if(isset($_REQUEST["salesman"]))
  {
    
    $profession=$_REQUEST["salesman"];
  }
  if(isset($_REQUEST["clerk"]))
  {
 
    $profession=$_REQUEST["clerk"];
  }
  if(isset($_REQUEST["analyst"]))
  {
    
    $profession=$_REQUEST["analyst"];
  }
 }
 else{
  echo "checkbox is required";
  $hasError=1;
 }
 if ($hasError==0)
 {

 $db=new mydb();
 $conobj=$db->openCon();
 $result=$db->insertUser($conobj,"user", $_REQUEST["name"],$_REQUEST["pass"], $_REQUEST["age"], $_REQUEST["gender"], $profession,$image);
 if($result==true)
 {
  echo  "<br>"; 
   echo  "data inserted ✓";
 }
 else
 {
  echo "error".$conobj->error;
 }
 }
}
?>
 