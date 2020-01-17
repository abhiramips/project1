<?php
   include("facultybase.php");
?>
<!DOCTYPE html>
<html>
	<head>
	</head>
	              <body>

                        <form action="authentication.php" method="POST">

							  <table class="t">
										 <tr>
											<td> </td>
											<td></td>
											<td></td>
											<td></td>
											<td></td>
											<td></td>
											<td></td>
										 </tr>
                               </table>    								 
									
						  </form>
						  <form action="insertattend.php" name="login" method="post" class="m-auto py-3   p-3 form-style rounded">

							
								studentname:<input type="text" class="frm"name="name" >
								batch:<input type="text" class="frm" name="batch">
								Hour1:<input type="text" class="frm" name="hour1">
								Hour2:<input type="text" class="frm" name="hour2">
							    Hour3:<input type="text" class="frm" name="hour3">
								Hour4:<input type="text" class="frm" name="hour4">
								
								
							<button type="submit" class="btn-primary mt-md-3 px-5 rounded shadow" name="submit">Sign IN</button>
		
							

						</form>
				   </body>
</html>

   