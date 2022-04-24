<?php
class db{
 
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "healthcare";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 

 return $conn;
 }

 function CheckUser($conn,$table,$uid,$pass)
 {
$result = $conn->query("SELECT * FROM ". $table." WHERE uid='". $uid."' AND pass='". $pass."'");
 return $result;
 }
 function register($conn,$table,$uid,$pass,$name,$phone)
 {
    $result=false;
    $sql = "INSERT INTO $table (uid, pass,name,phone)
VALUES ('$uid', '$pass', '$name','$phone')";
    $userQuery=$conn->query("SELECT * FROM ". $table." WHERE uid='". $uid."' AND pass='". $pass."'");
    if ($userQuery->num_rows > 0) {
        $error ="id exists";
        echo "id exists";
   }
 else {
$result=$conn->query($sql);
}    
    return $result;
 }
 function addorders($conn,$table,$a,$b,$c,$d)
 {
    $result=false;
    $sql = "INSERT INTO $table (name, phone,address,uid)
VALUES ('$a', '$b', '$c', '$d')";
$result=$conn->query($sql);
   
    return $result;
 }
 function addblood($conn,$table,$a,$b,$c,$d)
 {
    $result=false;
    $sql = "INSERT INTO $table (name, phone,bg,uid)
VALUES ('$a', '$b', '$c', '$d')";
$result=$conn->query($sql);
   
    return $result;
 }
 function addcomplain($conn,$table,$a,$b)
 {
    $result=false;
    $sql = "INSERT INTO $table (text,uid)
VALUES ('$a', '$b')";
$result=$conn->query($sql);
   
    return $result;
 }
 
 function addfeedback($conn,$table,$a,$b)
 {
    $result=false;
    $sql = "INSERT INTO $table (text,uid)
VALUES ('$a', '$b')";
$result=$conn->query($sql);
   
    return $result;
 }

 function ShowAllorders($conn,$a)
 {
$result = $conn->query("SELECT * FROM  orders where uid='$a'");
 return $result;
 }
 function ShowAllcomplain($conn,$a)
 {
$result = $conn->query("SELECT * FROM  complain where uid='$a'");
 return $result;
 }
 function ShowAllfeedback($conn,$a)
 {
$result = $conn->query("SELECT * FROM  feedback where uid='$a'");
 return $result;
 }
 function ShowAlldoctor($conn)
 {
$result = $conn->query("SELECT * FROM  doctor");
 return $result;
 }
 
function CloseCon($conn)
 {
 $conn -> close();
 }
}
?>
