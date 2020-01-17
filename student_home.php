<?php
session_start();
include("studentbase.php");
require_once"connection.php";

$result=mysqli_query($conn,"SELECT * from add_student WHERE id='".$_SESSION["id"]."'");
echo$_SESSION['id'];
?>
<table border='4'>
<tr>
<th>NAME</th>
<th>DOB</th>
<th>GENDER</th>
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
   echo "<tr>";
	 echo "<td>"."{$row['name']}"."</td>";
	 echo "<td>"."{$row['dob']}"."</td>";
	 echo "<td>"."{$row['gender']}"."</td>";
	 echo "<td>"."{$row['email']}"."</td>";
	 echo "<td>"."{$row['phoneno']}"."</td>";
	 echo "<td>"."{$row['Qualification']}"."</td>";
	 echo "<td>"."{$row['batch']}"."</td>";
	 echo "<td>"."{$row['username']}"."</td>";
	 echo "<td>"."{$row['password']}"."</td>";
	 echo "</tr>";
	echo "</table>";
}
?>