<?php 
session_start();
require('includes/config.php');

	$q="select * from contact";
	 $res=mysqli_query($conn,$q) or die("Can't Execute Query...");

	
	?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title> GARDEN OF DREAMS</title>
<link rel="stylesheet" type="text/css" href="style.css">
		
		<style>
			table{padding:5px;border:10px solid gray}
			td,th{padding:15px}
			
		</style>
</head>
<body>



<div class="topnav">
  <?php
  include("includes/menu.php");
  ?>
</div>

			
				
					<table border='1' WIDTH='100%'>
						<tr>
								<td WIDTH='10%' style="color:darkgreen"><b><u>SR.NO</u></b>
								<TD style="color:darkgreen" WIDTH='20%'><b><u>NAME</u></b>
								<TD style="color:darkgreen" WIDTH='20%'><b><u>EMAIL</u></b>
								<TD style="color:darkgreen" WIDTH='50%'><b><u>QUERY</u></b>
								<TD style="color:darkgreen" WIDTH='25%'><b><u>DELETE</u></b>
							
						</tr>
						<?php
							$count=1;
							while($row=mysqli_fetch_assoc($res))
							{
							echo '<tr>
										<td>'.$count.'
										<td>'.$row['con_nm'].'
										<td>'.$row['con_email'].'
										<td>'.$row['con_query'].'
										<td><a href="process_del_contact.php?sid='.$row['con_id'].'"><img src="delete.png" ></a>
												
									
									</tr>';
									$count++;
							}
						?>

					</TABLE>
				
			
			
	<!-- end content -->
	<!-- start sidebar -->
	
	<!-- end sidebar -->
	<div style="clear: both;">&nbsp;</div>
</div>
<!-- end page -->
<!-- start footer -->

<!-- end footer -->
</body>
</html>
