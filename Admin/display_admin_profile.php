
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Profile</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    

  <div class="container">
      <div class="col-loh-12">
<br><br>
<h1 class="text-warning text-center"> Admin Profile</h1>
<br>

<table class="table table-striped table-hover table-bordered">

<tr class="bg-dark text-white text-center">
    <th> Admin Id </th>
    <th> Name</th>
    <th> Email</th>
    <th> Password </th>
    <th> Action </th>
</tr>

<?php
 
 session_start();
                  
$connect = mysqli_connect("localhost", "root" );

mysqli_select_db($connect, 'sabir');

 
  
   $q= "select * from adminlist ";

   $query = mysqli_query($connect , $q);

  while($res = mysqli_fetch_array($query)){

?>

<tr  class="text-center">
    <td> <?php echo $res['admin_id']; ?> </td>
    <td> <?php echo $res['username']; ?> </td>
    <td> <?php echo $res['email']; ?> </td>
    <td> <?php echo $res['password']; ?> </td>
   
   
 <td> <button class="btn-primary btn"> <a href="edit_admin_profile.php?id= <?php echo $res['admin_id']; ?>" class="text-white"><i class="fas fa-edit"></i> Update Admin Profile </a>
    </button> </td> 
 
</tr>

<?php 
  }
  ?>
</table>

      </div>
  </div>

  <br><br>

    

</body>
</html>