<?php
require('db_connect.php');	
	
	if(!empty($_POST))
	{
		$msg=array();
		
		if(empty($_POST['nm']) || empty($_POST['email']) || empty($_POST['query']))
		{
			$msg[]="Please full fill all requirement";
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
			$nm=$_POST['nm'];
			$email=$_POST['email'];
			$question=$_POST['query'];
			
			
			$query="insert into contact(con_nm,con_email,con_query)
			values('$nm','$email','$question')";
			
			mysqli_query($connect,$query) or die("Can't Execute Query...");
			
			header("location:user.php");
		}
	}
	else
	{
		header("location:user.php");
	}
?>