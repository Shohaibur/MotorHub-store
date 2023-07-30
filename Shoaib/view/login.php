<?php
include ("../control/logincontrol.php");
?>

<html>
  <head>
  <style>
body {
  background-image:  url("../image/img2.jpg") ;
  color: white;

}
</style>
    <title>Login page</title>
    <link rel="stylesheet" type="text/css" href="../css/mystyle.css">
  </head>
  <body>
<div class="myDiv">
  <h1>User Login</h1>
</div>
    <form action="" method="post">
      <table>
        <tr>
          <td>
            <div class="text">
           <h5> UserName </h5>
</div>
          </td>
          <td>
            <input type="text" name="name" placeholder="enter your user name">
          </td>

        </tr>
        <tr>
          <td>
            Password
          </td>
          <td>
            <input type="password" name="pass"> 
          </td>
        </tr>
        <tr>
          <td>
            <input type="submit" name="enter">
          </td>
        </tr>
      </table>


    </form>
  </body>
</html>