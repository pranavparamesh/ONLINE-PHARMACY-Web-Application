<?php session_start();
require('includes/config.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head><title>pharmacy</title>
<link rel="stylesheet" type="text/css" href="book.css">
</head>
<body>

<div class="header">
    <?php
  include("includes/head.php");
  ?>
  
</div>

<div class="topnav">
  <?php
  include("includes/menu.php");
  ?>
</div>
			
				<form action='process_addbook.php' method='POST' align="center" >
				
						<br><b>DRUG NAME : </b>
						<input type='text' name='b_nm' required='required' size='40'>
						<br><br>
						
						<b>Category ID : </b>
						<select  name="b_subcat">
								<?php
									
										
			
											$query="select * from category ";
			
											$res=mysqli_query($conn,$query);
											
											while($row=mysqli_fetch_assoc($res))
											{
												
												
										echo '<option value="'.$row['cat_nm'].'"> ---> '.$row['cat_id'];
												
													
												
												
											}
											mysqli_close($conn);
								?>
						</select>
						<br><br>
						
						
						
						
						<b>Price : </b>
						<input type='text' name='b_price' required='required' size='40'>
						<br><br>
						
						<b>Image : </b>
						<input type='file' name='b_img' required='required' size='35'>
						<br><br>
						
						
						
						
						 <input class="button" name="submit" id="submit"  tabindex="5" value=" Proceed" type="submit" onclick="ord()"> 
				</form>
			
			
		
		
	

	<div style="clear: both;">&nbsp;</div>


</body>
</html>
<script type="text/javascript">
function ord()
{
	alert("ADDED SUCCESFULLY!!");
	header("location:allbook.php");
}
</script>

