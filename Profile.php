<?php
  include ('profileAction.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/profile.css">
    <title>LOGIN</title>
</head>
<body> 

     <h1 class="form-title">MotorHub Store </h1>  
   
   <form action=""  method="POST" enctype="multipart/form-data"  class="form">

   <table  class="box">
         <tr >
            <td>
                  <b class="name"> UserName:-  </b>
            </td>
            <td>
                <input type="text" id="Checkname" name="Checkname" value="" size="50" placeholder="Username">
            
            </td>
            <td><span style="color: red;"> <?php  echo $userErrorr; ?> </span>
         </tr>
         
            <tr >
                <td>
                    <b class="name">  Password:-  </b>
                </td>
                <td>
                <input type="password" id="Checpassword" name="CheckPassword" value="" size="50" placeholder="Password">
                </td>
                <td><span style="color: red;"> <?php  echo $UserPass; ?> </span>
            </tr>
        
            <tr>
               <td>
            
               </td>
                
                <td>
                  <input type="submit" value="SignIn" id="signin" name="Submit" class="done" >
                  
                </td>

            </tr>
       </table>
   </form>
   <br>
   <?php echo $message; 
         echo  $UserPass;
      
    ?>

</body>
</html>