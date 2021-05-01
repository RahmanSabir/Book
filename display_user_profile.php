
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    

  <div class="container">
      <div class="col-loh-12">
<br><br>
<h1 class="text-warning text-center"> User Profile</h1>
<br>

<table class="table table-striped table-hover table-bordered">

<tr class="bg-dark text-white text-center">
    <th> User Id </th>
    <th> User Name</th>
    <th> User Password </th>
    <th> Update Category </th>
</tr>

<?php
 
 session_start();
                  
$connect = mysqli_connect("localhost", "root" );

mysqli_select_db($connect, 'sabir');

 
  
   $q= "select * from user ";

   $query = mysqli_query($connect , $q);

  while($res = mysqli_fetch_array($query)){

?>

<tr  class="text-center">
    <td> <?php echo $res['u_id']; ?> </td>
    <td> <?php echo $res['u_name']; ?> </td>
    <td> <?php echo $res['u_password']; ?> </td>
   
   
 <td> <button class="btn-primary btn"> <a href="edit_user_profile.php?id= <?php echo $res['u_id']; ?>" class="text-white"> Update Category </a>
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