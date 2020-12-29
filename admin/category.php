<?php session_start();
require('includes/config.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title> GARDEN OF DREAMS</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>


<div class="topnav">
  <?php
  include("includes/menu.php");
  ?>
</div>

			<div class="entry">
				<form action='process_addcategory.php' method='POST'><br><br><br>
						<b style="color:maroon">ADD CATEGORY </b>
							
							<input type='text' name= 'cat' required ="required" size='25'>
							
							<input type="submit" required ="required"  value='ADD'>
							
							<br><br><br>
				</form>
				<hr>
				<form action='process_delcategory.php' method='POST'>
				<br><br><br>
							
						<b style="color:maroon">DELETE CATEGORY </b>						
							
								<select name="del">
									<?php
									
										
			
											$query="select * from category ";
			
											$res=mysqli_query($conn,$query);
											
											while($row=mysqli_fetch_assoc($res))
											{
												echo "<option>".$row['cat_nm'];
											}
			
											
									?>
								</select>
							<input type='submit' value='DELETE'>
							
				</form>

			</div>	
						
			
			
		
	<div style="clear: both;">&nbsp;</div>
</div>



</body>
</html>
