<?php
   include("base.php");
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
						  <form action="insertstudent.php" name="login" method="post" class="m-auto py-3   p-3 form-style rounded">

							
								studentname:<input type="text" class="frm"name="name" >
								dob:<input type="text" class="frm" name="dob">
								gender:<input type="text" class="frm" name="gender">
								email:<input type="text" class="frm" name="email">
							    mobileno:<input type="text" class="frm" name="phoneno">
								qualification:<input type="text" class="frm" name="Qualification">
								batch:<input type="text" class="frm" name="batch">
								username:<input type="text" class="frm" name="username">
								password:<input type="text" class="frm" name="password">
							<button type="submit" class="btn-primary mt-md-3 px-5 rounded shadow" name="submit">Sign IN</button>
								
							

						</form>
				   </body>
</html>

   