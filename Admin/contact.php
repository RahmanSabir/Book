<?php 
session_start();
$connect = mysqli_connect('localhost','root');
mysqli_select_db($connect, 'sabir');

	$q="select * from contact";
	 $res=mysqli_query($connect,$q) or die("Can't Execute Query...");

	
	?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
		
</head>
<body style="background-image: url('norbert-toth-I1oL89qxefc-unsplash.jpg'); background-size: cover; ">

<h4 class="text-center p-3 text-light bg-success mt-3"><i class="fas fa-comment-dots mr-3"></i>Contact</h4>


<div id="page">
	
	<div id="content">
		<div class="post">
			<h1 class="title"></h1>
			<div class="entry">
			<div class="container">
      <div class="col-loh-12">
					<table class="table table-striped table-hover table-bordered bg-dark text-light text-center mt-5">
						<tr>
								<td class="text-light">SR.NO</u></b>
								<TD class="text-light">Contact id</u></b>
								<TD class="text-light">NAME</u></b>
								<TD class="text-light">EMAIL</u></b>
								<TD class="text-light">QUERY</u></b>
								<TD class="text-light">REPLY GIVEN</u></b>
								<TD class="text-light">REPLY</u></b>
								<TD class="text-light">DELETE</u></b>
							
						</tr>
						<?php
							$count=1;
							while($row=mysqli_fetch_assoc($res))
							{
							echo '<tr class="text-light">
										<td>'.$count.'
										<td>'.$row['con_id'].'
										<td>'.$row['con_nm'].'
										<td>'.$row['con_email'].'
										<td>'.$row['con_query'].'
										<td>'.$row['reply'].'
										<td><a href="reply_contact.php?id='.$row['con_id'].'"><i class="fas fa-reply mr-2"></i>Reply</a>
										<td><a href="process_del_contact.php?sid='.$row['con_id'].'"><img src="images/drop.png" ></a>
												
									
									</tr>';
									$count++;
							}
						?>

					</TABLE>
				
			</div>
			
		</div>
		
	</div>
	
	
	<div style="clear: both;">&nbsp;</div>
</div>

</body>
</html>
