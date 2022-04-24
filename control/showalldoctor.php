<?php
include('../model/udb.php');


 $error="";
// store session data





$connection = new db();
$conobj=$connection->OpenCon();

$userQuery=$connection->ShowAlldoctor($conobj);

if ($userQuery->num_rows > 0) {
   echo "<div id='show'>";

   while($row = $userQuery->fetch_assoc()) {

     echo "ID: ".$row["id"]."<br>Name: ".$row["name"]."<br>Department: ".$row["dept"]."<br><br>";

  }
  echo "</div>";

   }
 else {
$error = "id is invalid";
}
$connection->CloseCon($conobj);





?>
