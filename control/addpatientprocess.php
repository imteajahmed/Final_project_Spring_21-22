<?php
include('../model/adb.php');


 $error="";
// store session data
if (isset($_POST['submit'])) {
if (empty($_POST['name']) || empty($_POST['disease'])) {
$error = "name or disease is invalid";
}
else
{
$name = $_POST['name'];
$disease = $_POST['disease'];

$connection = new db();
$conobj=$connection->OpenCon();

$userQuery=$connection->addpatient($conobj,"patient",$name,$disease);

if ($userQuery===true) {
//$_SESSION["name"] = $name;
//$_SESSION["disease"] = $disease;
   echo "done";
//header("location: view/adminl.php");

   }
 else {
$error = "name or disease is invalid2";
}
$connection->CloseCon($conobj);

}
}


?>
