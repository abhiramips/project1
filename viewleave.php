<?php
session_start();
?>
<?php

include("connection.php");
include("facultybase.php");

$result=mysqli_query($conn,"SELECT * from stuleave WHERE ID='".$_SESSION["id"]."'");


?>
<form action="approving.php"method="post">
<input type="text"placeholder="id"name="id"> 
<input type="submit"placeholder="approve"name="approve"> 
</form>
<table border='4'>
<tr>
<th>NAME</th>
<th> LEAVEID</th>
<th> REASON</th>
<th> STATUS</th>


<?php
 while($row=mysqli_fetch_array($result))
 {
	 echo"<tr>";
	 echo"<td>"."{$row['name']}"."</td>";
	 echo"<td>"."{$row['leaveid']}"."</td>";
	 echo"<td>"."{$row['reason']}"."</td>";
	 echo"<td>"."{$row['status']}"."</td>";
	 
	 
	 echo"</tr>";
 }
	  echo"</table>";
	 mysqli_close($conn);

?>	

</html>