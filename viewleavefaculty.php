<?php
session_start();
?>
<?php

include("connection.php");
include("facultybase.php");

$result=mysqli_query($conn,"SELECT * from facleave WHERE ID='".$_SESSION["id"]."'");


?>
<table border='4'>
<tr>
<th>NAME</th>
<th> LEAVEID</th>
<th> REASON</th>
<th> STATUS</th>
</table>

<?php
 while($row=mysqli_fetch_array($result))
 {
	 echo"<tr>";
	 echo"<td>"."{$row['name']}"."</td>";
	 echo"<td>"."{$row['leaveid']}"."</td>";
	 echo"<td>"."{$row['reson']}"."</td>";
	 echo"<td>"."{$row['status']}"."</td>";
	 
	 
	 echo"</tr>";
 }
	  echo"</table>";
	 mysqli_close($conn);

?>	 