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

  <div class="col-lg-6 m-auto"
  <form method = "post">
   <br><br> <div class="card">
      <div class="card header bg-dark">
        <h1 class="text-white text-center"> UPDATE operation</h1>
      </div> <br>
      <label> Category name</label>
      <input type="text" name="categoryname" class="form-control"> <br>

    
      <button class="btn btn-success" type="submit" name="submit"> Submit </button>

      <?php
$connect = mysqli_connect("localhost", "root");
mysqli_select_db($connect, 'sabir');

if(isset($_POST['submit'])){

    $id = $_GET['id'];
    $categoryname=$_GET['cat'];
    
     $q= " update category set cat_id=$id , cat_title='$categoryname' where cat_id=$id";
  
     $query = mysqli_query($connect , $q);

     header('location:display.php');
}
?>
<br>
    </div>
  </form>
</div>

<br> <br>




</body>
</html>