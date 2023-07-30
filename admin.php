<?php
   include ('action.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" type="text/css" href="CSS/Admin_Registration.css">
    <title>Admin User</title>
</head>
<body align="center">
    <h1 class="Regi"> <u> Registration form </u> </h1>
    <form action=""  method="POST" enctype="multipart/form-data" class="container" onsubmit=" return validateForm()" > 
          <table align="center" > 
        
               <tr>   
                <td class="info"> 
                      Name:
                      
                </td> 
                <td> <input type="text" id="fname" name="fname" value="" placeholder="name"> </td>

                     <td><span style="color: red;"> <?php  echo $Errorname; ?> </span>
                    </td>
                </tr> 
                   
               <tr>
                <td class="info">
                      Email:   
                </td>
                <td> <input type="text" id="fmail" name="fmail" value="" placeholder="name@.com"> </td>
                
                       <td>  <span style="color: red;"> <?php  echo $Error1; ?> </span>
                    </td>
               </tr>
                <tr>
               <td class="info">
                      Number:      
                </td>
                <td> <input type="Number" id="fnumber" name="fnumber" value="" placeholder="+8801..">  </td>
                 </tr>
               
                            <tr>
                                  <td class="info">
                                        Gender:                                    
                                  </td>
                                  <td class="info">
                                    <input type="radio" name="fgender" value="Male">Male
                                    <input type="radio" name="fgender" value="female">Female
                                    
                                  </td>
                                  <td><span style="color: red;"> <?php  echo $AdminAge ?> </span> </td>
                            </tr>
                <tr>
                    <td class="info">Date Of Birth:</td> 
                     <td> <input type="date" id="fdate" name="fdate"> </td>
                     <td><span style="color: red;"> <?php  echo $ageError ?> </span> </td>
                </tr>    

                 <tr>
                    <td class="info"> <p><h4>Nominee Information</h3></p> </td>
                    <!--multiple table -->
                     <table align="center" border="1" cellpadding="10" frame="Box" rules="none">
                      <tr> <td class="info">Nominee Name :</td>
                    <td> <input type="text" id="fnominee" name="fnominee" value="" placeholder="enter Nominee Name">
                     <span style="color: red;"> <?php  echo $Error ?> </span> </td>
                    </tr>
                     <tr>
                     <td class="info">Nominee Age  :</td>
                           <td>
                           <input type="number" id="fnomineeage" name="fnomineeage" value="" placeholder="age">
                           <span style="color: red;"> <?php  echo $NomineeAgeError ?> </span>
                           </td>
                    </tr>
                         <tr> 
                           <td class="info">
                                        Gender:                                    
                                  </td>
                                  <td class="info">
                                    <input type="radio" name="nomineegender" value="Male">Male <br>
                                    <input type="radio" name="nomineegender" value="female">Female
                                    
                                  </td>
                                  <td><span style="color: red;"> <?php  echo $NomineeGenderError ?> </span></td>
                        </tr>
                     
                        <tr>
                       
                             <td class="info"> Relation with Admin :  </td>
                                   <td>
                                   <select id="nomineeRelation" name="nomineeRelation">
                                    <option value="Son">Son</option>
                                     <option value="Doughter">Doughter</option>
                                      <option value="Brother">Brother</option>
                                          <option value="Sister">Sister</option>
                                     </select>
                                     
                                  </td>
                                  <td><span style="color: red;"> <?php  echo $NomineeRelationError ?> </span>  </td>
                             
                        </tr>
                     </table>
                     <br>
                 </tr>  

              
                <tr>
                    <td >
                           <span style="color: whitesmoke;">TIN Number: </span>  
                    </td>
                    <td>
                    <input type="number" id="tinnumber" name="tinnumber" placeholder="TIN Number" >
                    </td>
                         <td>
                         <span style="color: red;"> <?php  echo $TINvalid ?> </span>
                         </td>
                </tr>
               
                 <br><br>

                <tr>
                    <td>
                       <span style="color: whitesmoke;"> Pasword: </span> 
                    </td>
                    <td> <input type="password" id="fpass" name="fpass" value="" placeholder="Password"> </td>
                    
                </tr>

                
                <tr>
                    <td><span style="color: whitesmoke;"> Confirm Pasword: </span> </td>
                    <td> <input type="password" id="fCpass" name="fCpass" value="" placeholder="Confirm Password">
                    <br>  <span style="color: red;"> <?php  echo $passError ?> </span>     
                </td>
                </tr>
               
                <br><br>
                
                <tr>
                    <td>
                       <span style="color: whitesmoke;">Select Image : </span> 
                    </td>
                    <td>
                    <input type="file" id="files" name="files">
                    </td>
                    <br>
                    <td>
                    <span style="color: red;"> <?php  echo $filesErrors ?> </span>
                    </td>
                </tr>

                 
         
        </table>
        <br><br>
         <input type="submit" id="frmsubmit" name="submit" class="sub">

    </form>
      <br><br>
      <a href="Profile.php" >
    <input type="submit" value="LOGIN" id="login" name="login"  class="log1" style=" width: 200px; background-color:#2196F3">
      </a>
      <script src="JS/secure.js"></script>
</body>
</html>