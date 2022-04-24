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

<h2 id="header">Customer Info</h2>

<h1>Contact Info</h1>
<h2>Phone: 01898379837</h2>
<h2>Phone: 01898379838</h2>
<h2>Phone: 01898379839</h2>
<h2>Email: info@hc.com</h2>
</br>
<h1>Ambulance</h1>

<h2>Phone: 01864748294</h2>
<h2>Email: ambulance@hc.com</h2>

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