

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Cart</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

</head>
<body  style="background-image: url('norbert-toth-I1oL89qxefc-unsplash.jpg'); background-size: cover; ">
    

    <div class="container">
        <div class="col-loh-12">
  <br><br>
  <h1 class=" bg-success text-warning   text-center"> Displaying Order data of Users</h1>
  <br>
  
  <table class="table table-striped table-hover table-bordered">
  
  <tr class="bg-dark text-white text-center">
      <th> Cart Id </th>
      <th> User Id </th>
      <th> product Id</th>
      <th> Quantity</th>
    
      <th> Delete Order </th>
  </tr>
  
  <?php
   
   session_start();
                    
  $connect = mysqli_connect("localhost", "root" );
  
  mysqli_select_db($connect, 'sabir');
  
   
    
     $q= "select * from cart ";
  
     $query = mysqli_query($connect , $q);
  
    while($res = mysqli_fetch_array($query)){
  
  ?>
  
  <tr  class="  text-white text-center">
      <td class="bg-dark"> <?php echo $res['cart_id']; ?> </td>
      <td class="bg-dark"> <?php echo $res['user_id']; ?> </td>
      <td class="bg-dark"> <?php echo $res['product_id']; ?> </td>
      <td class="bg-dark"> <?php echo $res['quantity']; ?> </td>
      
      <td> <button class="btn-danger btn"> <a href="" class="text-white"><i class="fas fa-trash-alt mr-1"></i> Delete Category</a>
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