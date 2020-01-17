<?php
   include("facultybase.php");
?>
<!DOCTYPE html>
<html>
	<head>
	</head>
	             
						  <form action="insertfacleave.php" name="login" method="post" class="m-auto py-3   p-3 form-style rounded">

							
								Faculty Name:<input type="text" class="frm"name="name" >
								Leaveid:<input type="text" class="frm" name="leaveid">
							    Reason:<input type="text" class="frm" name="reason">
								Status:<input stype="text" class="frm" name="status" readonly value="pending"required="required">
								
							<button type="submit" class="btn-primary mt-md-3 px-5 rounded shadow" name="submit">submit</button>
								
							

						</form>
				   </body>
</html>

   