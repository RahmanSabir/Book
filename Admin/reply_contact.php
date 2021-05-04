
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Reply</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>


  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body  style="background-image: url('norbert-toth-I1oL89qxefc-unsplash.jpg'); background-size: cover; ">
    

  <div class="container">
      <div class="col-loh-12">
<br><br>
<h1 class=" bg-success text-warning   text-center"> Displaying Reply Table</h1>
<br>
<div class="container">
      <div class="col-loh-12">

<table class="table table-striped table-hover table-bordered">

<tr class="bg-dark text-white text-center">
    
    <th class="text-light text-cenetr"> Contact ID </th>
    <th> Replied </th>
    <th> Reply </th>
    <th> Delete </th>
</tr>

<?php
 
 session_start();
                  
$connect = mysqli_connect("localhost", "root" );

mysqli_select_db($connect, 'sabir');

 
  
   $q= "select * from contact ";

   $query = mysqli_query($connect , $q);

  while($row = mysqli_fetch_array($query)){



echo '<tr class="bg-dark text-center text-light">
										<td>'.$row['con_id'].'
										<td>'.$row['reply'].'
							
                    <td><a href="process_reply_contact.php?id=' .$row['con_id'].'"><i class="fas fa-reply mr-2"></i>Reply </a>

								
										<td><a href="process_del_contact.php?sid='.$row['con_id'].'"><img src="images/drop.png" ></a>


                    </tr>';
   


  }
  ?>
</table>

      </div>
  </div>