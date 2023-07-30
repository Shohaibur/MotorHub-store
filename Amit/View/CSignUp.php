<?php
include "../Control/CSignUpValidation.php";
?>
<!DOCTYPE html>
<head>
    <title>
        Customer Registration
    </title>
    <link rel="stylesheet" type="text/css" href="../CSS/MyStyle.css">
    
</head>
<body>
    <h1 id="heading" align="center">
        MotorHub Store
    </h1>
    <hr>
    <form action="" method="post" enctype="multipart/form-data" onsubmit="return validateForm()">
    <h1 id="subheading" align="center"> Create An Account </h1>
        <table align="center">
            <tr>
                <td class="thick">Firstname:</td>
                <td><input type="text" id='Cfname' name="Cfname" placeholder="Enter Your First Name">
                <td><span style="color: red;" id="CfnameER"></span></td>
                <td>
                    <?php
                    echo $fnameerr;
                    ?>
                </td>
                </td>
            </tr>
            <tr>
                <td class="thick">Lastname:</td>
                <td><input type="text" id='Clname' name="Clname" placeholder="Enter Your Last Name">
                <td><span style="color: red;" id="ClnameER"></span></td>
                <td>
                    <?php
                    echo $lnameerr;
                    ?>
                </td>
                </td>
            </tr>
            <tr>
                <td class=" thick">Email:</td>
                <td><input type="text" id='Cemail' name="Cemail" placeholder="Enter Your E-mail" onblur="checkEmail()"></td>
                <td><span style="color: red;" id="CemailER"></span></td>
                <td>
                    <?php
                    echo $emailerr;
                    ?>
                </td>
            </tr>
            <tr>
                <td class="thick">Date Of Birth:</td>
                <td><input type="date" id='Cdob' name="Cdob"></td>
                <td><span style="color: red;" id="CdobER"></span></td>
                <td>
                    <?php
                    echo $doberr;
                    ?>
                </td>
            </tr>
            <tr>
                <td class="thick">Gender:</td>
                <td class="thick">
                    <input type="radio" id='Cgender' name="Cgender" value="Male">Male
                    <input type="radio" id='Cgender' name="Cgender" value="Female">Female
                    <td><span style="color: red;" id="CgenderER"></span></td>
                </td>
                <td>
                    <?php
                    echo $gendererr;
                    ?>
                </td>
            </tr>
            <tr>
                <td class="thick">Phone No:</td>
                <td><input type="text" id='Cphn' name="Cphn"> </td>
                <td><span style="color: red;" id="CphnER"></span></td>
                <td>
                    <?php
                    echo $phnerr;
                    ?>
                </td>
            </tr>
            <tr>
                <td class="thick">City:</td>
                <td><input type="text" id='Ccity' name="Ccity" placeholder="Enter Your City"> </td>
                <td><span style="color: red;" id="CcityER"></span></td>
                <td>
                    <?php
                    echo $cityerr;
                    ?>
                </td>
            </tr>
            <tr>
                <td class="thick">Address:</td>
                <td><textarea id='Caddress' name="Caddress" cols="20" rows="4"></textarea></td>
                <td><span style="color: red;" id="CaddressER"></span></td>
                <td>
                    <?php
                    echo $addresserr;
                    ?>
                </td>
            </tr>
            <tr>
                <td class="thick">Password:</td>
                <td><input type="password" id='Cpass' name="Cpass"></td>
                <td><span style="color: red;" id="CpassER"></span></td>
                <td>
                    <?php
                    echo $passerr;
                    ?>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <br />
                    <input type="submit" name="CSubmit" value="SignUp" class="shape submit">
                    <input type="reset" value="Reset" class="shape reset">
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <br>
                    <?php
                    echo $signup;
                    ?>
                </td>
            </tr>
        </table>
        <h4 align="center">
            Already Have An Account? <a href="CLogin.php">Login Here</a>
        </h4>
    </form>
    <script src='../JS/CSignUp.js'></script>
    </hr>
</body>
</html>