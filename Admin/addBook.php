



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
  

    <title>Document</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<h2 class="text-center p-3 text-light bg-success mt-5">Adding Books</h2>
      
    <div id="page">
	
	<div id="content">
		<div class="post" style="margin-left:100px">
			<h1 class="title"></h1>
			<div class="entry" style="min-height:400px">
				<form  method='POST'>
						<b style="color:darkgreen">ADD Book </b>
							<br/>
							<input type='text' name= 'cat' size='25' placeholder="book ad">
<br>
              
							
							<input type='submit'  value='  ADD  '>
<?php

//session_start();
                  
$connect = mysqli_connect("localhost", "root" );

mysqli_select_db($connect, 'sabir');
              if(!empty($_POST))
	{
		$msg=array();
		if(empty($_POST['cat']))
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
	
		
			$cat=$_POST['cat'];

      
			
			$query="insert into product (product_image) values('$cat')";
			
			mysqli_query($connect,$query) or die("can't Execute...");
			
			
		}
	}
	else
	{
		
	}
		?>					
							<br><br>
				</form>
				<hr>
	
	<div style="clear: both;">&nbsp;</div>
</div>




</body>
</html> 