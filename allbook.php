<!DOCTYPE html>
<?php 
session_start();
include("functions/function.php");

?>
<html>
<head>
<meta charset ="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" type="text/css" href="home3.css">
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
<aside>
<div id="sidebar_title">CATEGORIES</div>
				
				<ul id="cats">
				
				<?php getCats(); ?>
				

</aside>
<section>

	<?php 
	
	
	$get_pro = "select * from book";

	$run_pro = mysqli_query($conn, $get_pro); 
	
	
	while($row_pro=mysqli_fetch_array($run_pro)){
	
		$b_id = $row_pro['b_id'];
		$b_nm = $row_pro['b_nm'];
	
		
		$b_price = $row_pro['b_price'];
		$b_img = $row_pro['b_img'];
		
	
		echo "
				<div id='single_product'>
				
					<h3>$b_nm</h3>
					
					<img src='$b_img' width='180' height='180' />
					
					<p><b> Price: </b> $b_price </p>
					
					
					
					<a href='ship.php?b_id=$b_id'>Buy now</a>
					<br><br>
					
				</div>
		
		
		";
	
	}
	?>
	
				
</section>		
			



</body>
</html>


