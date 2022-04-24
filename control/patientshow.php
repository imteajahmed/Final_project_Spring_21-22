<?php
include('../model/adb.php');


 $error="";
// store session data





$connection = new db();
$conobj=$connection->OpenCon();

$userQuery=$connection->ShowAllpatient($conobj);

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
