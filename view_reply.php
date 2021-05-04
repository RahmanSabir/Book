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
<body style="background-image: url('img/norbert-toth-I1oL89qxefc-unsplash.jpg'); background-size: cover; ">


<div id="page">
	<div id="content">
		<div class="post">
			<h1 class="text-light bg-success text-warning text-center mt-4">View Reply</h1>

			<br>
			<div class="container">
      <div class="col-loh-12">
				
					<table class="table table-striped table-hover table-bordered bg-dark text-light text-center mt-5">
						<tr>
								<td class="text-light">SR.NO</u></b>
								<TD  class="text-light">NAME</u></b>
								<TD  class="text-light">EMAIL</u></b>
								<TD  class="text-light">QUERY</u></b>
								<TD  class="text-light">REPLY</u></b>
								<TD  class="text-light">DELETE</u></b>
							
						</tr>
						<?php
							$count=1;
							while($row=mysqli_fetch_assoc($res))
							{
							echo '<tr class="text-light">
										<td>'.$count.'
										<td>'.$row['con_nm'].'
										<td>'.$row['con_email'].'
										<td>'.$row['con_query'].'
										<td>'.$row['reply'].'
									
										<td><a href="process_del_view_reply.php?sid='.$row['con_id'].'"><img src="img/drop.png" ></a>	
									
									</tr>';
									$count++;
							}
						?>

					</TABLE>
				
	  </div>
			</div>
		</div>
	</div>
</div>

	
	

	<div style="clear: both;">&nbsp;</div>
</div>


</body>
</html>
