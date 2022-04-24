<?php
include('../model/udb.php');
session_start(); 

 $error="";
// store session data
if (isset($_POST['submit'])) {
if (empty($_POST['uid']) || empty($_POST['pass'])) {
$error = "uid or pass is invalid1";
}
else
{
$uid = $_POST['uid'];
$pass = $_POST['pass'];
$name = $_POST['name'];
$phone = $_POST['phone'];

$connection = new db();
$conobj=$connection->OpenCon();

$userQuery=$connection->register($conobj,"user",$uid,$pass,$name,$phone);

if ($userQuery===true) {
//$_SESSION["uid"] = $uid;
//$_SESSION["pass"] = $pass;
   echo "done";
//header("location: view/userl.php");

   }
 else {
$error = "uid or pass is invalid2";
}
$connection->CloseCon($conobj);

}
}


?>
