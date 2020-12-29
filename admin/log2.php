<?php session_start();

require('config.php');
	
	if(!empty($_POST))
	{
		$msg="";
		
		if(empty($_POST['username']))
		{
			$msg[]="No such User";
			header("location:log2.php");
		}
		
		if(empty($_POST['password']))
		{
			
			$msg[]="Password Incorrect........";
			header("location:log2.php");
			
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
			
			
	
			
			$username=$_POST['username'];
			
			$q="select * from user where username='$username'";
			
			$res=mysqli_query($conn,$q) or die("wrong query");
			
			$row=mysqli_fetch_assoc($res);
			
			if(!empty($row))
			{
				if($_POST['password']==$row['password'])
				{
					$_SESSION=array();
					$_SESSION['username']=$row['username'];
					$_SESSION['userid']=$row['password'];
					$_SESSION['status']=true;
					
					if($_SESSION['username']!="admin")
					{
						header("location:home3.php");
					}
					else
					{
						header("location:admin/index.php");
					}
				}
				
				else
				{
					
					echo 'Incorrect Password....';
					header("location:log2.php");
				}
			}
			else
			{
				echo 'Invalid User';
				header("location:log2.php");
			}
		}
	
	}
	else
	{
		header("location:log2.php");
	}
			
?>