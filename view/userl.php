<?php
include('../control/userlcheck.php');

if(isset($_SESSION['uid'])){
header("location: user.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/ucss.css">
<script src="../js/ajs.js"></script>
</head>
<body>


<h2 id="header">Login</h2>

<!--onsubmit="return validateForm()"-->
<p id="mytext"></p>  
<div id="login">
<form name="myForm" action=""  method="post">
    ID:<br><input type="text" id="uid" name="uid" placeholder="Enter your uid" ><br><br>
    Password:<br><input type="password" id="pass" name="pass" placeholder="Enter your pass" ><br><br>
    <input name="submit" type="submit" value="LOGIN">
</form>
<a id="loginr" href="userr.php">Register</a><br><br>
<a id="loginr" href="home.php">Home</a><br><br>
</div>
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