<?php
   include("facultybase.php");
?>
<!DOCTYPE html>
<html>
	<head>
	</head>
	              <body>

                       
						  <form action="insertassessment.php" name="login" method="post" class="m-auto py-3   p-3 form-style rounded">

							
								studentname:<input type="text" class="frm"name="name" >
								batch:<input type="text" class="frm" name="batch">
								Assessmentno:<input type="text" class="frm" name="assessmentno">
								sub1:<input type="text" class="frm" name="sub1">
							    sub2:<input type="text" class="frm" name="sub2">
								sub3:<input type="text" class="frm" name="sub3">
								sub4:<input type="text" class="frm" name="sub4">
								max mark:<input type="text" class="frm" name="maxmark">
								
								
							<button type="submit" class="btn-primary mt-md-3 px-5 rounded shadow" name="submit">Sign IN</button>
		
							

						</form>
				   </body>
</html>

   