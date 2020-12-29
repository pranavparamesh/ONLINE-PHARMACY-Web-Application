<?php session_start();

	if(!(isset($_SESSION['status'])&& $_SESSION['username']=="admin"))
	{
		header("location:../admin.php");
	}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head><title>DMART</title>
<meta charset ="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" type="text/css" href="admin.css">
</head>
<body>

<div class="header">
    <?php
  include("includes/head.php");
  ?>
  
</div>

<div class="topnav">
 
 
			<a href="category.php">Category</a>
			<a href="all_book.php">Drugs</a>
			<a href="contact.php">Contact</a>
			
			<?php
				if(isset($_SESSION['status'])&& $_SESSION['username']=="admin")
				{
					echo '<a href="../logout.php">Logout</a>';
				}
				else
				{
					echo '<a href="../register.php">Register</a>';
				}
			?>
			
  
</div>
<div class="post">

<marquee>
</div>
</body>
</html>


