<?php
session_start();

include("../model/db.php");

// $mydb= new mydb();
// $conobj=$mydb->openCon();
// $result=$mydb->showUser($conobj,"user", $_SESSION["name"]);
// if($result->num_rows > 0)
// {
//   echo " <table>";
//   echo"<tr><td>Name</td> <td>Age</td> <td>Profession</td> <td>Image</td> <td>ID</td></tr>"; 
// foreach ($result as $row) //foreach loop for associative array, $row=reference object(print)
//    {
//     echo"<tr>";
//     echo "<td>".$row["Name"]."</td>";
//     echo "<td>".$row["Age"]."</td>";
//     echo "<td>".$row["profession"]."</td>";
//     echo "<td>".$row["image"]."</td>";
//     echo "<td>".$row["id"]."</td>";
//     echo "</tr>";

//    }
// }

?>