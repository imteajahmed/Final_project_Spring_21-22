<?php
session_start(); 
if(empty($_SESSION["aid"])) 
{
header("Location: ../view/adminl.php"); // Redirecting To Home Page
}

?>


<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="../css/acss.css">
</head>
<body><body>
    <h1 id="header">Admin page</h1><br><br>
<div id="saa">
    <div id="saaj">
    <a href="../view/adddoctor.php">Add Doctor</a><br><br>
    <a href="../view/addpatient.php">Add Patient</a><br><br>
    <a href="../view/addpharmacy.php">Add Pharmacy</a><br><br>
    <a href="../view/adddeliveryboy.php">Add delivery boy</a><br><br>
    </div>
    </div>
<div id="sad">
    <div id="sadj">
    <a href="../view/showdoctor.php">Delete Doctor</a><br><br>
    <a href="../view/showpatient.php">Delete Patient</a><br><br>
    <a href="../view/showpharmacy.php">Delete Pharmacy</a><br><br>
    <a href="../view/showdeliveryboy.php">Delete delivery boy</a><br><br>
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


