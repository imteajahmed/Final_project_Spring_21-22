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
 function doctordel($conn,$table,$id)
  {
      $sql = "DELETE FROM `doctor` WHERE `doctor`.`id` = ".$id.";";
 
     $result=$conn->query($sql);
     return $result;
  }
  function patientdel($conn,$table,$id)
   {
       $sql = "DELETE FROM `patient` WHERE `patient`.`id` = ".$id.";";
  
      $result=$conn->query($sql);
      return $result;
   }
   function pharmacydel($conn,$table,$id)
    {
        $sql = "DELETE FROM `pharmacy` WHERE `pharmacy`.`id` = ".$id.";";
   
       $result=$conn->query($sql);
       return $result;
    }

    function deliveryboydel($conn,$table,$id)
    {
        $sql = "DELETE FROM `deliveryboy` WHERE `deliveryboy`.`id` = ".$id.";";
   
       $result=$conn->query($sql);
       return $result;
    }

 
 
function CloseCon($conn)
 {
 $conn -> close();
 }
}
?>