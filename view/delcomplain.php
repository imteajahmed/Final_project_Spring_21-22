<?php

include('../control/complaindel.php');
if(empty($_SESSION["uid"])) 
{

header("Location: user.php"); // Redirecting To Home Page
}

?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/ucss.css">
<script>
    function show() {
  
  
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {

    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("sample").innerHTML = this.responseText;
    }
	else
	{
		 document.getElementById("sample").innerHTML = "not found";
	}
  };
  xhttp.open("POST", "../control/complainshow.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send();

}
show();
</script>
</head>
<body>

<h2 id="header">Delete complain</h2>
<p id="sample"></p>
<form id="frm"  action="" method="post">
    <input type="text" name="id" placeholder="ID" >
    <input name="submit" type="submit" value="Delete">
</form>
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