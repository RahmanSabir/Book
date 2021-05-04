<?php

$connect = mysqli_connect('localhost','root');
mysqli_select_db($connect, 'sabir');
			
			$query="delete from contact where con_id =".$_GET['sid'];
		
			mysqli_query($connect,$query) or die("can't Execute...");
			
			
			header("location:contact.php");

?>