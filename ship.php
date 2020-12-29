<?php
 session_start();
 extract($_POST);
 extract($_SESSION);
 include("functions/function.php");
 
  
					

 
require('includes/config.php'); 	
	//echo $uid;
	if(isset($submit))
	{
	$query="insert into shipping_details(name,address,postal_code,city,state,phone,b_id) values('$name','$address','$postal_code','$city','$state','$phone','')";
	
	$res=mysqli_query($conn,$query) or die("Can't Execute Query...");
	header("home3.php");
	}


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset ="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" type="text/css" href="ship.css">
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

<form id="contact" action="home3.php" method="get">
    <h1>SHIPPING DETAILS</h1><br>
    <fieldset>
		 <input type="text" name="name" placeholder="username:" required ="required">
	</fieldset>
	
    <fieldset>
		<input type="text" name="address" placeholder="address" required ="required">
     
    </fieldset>
	
    <fieldset>
		<input type="text" name="city" placeholder="CITY" required ="required">
   
    </fieldset>
	
	<fieldset>
		<input type="text" name="state" placeholder="State" required ="required">
    </fieldset>
	
	<fieldset>
		<input type="text" name="postal_code" placeholder="POSTAL CODE"  maxlength="6"	 required ="required">
    </fieldset>
	
	<fieldset>
		  <input type="text" name="phone" placeholder="Phone:"  maxlength ="10"  required ="required">
    </fieldset>
	
	
	
    <fieldset>
	  <input class="button" name="submit" id="submit"  tabindex="5" value="Confirm & Proceed" type="submit" onclick="ord()"> 
		
    </fieldset>
	




</section>

</body>
</html>
<script type="text/javascript">

function ord()
{
	alert("Thank you for shopping !!!!!  Your order will be delivered");
}

</script>