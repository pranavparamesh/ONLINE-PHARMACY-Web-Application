<?php
	require('config.php');

	
	if(!empty($_POST))
	{
		$msg="";
		
		if(empty($_POST['username']) || empty($_POST['mail']) || empty($_POST['phone'])||empty($_POST['password'])||empty($_POST['cpwd']) )
		{
			$msg="<li><h1>PLEASE FILL ALL DETAILS!!!!!<h1>";
		}
		
		if($_POST['password']!=$_POST['cpwd'])
		{
			$msg.="<li>Please Enter your Password Again.....";
		}
		if(!is_numeric($_POST['phone'])&&strlen($_POST['phone'])>10)
		{
			$msg.="<li>Please Enter your Phone Again.....";
		}
		
		
		
		if(strlen($_POST['password'])>10)
		{
			$msg.="<li>Please Enter Your Password in limited Format....";
		}
		
		if(is_numeric($_POST['username']))
		{
			$msg.="<li>Name must be in String Format...";
		}
		
		if($msg!="")
		{
			header("location:reg.php?error=".$msg);
		}
		else
		{
			$username=$_POST['username'];
			$password=$_POST['password'];
			$cpwd=$_POST['cpwd'];
			$mail=$_POST['mail'];
			$phone=$_POST['phone'];
			
			
			$query="insert into user(username,password, cpwd,mail,phone)
			values('$username','$password','$cpwd','$mail','$phone')";
			
			mysqli_query($conn,$query) or die("Can't Execute Query...");
			header("location:login.html?ok=1");
		}
	}
	else
	{
		header("location:loglog.html");
	}
?>