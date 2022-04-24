<?php
class db1{
 
function OpenCon1()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "healthcare";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 

 return $conn;
 }
 function ordersdel($conn,$table,$id)
  {
      $sql = "DELETE FROM `orders` WHERE `orders`.`id` = ".$id.";";
 
     $result=$conn->query($sql);
     return $result;
  }
  function feedbackdel($conn,$table,$id)
   {
       $sql = "DELETE FROM `feedback` WHERE `feedback`.`id` = ".$id.";";
  
      $result=$conn->query($sql);
      return $result;
   }
   function complaindel($conn,$table,$id)
    {
        $sql = "DELETE FROM `complain` WHERE `complain`.`id` = ".$id.";";
   
       $result=$conn->query($sql);
       return $result;
    }

 
 
 function CheckUser($conn,$table,$aid,$pass)
 {
$result = $conn->query("SELECT * FROM ". $table." WHERE aid='". $aid."' AND pass='". $pass."'");
 return $result;
 }
 function register($conn,$table,$aid,$pass,$name,$email,$phone)
 {
     $sql = "INSERT INTO $table (aid, pass,name,email,phone)
VALUES ('$aid', '$pass', '$name','$email','$phone')";

    $result=$conn->query($sql);
    /*if ($conn->query($sql) === TRUE) {
        $result= "Record updated successfully";
    } else {
        $result= "Error updating record: " ;
    }*/
    return $result;
 }
 function ShowAll($conn,$table)
 {
$result = $conn->query("SELECT * FROM  $table");
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