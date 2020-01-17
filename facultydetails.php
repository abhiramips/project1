<?php
include("connection.php");
include("base.php");
$sq="SELECT * from add_faculty";
$result=mysqli_query($conn,$sq);


?>
<table border='4'>
<tr>
<th>NAME</th>
<th> EMAIL</th>
<th> PHONENO</th>
<th> QUALIFICATION</th>
<th> BATCH  IN CHARGE</th>
<th> USERNAME</th>
<th> PASSWORD</th>
</tr>
<?php
 while($row=mysqli_fetch_array($result))
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
 }
	  echo"</table>";
	 mysqli_close($conn);

?>	 