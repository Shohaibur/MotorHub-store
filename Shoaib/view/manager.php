<?php

include("../control/process.php");

?>

<html>

<head>


    <title>Registration form</title>
    <link rel="stylesheet" type="text/css" href="../css/mystyle.css">
   
   
</head>
<body>
<div class="main">
<div class="register">
  
      <h1>
        MotorHub Store
      </h1>
   <br>
              <h2>Registration Page</h2>
              
            <form id="register" action="" method="post" enctype="multipart/form-data" onsubmit="return validateForm()">
            <table id="table">
                <tr>
                    <td><label>Employee Name </label></td>
                    <td><select name="annot">
                            <option value="Mr.">Mr.</option>
                            <option value="Mrs.">Mrs.</option>
                        </select>
                   
                        <input type="text" name="name" id="name" onkeyup="checkname()" placeholder="Enter your name">

                        <p id="error"></p>
                        <?php if (isset($nameError))
                            echo "$nameError";
                        ?>
                     


               
                        <tr>
                            <td>
                    <label> Age </label>
</td>
                        <td>
                    
                        <Input type="number" name="age" id="age" onkeyup="checkage()">
                        <p id="errora"></p>
                       
                        
                    </td>

                </tr>
                    
                    <tr>
                    <td> 
                    <label> Password </label>
                    </td>
                    <td>
                        <input type="password" name="pass" id="pass" onkeyup="checkpassword()" placeholder="Give an unique password">
                        <p id="errorp"></p>

                        <?php 
                        if (isset($pass1))
                            echo "$pass1";
                        ?>
                    </td>
                    </tr>
                    
<tr>
    <td>
<label> Job Title </label>

<td><input type="checkbox" name="manager" value="manager">Manager <br>
<input type="checkbox" name="salesman" value="salesman">Salesman <br>
<input type="checkbox" name="clerk" value="clerk" >Clerk <br>
<input type="checkbox" name="analyst" value="analyst">Analyst </td>
                    
</td>

</tr>


                    
<td><label for="education">Familier with: </label></td>  <br>  
<td><input type="checkbox" name="cm" >Commanding Management <br>
<input type="checkbox" name="vm" >Visionary Management <br>
<input type="checkbox" name="am" >Affiliative Management <br>
<input type="checkbox" name="dm" >Democratic Management <br>
<input type="checkbox" name="com" >Coaching Management <br>
<input type="checkbox" name="pm" >Pacesetting Management <br> <?php echo $managementError; ?>


</td>
</tr>




                </tr>

              
                <tr>
                    <td> <br>
                    <label> Social Security Number </label> <br>
                    </td>
                    <td>
                        <textarea input type="number" name="ssn" id="ssn" onkeyup="securityno()"  placeholder="Carefully enter the 13 digit number from your Social Security card"></textarea>
                        <p id="ssnerror"></p>
                        <?php if (isset($ssnError))
                            echo "$ssnError";
                        ?>
                    </td>
                </tr>
                 <br>
                <td> <label>Address </label>
                </td> <br>
                <td><textarea input type="address" name="address" placeholder="exmpl:#house no. #road no. #plot no."></textarea> 

                    <textarea input type="text" name="street" placeholder="Street Address"></textarea> <br>

                    <input type="text" name="city" placeholder="City">

                    <input type="text" name="state" placeholder="State/Province">
                    <input type="text" name="zipcode" placeholder="ZipCode of your area">
                </td>
                </tr>
                <tr>
                    
                   <td>
                    <label>  Marital Status: </label>
                    </td>
                    <td>
                        Married<input type="radio" name="marital">
                        Unmarried<input type="radio" name="marital">
                        Separated<input type="radio" name="marital">
                    </td>
                </tr>
                
                <tr>
                    <td>
                    <label>   Gender </label>
                    </td>
                    <td>
                        Male<Input type="radio" name="gender" value="male">
                        Female<input type="radio" name="gender" value="female"> 
                        <?php echo $genderError; ?>
                    </td>

                </tr>
                
                <tr>
                    <td> 
                    <label> Previous Job Info </label>
                    </td>
                    <td> 
                        <textarea input type="text" name="pji" placeholder="Describe within a sentence or 10 characters"></textarea>
                        <?php if (isset($pjiError))
                            echo "$pjiError";
                        ?>
                    </td>
                </tr>
               
                <tr>
                    <td>
                    <label>  Email Address </label>
                    </td>
                    <td> 
                    <textarea input type="email" name="mail" placeholder="exmpl:abc@gmail.com"></textarea>
                        <?php if (isset($emailError))
                            echo "$emailError";
                        ?>

                    </td>

                </tr>

                <tr>
                    <td> 
                        Mobile No.
                    </td>
                    <td>
                        <input type="number" name="number" placeholder="cell number (11 digit)">
                        <?php if (isset($numberError))
                            echo "$numberError";
                        ?>

                    </td>


                </tr>
                </table> 
                <tr><td> <input type="file" name="myfile"></td></tr>
                
                <style>
                    input{
    color: black;
}
</style>

               <td></td>
                <td> <input type="submit" id="submit" name="submit"></td>
                </tr>
                
                
<br>


        </table>
       <h>Click  ⏩  <a href="../view/login.php">Login page </a> to login </h>
      

    </form>


<script src="../js/myscript.js"></script>
</div>
</div>
</body>


</html>