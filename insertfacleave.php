<?php
require_once'connection.php';
$name=$_POST['name'];
$leaveid=$_POST['leaveid'];
$reason=$_POST['reason'];
$status=$_POST['status'];

if(isset($_POST['submit']))
{
	$sq="INSERT INTO facleave(name,leaveid,reason,status)VALUES('".$name."','".$leaveid."','".$reason."','".$status."')";
	 if(!$result=$conn->query($sq))
	 {
		 die('there was an error running in the query['.$conn->error.']');
	 }
     else
	 {
		 echo"thank you!!@";
	  }
	 mysqli_close($conn);
}
?>