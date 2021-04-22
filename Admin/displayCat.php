
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

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
<h1 class="text-warning text-center"> Displaying table data for Category</h1>
<br>

<table class="table table-striped table-hover table-bordered">

<tr class="bg-dark text-white text-center">
    <th> Category Id </th>
    <th> Category Name</th>
    <th> Add Category </th>
    <th> Delete Category </th>
    <th> Update Category </th>
</tr>

<?php
 
 session_start();
                  
$connect = mysqli_connect("localhost", "root" );

mysqli_select_db($connect, 'sabir');

 
  
   $q= "select * from category ";

   $query = mysqli_query($connect , $q);

  while($res = mysqli_fetch_array($query)){

?>

<tr  class="text-center">
    <td> <?php echo $res['cat_id']; ?> </td>
    <td> <?php echo $res['cat_title']; ?> </td>
    <td> <button class="btn-success btn"> <a href="addCat.php?id= <?php echo $res['cat_id']; ?>" class="text-white"> Add Category </a>
    </button></td> 
    <td> <button class="btn-danger btn"> <a href="deleteCat.php?id= <?php echo $res['cat_id']; ?>" class="text-white"> Delete Category</a>
    </button> </td> 
 <td> <button class="btn-primary btn"> <a href="updateCat.php?id= <?php echo $res['cat_id']; ?>" class="text-white"> Update Category </a>
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