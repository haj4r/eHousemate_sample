<?php
include('dbconn.php');
session_start();


$id = $_GET['id'];

$sql2 = "DELETE FROM housemate_application where housemate_id ='".$id."'";

 $result = mysqli_query($dbconn,$sql2); 
    if( $result== 1)
    


//sends the query to delete the entry

   
   /*  $row = mysqli_fetch_assoc($result); */
    header("Location: applicationList.php");

?>
