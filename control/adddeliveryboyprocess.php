<?php
include('../model/adb.php');


 $error="";
// store session data
if (isset($_POST['submit'])) {
if (empty($_POST['name']) || empty($_POST['remark'])) {
$error = "name or remark is invalid";
}
else
{
$name = $_POST['name'];
$remark = $_POST['remark'];

$connection = new db();
$conobj=$connection->OpenCon();

$userQuery=$connection->adddeliveryboy($conobj,"deliveryboy",$name,$remark);

if ($userQuery===true) {
//$_SESSION["name"] = $name;
//$_SESSION["remark"] = $remark;
   echo "done";
//header("location: view/adminl.php");

   }
 else {
$error = "name or remark is invalid2";
}
$connection->CloseCon($conobj);

}
}


?>
