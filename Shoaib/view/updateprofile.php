<?php
// session_start();
include("../control/updateprofilecontrol.php");
?>

<html>
<head>
<style>
body {
  background-image: url("../image/img4.jpg");
  color: blue;

}
h1{
    text-align: center;

}
a{
    color: blue;
}
</style>
<tr>
    <td>
      <h1>
        MotorHub Store
      </h1>
    </td>
  </tr>

    <title>Update form</title>
    <link rel="stylesheet" type="text/css" href="../css/mystyle.css">
</head>

<body>
    <div class="box">
    </div>
    <div class="myDiv">
    <form action="" method="post" enctype="multipart/form-data">
        
        <table>
           
            <tr>
                <td>
                    <h1>Update Page</h1>
                </td>
            </tr>
</div>

            <form>
            <tr>
                <td>
                ID:
</td>
                <td>
                <?php echo $id; ?>


                </td>
            </tr>
                <tr>
                    <td>Employee Name</td>
                    <td><select name="annot">
                            <option value="Mr.">Mr.</option>
                            <option value="Mrs.">Mrs.</option>
                        </select>
                        <input type="text" name="name" value="<?php echo $name; ?>" placeholder="Enter your name">
                        <?php if (isset($nameError))
                            echo "$nameError";
                        ?>

<tr>
                    <td>
                        Age
                    </td>
                    <td>
                        <Input type="number" name="age" value="<?php echo $age; ?>">
                       
                        
                    </td>

                </tr>
                    </td>
                    <tr>
                    <td>
                       Password
                    </td>
                    <td>
                        <input type="password" name="pass" placeholder="Give an unique password">
                        <?php 
                        if (isset($pass1))
                            echo "$pass1";
                        ?>
                    </td>
                    </tr>
                    <tr>

<td>
    Job Title
   
                    </td>

                    <?php
                    $manager="";
                    $salesman="";
                    $clerk="";
                    $analyst="";
                    if($profession=="manager")
                    {
                      $manager="checked";
                    }
                    elseif($profession=="salesman")
                    {
                    $salesman="checked";
                    }
                    elseif($profession=="clerk")
                    {
                    $clerk="checked";
                    }
                    else
                    {
                        $analyst="checked";
                    }

                    ?>
<tr>
<td><lable for="profession">Profession: </lable></td>   
<td><input type="checkbox" name="manager" value="manager" <?php echo $manager;?> >Manager <br>
<input type="checkbox" name="salesman" value="salesman"<?php echo $salesman;?>>Salesman <br>
<input type="checkbox" name="clerk" value="clerk" <?php echo $clerk;?>>Clerk <br>
<input type="checkbox" name="analyst" value="analyst"<?php echo $analyst;?>>Analyst <br>


</td>




                    <tr>
<td><lable for="education">You are familier with: </lable></td>   
<td><input type="checkbox" name="cm" >Commanding Management <br>
<input type="checkbox" name="vm" >Visionary Management <br>
<input type="checkbox" name="am" >Affiliative Management <br>
<input type="checkbox" name="dm" >Democratic Management <br>
<input type="checkbox" name="com" >Coaching Management <br>
<input type="checkbox" name="pm" >Pacesetting Management <br> 
<!-- <?php echo $managementError; ?> -->


</td>
</tr>



                </tr>

              
                <tr>
                    <td>
                        Social Security Number
                    </td>
                    <td>
                        <textarea input type="number" name="ssn" placeholder="Carefully enter the 13 digit number from your Social Security card"></textarea>
                        <?php if (isset($ssnError))
                            echo "$ssnError";
                        ?>
                    </td>
                </tr>
                <td>Address
                </td>
                <td><textarea input type="address" name="address" placeholder="exmpl:#house no. #road no. #plot no."></textarea> 

                    <textarea input type="text" name="street" placeholder="Street Address"></textarea> <br>

                    <input type="text" name="city" placeholder="City">

                    <input type="text" name="state" placeholder="State/Province">
                    <input type="text" name="zipcode" placeholder="ZipCode of your area">
                </td>
                </tr>
                <tr>
                    <td>
                        Marital Status
                    </td>
                    <td>
                        Married<input type="radio" name="marital">
                        Unmarried<input type="radio" name="marital">
                        Separated<input type="radio" name="marital">
                    </td>
                </tr>
                
                <tr>
                    <td>
                        Gender
                    </td>

                    <?php
                    $male="";
                    $female="";
                    if($gender=="male")
                    {
                      $male="checked";
                    }
                    else
                    {
                    $female="checked";
                    }
                    ?>

                    <td>
                        Male<Input type="radio" name="gender" value="male" <?php echo $male; ?>>
                        Female<input type="radio" name="gender" value="female" <?php echo $female; ?>> 
                        <!-- <?php echo $genderError; ?> -->
                    </td>

                </tr>
                <tr>
                    <td>
                        Previous Job Info
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
                        Email Address
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
                <tr><td> <input type="file" name="myfile"></td>
               <td> <img src="<?php echo $image; ?>" width="200" height="200">  </td>
            </tr>
                
              

               <td></td>
                <td> <input type="submit" name="submit" value="Update"></td>
                </tr>

        </table>

    </form>
<!-- <a href="../view/login.php">Login page </a>
<br>
<a href="home.php"> home page  </a> -->

</body>

</html>