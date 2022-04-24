<?php
include('../model/udb.php');
session_start(); 
 $error="";
// store session data
if (isset($_POST['submit'])) {
if (empty($_POST['text'])) {
$error = "text invalid";
}
else
{

$connection = new db();
$conobj=$connection->OpenCon();

$userQuery=$connection->addcomplain($conobj,"complain",$_POST['text'],$_SESSION["uid"]);

if ($userQuery===true) {
  header("Location: ../view/user.php");

   }
 else {
$error = "something is invalid2";
}
$connection->CloseCon($conobj);

}
}


?>
