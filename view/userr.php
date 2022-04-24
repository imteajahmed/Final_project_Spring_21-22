<?php
include('../control/userrprocess.php');
$error="";
if(isset($_SESSION['uid'])){
header("location: user.php");
}
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/ucss.css">
<script src="../js/ujs.js"></script>
</head>
<body>


<h2 id="header">Register</h2>


<p id="mytext"></p>  

<form id="regf" name="myForm" action=""  method="post">
  <p id="euid"></p>
  <p id="epass"></p>
  <p id="ename"></p>
  <p id="ephone"></p>
  <table>
    ID:<br><input type="text" id="uid" name="uid" placeholder="Enter your id" ><br>
    Password:<br><input type="password" onkeyup="passv()" id="pass" name="pass" placeholder="Enter your password" ><br>
    Name:<br><input type="text" id="name" onkeyup="namev()" name="name" placeholder="Enter your name"><br>
    phone:<br><input type="text" id="phone" name="phone" onkeydown="phonev()" placeholder="Enter your phone"><br><br><br>
  </table>
    <input name="submit" type="submit" value="Register"><br><br>
    <a id="regl" href="userl.php">Login</a><br><br>

    <a id="regl" href="home.php">Home</a><br><br>
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
<h3> Copyright Sabbir Hossain </h3>

</div>
</body>
</html>