<?php

include('../control/ordersdel.php');
if(empty($_SESSION["uid"])) 
{

header("Location: user.php"); // Redirecting To Home Page
}

?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/ucss.css">
</head>
<body>

<h2 id="header">Health Care</h2>

<h1>Welcome to HC Hospital</h1>
<h2>
    We are working for 30 years for customer satisfaction. hope to do it as well in the future. please stay with us.
</h2>
<h3>Phone: 01898379837</h3>
<h3>Phone: 01898379838</h3>
<h3>Phone: 01898379839</h3>
<h3>Email: info@hc.com</h3>
<br>
<a id="back" href="../view/user.php">Go back</a>
<a id="logout" href="../control/logout.php">logout</a>
 
<br>
<br>
<br><br>
<br>

<div class="footer">
<h3> Copyright </h3>

</div>
</body>
</html>