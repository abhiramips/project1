<?php
include ("connection.php");
if(isset($_post['approve']))
{
	$id_=$_post['leaveid'];
	$sql="UPDATE facleave SET status='Approved' where leaveid='".$id_."'";
	if(mysqli_query($conn,$sql))
	{
		require_once "adminleavefaculty_view.php";
	}
}

?>