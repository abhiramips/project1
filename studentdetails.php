<?php
include("connection.php");
include("base.php");
$sq="SELECT * from add_student";
$result=mysqli_query($conn,$sq);


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
 while($row=mysqli_fetch_array($result))
 {
	 echo"<tr>";
	 echo"<td>"."{$row['name']}"."</td>";
	 echo"<td>"."{$row['email']}"."</td>";
	 echo"<td>"."{$row['phoneno']}"."</td>";
	 echo"<td>"."{$row['Qualification']}"."</td>";
	 echo"<td>"."{$row['batch']}"."</td>";
	 echo"<td>"."{$row['username']}"."</td>";
	 echo"<td>"."{$row['password']}"."</td>";
	 echo"</tr>";
 }
	  echo"</table>";
	 mysqli_close($conn);

?>	 