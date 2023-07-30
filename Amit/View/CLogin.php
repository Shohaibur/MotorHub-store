<?php
include "../Control/CLoginCheck.php";
if(isset($_SESSION["email"]))
{
    header("location: CIndex.php");
}
?>
<!DOCTYPE html>
<head>
<title> Customer Login </title>
<link rel="stylesheet" type="text/css" href="../CSS/MyStyle.css">
</head>
<body>

<h1 id="heading" align="center"> MotorHub Store </h1>
<hr>
<form action="" method="post">
<br/><br/><br/><br/><br/><br/>
        
<h1 id="subheading" align="center"> Customer Login Page </h1>
<table align="center">
<tr>
    <td class="thick"> Email: </td>
    <td> <input type="text" name="Cemail"> <td>
</tr>
                        
<tr>
    <td class="thick"> Password: </td>
    <td> <input type="password" name="Cpass"> <td>
    <?php 

    echo $fail;

    ?>
</tr>
<tr>
<h2>
    <td> <input type="submit" name="CLogin" value="Login" class="shape submit"></td>
    <td> <input type="reset" value="Reset" class="shape reset"></td>
</h2>
</tr>
</table>
</h1>
</form>
<h3 align="center">
<a href="../View/CSignUp.php">Don't Have An Account?</a>
</h3>
</hr>
</body>
</html>