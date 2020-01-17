<?php
require_once"facultybase.php";
require_once"connection.php";
session_start();
$result=mysqli_query($conn,"SELECT * from add_faculty WHERE id='".$_SESSION["id"]."'");
?>
<table border='4'>
<tr>
<th>NAME</th>
<th> EMAIL</th>
<th> PHONENO</th>
<th> QUALIFICATION</th>
<th> BATCH</th>
<th> USERNAME</th>
<th> PASSWORD</th>
</tr>
<?php
while($row=mysqli_fetch_assoc($result))
{
   echo"<tr>";
	 echo"<td>"."{$row['name']}"."</td>";
	 echo"<td>"."{$row['email']}"."</td>";
	 echo"<td>"."{$row['mobileno']}"."</td>";
	 echo"<td>"."{$row['Qualification']}"."</td>";
	 echo"<td>"."{$row['Batch']}"."</td>";
	 echo"<td>"."{$row['Username']}"."</td>";
	 echo"<td>"."{$row['password']}"."</td>";
	 echo"</tr>";
	 echo"</table>";
}
?>