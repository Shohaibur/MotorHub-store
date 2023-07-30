<?php
include("model/db.php");
 $userErrorr = "";
 $UserPass = "";
 $message= "";

 session_start();

//  $fail="";
//  $existingdata = file_get_contents('AdminData.json');
//  $jsondata = json_decode($existingdata);

 if(isset($_REQUEST['Submit']))
 {
      $username =$_POST["Checkname"];
      $userpassword= $_POST["CheckPassword"];
      $mydb = new mydb();
      $conobj = $mydb->openCon();  
      $result = $mydb->checklogin($conobj,"admin",$_POST["Checkname"],$_POST["CheckPassword"]);
      

     if($result->num_rows > 0)
     {
          foreach($result as  $newdata )
          {
               $_SESSION["Name"] = $newdata["Name"];
               $_SESSION["Email"] =$newdata["Email"];
               $_SESSION["Number"] =$newdata["Number"];
               $_SESSION["Dob"] = $newdata["Dob"];
               $_SESSION["Nominee_Name"] =$newdata["Nominee_Name"];
               $_SESSION["Nominee_Age"] =$newdata["Nominee_Age"];
               $_SESSION["Relation_with_Admin"] =$newdata["Relation_with_Admin"];
               $_SESSION["Tin_Number"] = $newdata["Tin_Number"];
               $_SESSION["images"]  = $newdata["image"];
              header("location: view/ProfileShow.php");
          }
     }
     else
     {
      $message= "Invalid user name or password";
      $UserPass =  $result;
      $mydb->closeCon($conobj);
     }



//         if(empty($_POST['Checkname']) || empty($_POST['CheckPassword']))
//         {
//             $userErrorr = "*"; $UserPass = "*";
//         }
//         else
//         {
//             foreach ($jsondata as $key => $newdata) 
//             {
//             if ($newdata->Name == $_POST["Checkname"] && $newdata->Password == $_POST["CheckPassword"])
//             {
//                 $_SESSION["Name"] = $newdata->Name;
//                 $_SESSION["Email"] =$newdata->Email;
//                 $_SESSION["Number"] =$newdata->Number;
//                 $_SESSION["DOB"] = $newdata->DOB;
//                 $_SESSION["NomineeName"] =$newdata->Nominee_Name;
//                 $_SESSION["NomineeAge"] =$newdata->Nominee_Age;
//                 $_SESSION["Relation"] =$newdata->Relation_with_User;
//                 $_SESSION["Tin"] = $newdata->Tin_Number;
//                 header("location: view/ProfileShow.php");
//             } 
//             else
//             $message= "Invalid user name or password";
//             }
//         }
        
 }

  

?>