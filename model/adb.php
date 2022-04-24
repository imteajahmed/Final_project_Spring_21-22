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

 function CheckUser($conn,$table,$aid,$pass)
 {
$result = $conn->query("SELECT * FROM ". $table." WHERE aid='". $aid."' AND pass='". $pass."'");
 return $result;
 }
 function register($conn,$table,$aid,$pass,$name,$email)
 {
    $result=false;
    $sql = "INSERT INTO $table (aid, pass,name,email)
VALUES ('$aid', '$pass', '$name','$email')";
    $userQuery=$conn->query("SELECT * FROM ". $table." WHERE aid='". $aid."' AND pass='". $pass."'");
    if ($userQuery->num_rows > 0) {
        $error ="id exists";
        echo "id exists";
   }
 else {
$result=$conn->query($sql);
}    
    return $result;
 }

 
 function adddoctor($conn,$table,$name,$dept)
 {
    $result=false;
    $sql = "INSERT INTO $table (name, dept)
VALUES ('$name', '$dept')";
$result=$conn->query($sql);
   
    return $result;
 }
 function addpatient($conn,$table,$name,$disease)
 {
    $result=false;
    $sql = "INSERT INTO $table (name, disease)
VALUES ('$name', '$disease')";
$result=$conn->query($sql);
   
    return $result;
 }
 function addpharmacy($conn,$table,$name,$address)
 {
    $result=false;
    $sql = "INSERT INTO $table (name, address)
VALUES ('$name', '$address')";
$result=$conn->query($sql);
   
    return $result;
 }

 function adddeliveryboy($conn,$table,$name,$remark)
 {
    $result=false;
    $sql = "INSERT INTO $table (name, remark)
VALUES ('$name', '$remark')";
$result=$conn->query($sql);
   
    return $result;
 }


 function ShowAllpharmacy($conn)
 {
$result = $conn->query("SELECT * FROM  pharmacy");
 return $result;
 }
 function ShowAllpatient($conn)
 {
$result = $conn->query("SELECT * FROM  patient");
 return $result;
 }
 function ShowAlldoctor($conn)
 {
$result = $conn->query("SELECT * FROM  doctor");
 return $result;
 }
 function ShowAlldeliveryboy($conn)
 {
$result = $conn->query("SELECT * FROM  deliveryboy");
 return $result;
 }


function searchemp($conn,$table,$eid)
 {
$result = $conn->query("SELECT * FROM  $table WHERE eid='". $eid."'");
 return $result;
 }

 function UpdateUser($conn,$table,$aid,$firstname,$email)
 {
     $sql = "UPDATE $table SET firstname='$firstname', email='$email' WHERE aid='$aid'";

    if ($conn->query($sql) === TRUE) {
        $result= "Record updated successfully";
    } else {
        $result= "Error updating record: " ;
    }
    return $result;
 }

function CloseCon($conn)
 {
 $conn -> close();
 }
}
?>
