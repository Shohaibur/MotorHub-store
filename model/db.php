<?php
 class mydb{
       
      function openCon()
      {
        $conn = new mysqli("localhost","root","","registration");
        return $conn;
      }
      function insertAdmin($conn,$tablename, $name, $email,$number,$gender,$dob,$No_name,$No_age,$No_gender,$Rwa,$tin,$pass,$image)
      {
         $sqlstr = "INSERT INTO $tablename(Name,Email,Number,Gender,Dob,Nominee_Name,Nominee_Age,Nominee_Gender,Relation_with_Admin,Tin_Number,Password,image)
                    VALUES ('$name', '$email','$number','$gender','$dob','$No_name','$No_age','$No_gender','$Rwa','$tin','$pass','$image')";

             ini_set("display_errors","1");
             error_reporting(E_ALL);           

              return $conn->query($sqlstr);      
      }

    function checklogin($conn,$tablename, $username,$password)
    {
           $sql ="SELECT *FROM $tablename WHERE Name='$username' AND Password ='$password' ";
          return $conn->query($sql);

    }
    function showUser($conn,$tablename,$username)
    {
      $sql ="SELECT *FORM $tablename WHERE Name='$username'";
      return $conn->query($sql);
    }


      function closeCon($conn)
      {
        $conn->close();
      }

 }

  // $forhad = new mysqli("localhost","root","root","registration");
      // if($forhad->connect_errno)
       //{
       // die ("Connection failed.".$forhad->connect_errno);
      // }
       //echo  "SUccessful"


?>