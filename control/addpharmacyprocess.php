<?php
include('../model/adb.php');


 $error="";
// store session data
if (isset($_POST['submit'])) {
if (empty($_POST['name']) || empty($_POST['address'])) {
$error = "name or address is invalid";
}
else
{
$name = $_POST['name'];
$address = $_POST['address'];

$connection = new db();
$conobj=$connection->OpenCon();

$userQuery=$connection->addpharmacy($conobj,"pharmacy",$name,$address);

if ($userQuery===true) {
//$_SESSION["name"] = $name;
//$_SESSION["address"] = $address;
   echo "done";
//header("location: view/adminl.php");

   }
 else {
$error = "name or address is invalid2";
}
$connection->CloseCon($conobj);

}
}


?>
