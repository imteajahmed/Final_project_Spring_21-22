<?php
include('../control/addbloodprocess.php');
$error="";

?>
<?php

if(empty($_SESSION["uid"])) 
{
header("Location: ../view/userl.php"); // Redirecting To Home Page
}

?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/ucss.css">
</head>
<body>


<h2 id="header">Add blood Blood donation</h2>


<form id="regf" name="myForm" action=""  method="post">

  <table>
    Name:<br><input type="text" id="name" name="name" placeholder="Enter your name"><br>
    phone:<br><input type="text" id="phone" name="phone"  placeholder="Enter your phone"><br>
    blood group:<br><input type="text" id="bg" name="bg"  placeholder="Enter your blood group"><br>
    
    
    <br><br>
  </table>
    <input name="submit" type="submit" value="Add"><br><br>
    <a id="regl" href="user.php">Go back</a><br><br>

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