<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Users</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body  style="background-image: url('norbert-toth-I1oL89qxefc-unsplash.jpg'); background-size: cover; ">
    

  <div class="container">
      <div class="col-loh-12">
<br><br>
<h1 class=" bg-success text-warning   text-center"> Displaying table data for Users</h1>
<br>

<table class="table table-striped table-hover table-bordered">

<tr class="bg-dark text-white text-center">
    <th> User Id </th>
    <th> User Name</th>
    <th> Email </th>
    <th> Password </th>
  

    <th> Delete Category </th>
</tr>



<?php
 
 session_start();
                  
$connect = mysqli_connect("localhost", "root" );

mysqli_select_db($connect, 'sabir');

 
  
   $q= "select * from user ";

   $query = mysqli_query($connect , $q);

  while($res = mysqli_fetch_array($query)){

?>

<tr  class="  text-white text-center">
    <td class="bg-dark"> <?php echo $res['user_id']; ?> </td>
    <td class="bg-dark"> <?php echo $res['username']; ?> </td>
    <td class="bg-dark"> <?php echo $res['email']; ?> </td>
    <td class="bg-dark"> <?php echo $res['password']; ?> </td>
   
    <td> <button class="btn-danger btn"> <a href="delete_user.php?id= <?php echo $res['user_id']; ?>" class="text-white"><i class="fas fa-trash-alt mr-1"></i> Delete User</a>
    </button> </td> 
 
    
 
</tr>

<?php 
  }
  ?>
</table>




      </div>
  </div>
</body>
</html>
