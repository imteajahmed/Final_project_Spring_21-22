<?php
include('../model/udb.php');
session_start(); 

 $error="";
// store session data
if (isset($_POST['submit'])) {
if (empty($_POST['name']) || empty($_POST['phone']) || empty($_POST['bg'])) {
$error = "name or blood is invalid";
}
else
{

$connection = new db();
$conobj=$connection->OpenCon();

$userQuery=$connection->addblood($conobj,"blood",$_POST['name'],$_POST['phone'],$_POST['bg'],$_SESSION["uid"]);

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
