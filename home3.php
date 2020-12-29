<!DOCTYPE html>
<?php 
session_start();
include("functions/function.php");

?>
<html>
<head><title>PHARMACY</title>
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
				
				<?php getCats();
                      
				?>			

</aside>

<section>

<?php

getCatPro();
	?>							

</section>	
               



</body>
</html>


