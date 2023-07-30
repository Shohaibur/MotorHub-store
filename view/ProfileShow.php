<?php
include("../profileAction.php");
 // session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/ProfileShow.css">
    <title>Document</title>
</head>
<body>
    
       <p ><h1 class="title"><b> <u>Welcome to MotorHub Store </u>  </b>  </h1></p>
       <table  class="tableitem" border="1" cellpadding="20" frame="Box" rules="none" align="center">
        <tr  class="inner">
            <td>
                Name: 
            </td>
            <td>
                <?php echo $_SESSION["Name"] ?>
            </td>
               <td>
                image: 
            </td>
            <td> 
               <img src="../  <?php echo  $_SESSION["images"] ?>" alt="" width="100" height="100">
            </td>
             
        </tr>
        <tr  class="inner">
            <td>
                Email: 
            </td>
            <td>
                <?php echo  $_SESSION["Email"] ?>
            </td>
        </tr>
        <tr  class="inner">
            <td>
                Number: 
            </td>
            <td>
                <?php echo $_SESSION["Number"] ?>
            </td>
        </tr>

        <tr  class="inner">
            <td>
               Admin DOB: 
            </td>
            <td>
                 <?php $_SESSION["Dob"] ?>
            </td>
        </tr>

        <tr  class="inner">
            <td>
                Nominee Name: 
            </td>
            <td>
                <?php echo $_SESSION["Nominee_Name"]?>
            </td>
        </tr>

        <tr  class="inner">
            <td>
                Nomine Age: 
            </td>
            <td>
                <?php echo $_SESSION["Nominee_Age"] ?>
            </td>
        </tr>

        <tr  class="inner">
            <td>
                Relations with Nominee: 
            </td>
            <td>
                <?php echo $_SESSION["Relation_with_Admin"] ?>
            </td>
        </tr>

        <tr  class="inner">
            <td>
                Tin Number: 
            </td>
            <td>
                <?php $_SESSION["Tin_Number"] ?>
            </td>
        </tr>


       </table>
         
       <a href="../Profile.php"> LogOut </a>
</body>
</html>