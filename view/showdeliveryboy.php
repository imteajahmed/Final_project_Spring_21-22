<?php

include('../control/doctordel.php');
if(empty($_SESSION["aid"])) 
{

header("Location: adminl.php"); // Redirecting To Home Page
}

?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/acss.css">
<script>
    function show() {
  
  
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {

    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("thistext").innerHTML = this.responseText;
    }
	else
	{
		 document.getElementById("thistext").innerHTML = "not found";
	}
  };
  xhttp.open("POST", "../control/deliveryboyshow.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send();

}
show();
</script>
</head>
<body>

<h2 id="header">Show And delete Delivery boy</h2>
<p id="thistext"></p>
<?php
//include '../control/doctorshow.php';
?>
<form id="frm"  action="" method="post">
    <input type="text" name="id" placeholder="ID" >
    <input name="submit" type="submit" value="Delete">
</form>
<br>
<a id="back" href="../view/admin.php">Go back</a>
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