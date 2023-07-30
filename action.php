<?php 
  include("./model/db.php");
    $Error = "";
    $Errorname = "";
    $Error1 = "";
    $ageError="";
    $passError="";
    $hasError=0;
    $AdminAge = "";
    $TINvalid=""; 
    $NomineeAgeError="";
    $NomineeGenderError="";
    $NomineeRelationError="";
    $filesErrors="";
    $images="";
    $Nominee_Gender="";

   // $adminAge=$_REQUEST["fgender"];

   //file validations 
  
   ini_set("display_errors","1");
   error_reporting(E_ALL);       

    if(isset($_REQUEST['submit']))
    {
          $username = $_REQUEST['fname'];
          $usermail = $_REQUEST['fmail'];
         
          $nominee = $_REQUEST['fnominee'];
          $password = $_REQUEST['fpass'];
          $Cpassword = $_REQUEST['fCpass'];
          $TINvalue = $_POST['tinnumber'];
          $Uppercase = preg_match('@[A-Z]@ ',$Cpassword);
          $Lowercase = preg_match('@[a-z]@ ',$Cpassword);
          $Number = preg_match('@[0-9]@ ',$Cpassword);
          $SpecialChar = preg_match('@[^\w]@ ',$Cpassword);
                
        
          if(empty($_POST['fname']))
            {
                $Errorname = "*";
                $hasError=1;
            }
            else
            {
                if(!preg_match( '/^[a-zA-Z\s]+$/' ,$username))
                {
                     $Errorname = "Invalid name type";
                     $hasError=1;
                }
            }

           
             if( empty($_REQUEST['fmail']))
             {  $Error1 = "*"; $hasError=1;}
             else{
             if(filter_var($usermail,FILTER_VALIDATE_EMAIL) )
              {
                $Error1 = "";
               }
              else
              {
                $Error1 = "Invalid mail"; $hasError=1;
              }   
              }
             

               if(empty($_POST['fnominee']))
               {
                   $Error = " *"; $hasError=1;
               }
               else
               {
                   if(!preg_match( '/^[a-zA-Z\s]+$/' ,$nominee))
                   {
                        $Error = "Invalid name type"; $hasError=1;
                   }
               }

               if(empty($_POST['fpass']) &&  empty($Cpassword))
               {
                   $passError = "*";
                   $hasError=1;
               }
               else
                 {   
                   if($Cpassword == $password)
                  {
                   if( !$Uppercase || !$Lowercase || !$Number || !$SpecialChar || strlen($Cpassword) < 6)
                   {
                    $passError = "Password should be minimum 6 digit and Include specialChar/number/upper & lower case";   
                    $hasError=1;  
                   }
                    else  { $passError = "";
                             $hasError=0;
                          }
                  }
                  else
                  {
                  $passError =" Password not match";
                  $hasError=1;
                  }

                }
               
               //age validations
               if(empty( $usergender))
               {
                $AdminAge = "*"; $hasError=1;
               }
               else
               {
                $AdminAge = "";
               }
               
               // TIN validations
               if(empty($_POST['tinnumber']))
               {
                $TINvalid="*"; $hasError=1;
               }
               else
               {
                    if(  strlen((string)$TINvalue)< 6)
                    {
                      $TINvalid="Only 6 digit TIN NO is valid"; $hasError=1;
                    }
                    else{
                      $TINvalid="";
                    } 
                   
               } 

               if(empty($_REQUEST['fnomineeage']))
               {
                $NomineeAgeError="*"; $hasError=1;
               }
               else
               {
                 $NomineeAgeError="";
               }
  

               if(empty($_REQUEST['nomineegender']))
               {
                $NomineeGenderError="*"; $hasError=1;
               }
               else
               {
                 $NomineeGenderError="";
               }
               
              
               if(empty($_REQUEST['nomineeRelation']))
               {
                $NomineeRelationError="*"; $hasError=1;
               }
               else
               {
                 $NomineeRelationError="";
               }
               //File validations
          $Imagename = $_FILES['files']['name'];
          $tmpname = $_FILES['files']['tmp_name'];
          $destination = "images/".$Imagename;
          $img_type = strtolower(pathinfo($Imagename,PATHINFO_EXTENSION));
          $allow_type = array ('png','jpg','jpeg');
          $imageSize = $_FILES['files']['size'];

          if(in_array($img_type, $allow_type))
            {
             
              if($imageSize<= 5000000)
              {
                //move_uploaded_file($_FILES['files']['name'],"images/".$_REQUEST["fname"].".jpg");
                 move_uploaded_file($tmpname,$destination); 
                  $filesErrors="";
                $images=$destination;
                  $hasError=0;
              }
              else
              {
                $filesErrors="Image is too large";
                  $hasError=1;
              }
              
            }
            else{
              $filesErrors= "Only image files are Allowed";
              $hasError=1;
            }

        $dob = $_POST['fdate'];
              $date1=date_create($dob);
              $date2=date_create("11/30/2022");
              $diff=date_diff($date1,$date2);
              $age =$diff->format("%Y");
      //json code 
    if($age >20)
    {
      $ageError="";
      
    }

     else
    {
      $ageError="age must be gretter then 20";

    }
      if($hasError==0)
            {
                $exixtingdata = file_get_contents("AdminData.json"); //connect json file with php_file
                $existingdatainphp = json_decode($exixtingdata);    //convert a JSON object to a PHP object.        
                 
                $myarr=array(
                      "Name"=> $_REQUEST["fname"],      //these are PHP Associative Arrays
                      "Email" => $_REQUEST["fmail"],
                      "Number" =>$_REQUEST["fnumber"] ,
                      "Gender" =>  $_REQUEST["fgender"],
                      "DOB"=>$_REQUEST["fdate"],
                      "Nominee_Name"=>$_REQUEST["fnominee"],
                      "Nominee_Age"=>$_REQUEST["fnomineeage"],
                      "Nominee_Gender"=>$_REQUEST["nomineegender"],
                      "Relation_with_User"=>$_REQUEST["nomineeRelation"],
                      "Tin_Number"=>$_REQUEST["tinnumber"],
                      "Password"=>$_REQUEST["fCpass"],

                      
                );

                $existingdatainphp[]= $myarr;
                $myjsonobj= json_encode($existingdatainphp , JSON_PRETTY_PRINT); //The json_encode() function is used to encode a value to JSON format.
                
                file_put_contents("AdminData.json",$myjsonobj); //Write data to a file

                $mydata= file_get_contents("AdminData.json");   //Read a file into a string:
                $myphpdata = json_decode($mydata);


                // database data insert
                 $db = new mydb();
                 $conobj = $db->openCon();
                 $result = $db->insertAdmin($conobj,"admin",$_REQUEST["fname"], $_REQUEST["fmail"], $_REQUEST["fnumber"],
                          $adminAge ,$_POST['fdate'],$_REQUEST["fnominee"], $_REQUEST["fnomineeage"], $_REQUEST["nomineegender"] ,
                          $_REQUEST["nomineeRelation"], $_REQUEST["tinnumber"], $_REQUEST["fCpass"], $images);

                              

                if($result == true)
                {
                  echo "Successully save in data base ";  $db->closeCon($conobj);
                }
                else
                {
                  echo "error".$conobj->error;
                  $db->closeCon($conobj);
                }

              }
    
   
       



  
    }

  


?>