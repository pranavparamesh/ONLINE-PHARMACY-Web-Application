<?php 
session_start();
require('includes/config.php');

	$q="select * from book";
	 $res=mysqli_query($conn,$q) or die("Can't Execute Query...");
	?>

<!DOCTYPE html>


<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>PHARMACY</title>
<link rel="stylesheet" type="text/css" href="style.css">

		<style>
			table{padding:5px;border:10px solid gray}
			td,th{padding:15px}
			
		</style>
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

			

				
					<table border='1' WIDTH='100%'>
						<tr>
						<td colspan="7"><a href="addbook.php"><h1>NEW DRUG</h1></a></td>
						</tr>
						<tr>
<td WIDTH='10%' style="color:darkgreen"><b><u>SR.NO</u></b></td>
<TD style="color:darkgreen" WIDTH='50%'><b><u>NAME</u></b></TD>

<TD style="color:darkgreen" WIDTH='25%'><b><u>PRICE</u></b></TD>
<TD style="color:darkgreen" WIDTH='25%'><b><u>IMAGE</u></b></TD>
<TD style="color:darkgreen" WIDTH='25%'><b><u>DELETE</u></b></TD>				
							
						</tr>
						<?php
							$count=1;
							while($row=mysqli_fetch_assoc($res))
							{
							echo '<tr>
										<td>'.$count.'
										<td>'.$row['b_nm'].'
										
										<td>'.$row['b_price'];
				echo "<td><img src='../$row[b_img]' width='80'/>";
										
										
									echo 	'<td><a href="process_del_book.php?sid='.$row['b_id'].'"><img src="delete.png" ></a>
												
									
									</tr>';
									$count++;
							}
						?>

					</TABLE>
				
			</div>
			
		
		
	</div>
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
