<?php
$conn=mysqli_connect("localhost","root","");

// Check connection
if (!$conn) {
  die("Database Connection Failed: " . mysqli_connect_error());
}

mysqli_select_db($conn,"delivery_db");

?>