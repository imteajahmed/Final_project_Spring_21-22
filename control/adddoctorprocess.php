<?php
include('../model/adb.php');


 $error="";
// store session data
if (isset($_POST['submit'])) {
if (empty($_POST['name']) || empty($_POST['dept'])) {
$error = "name or dept is invalid";
}
else
{
$name = $_POST['name'];
$dept = $_POST['dept'];

$connection = new db();
$conobj=$connection->OpenCon();

$userQuery=$connection->adddoctor($conobj,"doctor",$name,$dept);

if ($userQuery===true) {
//$_SESSION["name"] = $name;
//$_SESSION["dept"] = $dept;
   echo "done";
//header("location: view/adminl.php");

   }
 else {
$error = "name or dept is invalid2";
}
$connection->CloseCon($conobj);

}
}


?>
