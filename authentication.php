<?php
include("connection.php");
if(isset($_POST['submit']))
{    
    $username=$_POST['username'];
	$password=$_POST['password'];
	$sql="SELECT * from admin WHERE username='".$username."' and password='".$password."' ";
	$result=mysqli_query($conn,$sql);
	if(mysqli_num_rows($result)>0)
	{
		require_once "admin_home.php";
		
	}
}
?>