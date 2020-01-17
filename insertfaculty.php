<?php
require_once'connection.php';
$name=$_POST['name'];
$email=$_POST['email'];
$phoneno=$_POST['phoneno'];
$Qualification=$_POST['Qualification'];
$Batch=$_POST['batch'];
$username=$_POST['username'];
$password=$_POST['password'];
if(isset($_POST['submit']))
{
	$sq="INSERT INTO add_faculty(name,email,mobileno,Qualification,batch,Username,password)VALUES('".$name."','".$email."','".$phoneno."','".$Qualification."','".$Batch."','".$username."','".$password."')";
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