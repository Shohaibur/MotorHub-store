
<?php
include("../control/profilecontrol.php");
?>
<html>
  <h1>
    Profile
  </h1>
  <?php
  echo "Welcome Mr."; 
  echo $_SESSION["name"];
  ?>
  <head>
  <style>
body {
  background-image: url("../image/img3.jpg");
  color: blue;

}
h1{
    text-align: center;

}
a{
    color: blue;
}
</style>
	<meta charset="utf-8">
	<title>
		MotorHub E-commerce
	</title>
</head>
	<br />
	<h3 align="center">
		<font face="Lato" size="6">MotorHub Store</font>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<font face="cinzel" size="4">
			<a href="#">HOME</a>&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="#">VIDEOS</a>&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="#">PORTFOLIO</a>&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="#">BLOG</a>&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="#">CONTACT US</a>
		</font>
	</h3>
	<br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
	<h1 align="center">
		<font face="Lato" color="#017bf5" size="7">
			Manager Dashboard
		</font>
		
	</h1>
	<h3 align="center">
	<a href="#">
		<font face="Lato" color="#000" size="5">
			Orders
		</font>
		
	</h3>
	<br />
	<h3 align="center">
	<a href="#">
		<font face="Lato" color="#000" size="5">
			Delivaries
		</font>
		
	</h3>
	<br />
	<h3 align="center">
	<a href="#">
		<font face="Lato" color="#000" size="5">
			Transactions
		</font>
		<h3 align="center">
		<font face="Lato" color="#000" size="5">
			Users Informations
		</font>
		
	</h3>
	<br />
		
	</h3>
	<br />

	
</body>
  <a href="../control/logout.php"> LogOut </a>
  <a href="../view/showall.php"> Show all user data </a>
  <a href="../view/updateprofile.php"> Update profile </a>
	<br>
	<input type="text" name="search" id="search" onkeyup="getuser()">
	<p id="print"></p>

	<script src="../js/myscript.js"></script>
	

</html>