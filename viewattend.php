<?php
include("connection.php");
include("studentbase.php");
session_start();
$result=mysqli_query($conn,"SELECT * from attendance WHERE ID='".$_SESSION["id"]."'");


?>
<table border='4'>
<tr>
<th>NAME</th>
<th> BATCH</th>
<th> HOUR1</th>
<th> HOUR2</th>
<th> HOUR3</th>
<th> HOUR4</th>
</tr>
<?php
 while($row=mysqli_fetch_array($result))
 {
	 echo"<tr>";
	 echo"<td>"."{$row['name']}"."</td>";
	 echo"<td>"."{$row['batch']}"."</td>";
	 echo"<td>"."{$row['hour1']}"."</td>";
	 echo"<td>"."{$row['hour2']}"."</td>";
	 echo"<td>"."{$row['hour3']}"."</td>";
	 echo"<td>"."{$row['hour4']}"."</td>";
	 
	 echo"</tr>";
 }
	  echo"</table>";
	 mysqli_close($conn);

?>	 