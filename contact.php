<?php session_start();
require('db_connect.php');
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
</head>

<body style="background-image: url('img/norbert-toth-I1oL89qxefc-unsplash.jpg'); background-size: cover; ">
			
<h4 class="text-center p-3 text-light bg-success mt-3"><i class="fas fa-comment-dots mr-3"></i>Contact</h4>


					<div id="page">
				
							<div class="text-light ml-5" id="content">
								<div class="post">
									<h1 class="title">Contact From User</h1>
									<div class="container">
      								<div class="col-loh-12">
									<div class="entry" >
									
										<form action="process_contact.php" method="POST">
												

											<br>Name :<br>
												<input type='text' name='nm' size=35 placeholder="  Enter Name">
												<br>
												
												E-mail ID:<br>
												<input type='text' name='email' size=35 placeholder="  Enter Email">
												<br>
												
												Query:<br>
												<textarea cols="40" rows="10" name='query' placeholder="  Write Here"></textarea>
												<br>

												<input class="btn-success"  type='submit' name='btn' value='   OK   '  >

												
										</form>
									
									</div>
									
								</div>
								
							</div>

						<br>

               
						<button class="btn-primary btn ml-5"> <a href="view_reply.php" class="text-white"> <i class="fas fa-eye mr-1"></i>View reply </a>
    </button> </td>     
 
					
						
						<div style="clear: both;">&nbsp;</div>
					</div>

		
</body>
</html>
