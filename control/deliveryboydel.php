<?php
include('../model/adb1.php');
session_start(); 

 $error="";
// store session data
if (isset($_POST['submit'])) {
if (empty($_POST['id'])) {
$error = "id is invalid";
}
else
{
$id = (int)$_POST['id'];
//echo $id;


$connection = new db1();
$conobj=$connection->OpenCon1();

$userQuery=$connection->doctordel($conobj,"doctor",$id);

if ($userQuery===true) {

   echo "done";

   }
 else {
$error = "id invalid";
}
$connection->CloseCon($conobj);

}
}


?>
