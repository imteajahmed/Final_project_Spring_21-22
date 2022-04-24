<?php
include('../model/udb.php');
session_start(); 

 $error="";
// store session data
if (isset($_POST['submit'])) {
if (empty($_POST['name']) || empty($_POST['phone']) || empty($_POST['address'])) {
$error = "name or dept is invalid";
}
else
{

$connection = new db();
$conobj=$connection->OpenCon();

$userQuery=$connection->addorders($conobj,"orders",$_POST['name'],$_POST['phone'],$_POST['address'],$_SESSION["uid"]);

if ($userQuery===true) {
   echo "done";

   }
 else {
$error = "something is invalid2";
}
$connection->CloseCon($conobj);

}
}


?>
