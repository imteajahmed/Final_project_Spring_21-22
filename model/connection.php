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
 function InsertUser($conn,$table,$uid,$deg,$pass,$phone,$nid)
 {
    $result = $conn->query("INSERT INTO $table VALUES('$uid','$deg','$pass',$phone,'$nid',0)");
    return $result;
 }
 function CheckUser($conn,$table,$uid,$pass)
 {
$result = $conn->query("SELECT * FROM ". $table." WHERE uid='". $uid."' AND pass='". $pass."'");
 return $result;
 }
 function GetUserByeid($conn,$table, $pid)
 {
$result = $conn->query("SELECT * FROM  $table WHERE pid='$pid'");
 return $result;
 }
 function UpdateUser($conn,$table,$eid,$deg,$phone,$nid)
 {
     $sql = "UPDATE $table SET deg='$deg', phone=$phone,nid='$nid' where eid='$eid' ";

    if ($conn->query($sql) === TRUE) {
        $result= "Record updated successfully";
    } else {
        $result= "Error updating record: " ;
    }
    return $result;
 }
 function GetUserByvid($conn,$table, $vid)
 {
$result = $conn->query("SELECT * FROM  $table WHERE vid='$vid'");
 return $result;
 }
 function InsertvenUser($conn,$table,$pid,$vid)
 {
    $result = $conn->query("INSERT INTO $table VALUES('$pid','$vid')");
    return $result;
 }
 function CloseCon($conn)
 {
 $conn -> close();
 }
}
?>
