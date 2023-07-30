<?php
class mydb
{
  function openCon()
  {
    $conn = new mysqli("localhost","root","","customer");
    return $conn;
  }
  function insertCustomer($conn,$tablename, $firstname, $lastname, $email, $dob, $gender, $phone, $city, $address, $password)
  {
    $sqlstr = "INSERT INTO account (Firstname,Lastname,Email,Dob,Gender,Phone,City,Address,Password)
               VALUES ( '$firstname', '$lastname', '$email', '$dob', '$gender', '$phone', '$city', '$address', '$password')";
       

        return $conn->query($sqlstr);
  }

  function checklogin($conn,$tablename, $email,$password)
  {
    $sql = "SELECT * FROM account WHERE Email='$email' AND Password='$password'";
    return $conn->query($sql);
  }

  function showUser($conn,$tablename,$email)
  {
    $sql="SELECT * FROM account WHERE Email='$email'";
    return $conn->query($sql);
  }

  function updateUser($conn,$tablename, $firstname, $lastname, $email, $dob, $gender, $phone, $city, $address, $password, $id)
  {
    $sql="UPDATE account SET Firstname='$firstname', Lastname='$lastname', Email='$email', Dob='$dob', Gender='$gender', Phone='$phone', City='$city',
                              Address='$address', Password='$password' WHERE id='$id'";
    return $conn->query($sql);
  }

  // function Resetpass($email,$password,$conpass)

  function closeCon($conn)
  {
    $conn->close();
  }
}
?>