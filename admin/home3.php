<!DOCTYPE html>
<?php 
session_start();
include("functions/function.php");

?>
<html>
<head>
<meta charset ="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" type="text/css" href="admin.css">
</head>
<body>
<br><br><h1 align="center" style = "font-style:italic; color:crimson; ">GARDEN OF DREAMS </h1><br><br>

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
	
               
<div class="footer">
  <?php
  include("includes/footer.php");
  ?>
  
</div>


</body>
</html>


