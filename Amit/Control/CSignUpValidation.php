<?php
include("../Model/db.php");

$fnameerr=$lnameerr=$emailerr=$doberr=$gendererr=$phnerr=$cityerr=$addresserr=$passerr=$signup="";
$haserr=0;

if(isset($_POST["CSubmit"]))
{
     $name=$_REQUEST["Cfname"];
     if(empty($name)|| !preg_match("/^([a-zA-Z' ]+)$/", $name) )
     {
          $fnameerr = " * Please Enter Valid Name!" ;
     }
     $name=$_REQUEST["Clname"];
     if(empty($name)|| !preg_match("/^([a-zA-Z' ]+)$/", $name) )
     {
          $lnameerr = " * Please Enter Valid Name!" ;
     }
     $email=$_REQUEST["Cemail"];
     if(empty($email) || !preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$email))
     {
          $emailerr = " * Please Enter Valid E-mail!";
     }
     $dob=$_REQUEST["Cdob"];
     if(empty($dob))
     {
          $doberr = " * Date Of Birth Invalid!";
     }
     if(!isset($_POST["Cgender"]))
     {
          $gendererr = " * Please Select Your Gender!";
     }
     $phn=$_REQUEST["Cphn"];
     if(empty($phn))
     {
          $phnerr = " * Please Insert Your Phone Number!";
     }
     if(!preg_match("/^[0-9\-]|[\+0-9]|[0-9\s]|[0-9()]*$/", $phn))
     {
          $phnerr = " * Invalid Phone Number!";
     }
     $city=$_REQUEST["Ccity"];
     if(empty($city))
     {
          $cityerr = " * Please Insert Your City!";
     }
     if(!preg_match("/^[a-zA-Z'-]+$/", $city))
     {
          $cityerr = " * Invalid City!";
     }
     $address=$_REQUEST["Caddress"];
     if(empty($address))
     {
          $addresserr = " * Please Insert Your Address!";
     }
     if(preg_match("/^[0-9a-zA-Z_]{5,}$/", $address) === 0)
     {
          $addresserr = " * Invalid Address!";
     }
     $pass=$_REQUEST["Cpass"];
     if(empty($pass))
     {
          $passerr = " * Please Insert The Password!";
     }
     if(strlen($pass)<7)
     {
          $passerr = " * Your Password Must Have Minimum 8 Characters";
     }
     else
     {
          $formdata = array(
               'Firstname'=> $_POST["Cfname"],
               'Lastname'=> $_POST["Clname"],
               'Email'=> $_POST["Cemail"],
               'DOB'=> $_POST["Cdob"],
               'Gender'=> $_POST["Cgender"],
               'Phone No'=> $_POST["Cphn"],
               'City'=> $_POST["Ccity"],
               'Address'=> $_POST["Caddress"],
               'Password'=> $_POST["Cpass"]
          );
          
          // $existingdata = file_get_contents('../Files/CSignUpData.json');
          // $tempJSONdata = json_decode($existingdata);
          // $tempJSONdata[] = $formdata;
          // $jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);
                  
          // if(file_put_contents('../Files/CSignUpData.json', $jsondata))
          // {
          //     header("location: ../View/CLogin.php");
          // }
          // else
          // {
          //      $signup= "Failed!";
          // }

     }

     $db = new mydb();
     $conobj = $db->openCon();
     $result = $db->insertCustomer($conobj, "account", $_POST["Cfname"], $_POST["Clname"], $_POST["Cemail"], $_POST["Cdob"], $_POST["Cgender"], 
                                   $_POST["Cphn"], $_POST["Ccity"], $_POST["Caddress"], $_POST["Cpass"]);
     
     if($result == true)
     {
          echo "Sucessfully Save In Database"; $db->closeCon($conobj);
     }
     else
     {
          $db->closeCon($conobj);
     }

} 
?>