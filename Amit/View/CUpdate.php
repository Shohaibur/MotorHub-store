<?php

include ("../Control/CUpdateCheck.php");

?>
<!DOCTYPE html
<head>
<title> Profile Update </title>
<link rel="stylesheet" type="text/css" href="../CSS/MyStyle.css">
</head>
<body>
<h1 id="heading" align="center"> MotorHub Store </h1>
<hr>
<form action="" method="post">
<h2 id="subheading" align="center"> Update your profile </h2>
<table align="center">
<tr>
<td class="thick">Edit Firstname:</td>
    <td><input type="text" name="Cfname" placeholder="Enter Your First Name">
    <td>
    </td>
    </td>
</tr>

<td class="thick">Edit Lastname:</td>
    <td><input type="text" name="Clname" placeholder="Enter Your Last Name">
    <td>
    </td>
    </td>
</tr>
                                        
<tr>
	<td class="thick">Edit E-mail:</td>
	<td><input type="email" name="Cemail"placeholder="Enter Your E-mail"></td>
    <td>
    </td>
</tr>

<tr>
	<td class="thick">Edit Date Of Birth:</td>
	<td><input type="date" name="Cdob"></td>
    <td>
    </td>
</tr> 
                                        
<tr>
	<td class="thick">Edit Gender:</td>
	<td class="thick">
    <input type="radio" name="Cgender" value="Male">Male
    <input type="radio" name="Cgender"value="Female">Female
    </td>
    <td>
    </td>
</tr>  
			                            
<tr>
	<td class="thick"> Edit Phone No:</td>
	<td><input type="text" name="Cphn"></td>
    <td>
    </td>
</tr> 
		                                
<tr>
	<td class="thick"> Edit City:</td>
	<td><input type="text" name="Ccity" placeholder="Enter Your City"> </td>
    <td>
    </td>
</tr>
		                                
<tr>
	<td class="thick">Edit Address:</td>
	<td><textarea name="Caddress" cols="21" rows="4"></textarea></td>
    <td>
    </td>
</tr> 
                                        
<tr>
	<td class="thick">Edit Password:</td>
	<td><input type="password" name="Cpass"></td>
    <td>
    </td> 
</tr>
                                        
<tr>
    <td></td>
    <td>
    <br/>
    <input type = "submit" name = "CSubmit" value = "Update" class="shape submit">
    <input type = "reset" value = "Reset" class="shape reset">
</tr>
</table>
<h4 align="center">

Back To Profile: <a href="CProfile.php"> Click Here </a>

</h4>
</form>
</hr>
</body>
</html>