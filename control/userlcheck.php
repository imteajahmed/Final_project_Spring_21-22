<?php
include('../model/udb.php');
session_start(); 

 $error="";
// store session data
if (isset($_POST['submit'])) {
if (empty($_POST['uid']) || empty($_POST['pass'])) {
$error = "uid or pass is invalid";
}
else
{
$uid=$_POST['uid'];
$pass=$_POST['pass'];

$connection = new db();
$conobj=$connection->OpenCon();

$userQuery=$connection->CheckUser($conobj,"user",$uid,$pass);

if ($userQuery->num_rows > 0) {

      $_SESSION["uid"] = $uid;
$_SESSION["pass"] = $pass;

  

   }
 else {
$error = "uid or pass is invalid";
}
$connection->CloseCon($conobj);

}
}


?>
