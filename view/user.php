<?php
session_start(); 
if(empty($_SESSION["uid"])) 
{
header("Location: ../view/userl.php"); // Redirecting To Home Page
}

?>


<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="../css/ucss.css">
</head>
<body><body>
    <h1 id="header">User page</h1><br><br>
<div id="saa">
    <div id="saaj">
    <a href="../view/addblood.php">Donate Blood</a><br><br>
    <a href="../view/addcomplain.php">Add Complain</a><br><br>
    <a href="../view/addfeedback.php">Add Feedback</a><br><br>
    <a href="../view/addorders.php">Add Order</a><br><br>
    <a href="../view/showalldoctor.php">Show All Doctor</a><br><br>
    <a href="../view/hospitalinfo.php">Hospital Info</a><br><br>
    <a href="../view/customerinfo.php">Customer Service</a><br><br>
    </div>
    </div>
<div id="sad">
    <div id="sadj">
    <a href="../view/delcomplain.php">del complain</a><br><br>
    <a href="../view/delfeedback.php">del feedback</a><br><br>
    <a href="../view/delorders.php">del Orders</a><br><br>
    </div></div>
    <a id="logout" href="../control/logout.php">logout</a>

<br>
<br>
<br><br>
<br>

<div class="footerm">
<h3> Copyright</h3>

</div>
</body>
</html>

<?php


?>   


