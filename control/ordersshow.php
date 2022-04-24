<?php
include('../model/udb.php');
session_start(); 

 $error="";
// store session data





$connection = new db();
$conobj=$connection->OpenCon();

$userQuery=$connection->ShowAllorders($conobj,$_SESSION["uid"]);

if ($userQuery->num_rows > 0) {
   echo "<div id='show'>";

   while($row = $userQuery->fetch_assoc()) {

     echo "ID: ".$row["id"]."<br>Name: ".$row["name"]."<br><br>";

  }
  echo "</div>";

   }
 else {
$error = "id is invalid";
}
$connection->CloseCon($conobj);





?>
