<?php
require('includes/config.php');

	if(!empty($_POST))
	{
		$msg=array();
		if(empty($_POST['b_nm'])   || empty($_POST['b_price']))
		{
			$msg[]="ENTER ALL THE FIELDS";
			header("location:addbook.php");
		}
		if(!(is_numeric($_POST['b_price'])))
		{
			$msg[]="Price must be in Numeric  Format...";
		}
		
		

	
		
		
		if(!empty($msg))
		{
			echo '<b>Error:-</b><br>';
			
			foreach($msg as $k)
			{
				echo '<li>'.$k;
			}
		}
		else
		{
			move_uploaded_file($_FILES['b_img']['tmp_name'],"../upload_image/".$_FILES['b_img']['b_nm']);
			$b_img = "upload_image/".$_FILES['b_img']['b_nm'];	
			
		
			$b_nm=$_POST['b_nm'];
			$b_subcat=$_POST['b_subcat'];
			$b_price=$_POST['b_price'];
			$b_img=$_POST['b_img'];
			
			
			
		
			
			$query="insert into book(b_nm,b_subcat,b_price,b_img)
			values('$b_nm','$b_subcat',$b_price,'$b_img')";
			
			mysqli_query($conn,$query) or die($query."Can't Connect to Query...");
			header("location:admin.php");
		
		}
	}
	else
	{
		header("location:admin.php");
	}
?>
	
	