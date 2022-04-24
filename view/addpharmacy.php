<?php
session_start(); 
if(empty($_SESSION["aid"])) 
{
header("Location: ../view/adminl.php"); // Redirecting To Home Page
}

?>
<?php
include('../control/adddeliveryboyprocess.php');
$error="";

?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/acss.css">
</head>
<body>


<h2 id="header">Add deliveryboy</h2>


<form id="regf" name="myForm" action=""  method="post">

  <table>
    Name:<br><input type="text" id="name" name="name" placeholder="Enter your name"><br>
    address:<br><input type="text" id="address" name="address"  placeholder="Enter your address"><br><br><br>
  </table>
    <input name="submit" type="submit" value="Add"><br><br>
    <a id="regl" href="admin.php">Go back</a><br><br>

    <?php echo $error ?>
</form>

<br>
<br>
<?php echo $error; ?>


<br>
<br>
<br><br>
<br>

<div class="footer">
<h3> Copyright </h3>

</div>
</body>
</html>