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
						  <form action="insertfaculty.php" name="login" method="post" class="m-auto py-3   p-3 form-style rounded">

							
								Faculty Name:<input type="text" class="frm"name="name" >
								Email:<input type="text" class="frm" name="email">
							    Mobileno:<input type="text" class="frm" name="phoneno">
								Qualification:<input type="text" class="frm" name="Qualification">
								Batch in charge:<input type="text" class="frm" name="batch">
								Username:<input type="text" class="frm" name="username">
								password:<input type="text" class="frm" name="password">
							<button type="submit" class="btn-primary mt-md-3 px-5 rounded shadow" name="submit">Sign IN</button>
								
							

						</form>
				   </body>
</html>

   