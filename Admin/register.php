<?php 

$connect = mysqli_connect('localhost','root');
mysqli_select_db($connect, 'sabir');

?>
<?php
if($_SERVER['REQUEST_METHOD'] == "POST"){
    if (isset($_POST['username'])  &&  isset($_POST['password'])  ) {
      $query = "insert into adminlist (username,email,password) values('{$_POST['username']}' ,'{$_POST['email']}', '{$_POST['password']}') ";
      $result = mysqli_query($connect, $query);
    }
    if($result){
      echo "<h3 class='text-center'>You are registered successfully.</h3>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  

  <title>Registration</title>
</head>

<body style="background-image: url('norbert-toth-I1oL89qxefc-unsplash.jpg'); background-size: cover; ">

  <section class="container-fluid mt-5 mb-3">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
        </div>
        <div class="col-md-6">


          <form class="bg-secondary p-3" method="post">

            <div class="form-group row">
              <label for="username" class="col-sm-2 col-form-label">Username</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" name="username" placeholder="Enter name">
              </div>
            </div>

            <div class="form-group row">
              <label for="password" class="col-sm-2 col-form-label">email</label>
              <div class="col-sm-10">
                <input type="email" class="form-control" name="email" placeholder="Enter email">
              </div>
            </div>

            <div class="form-group row">
              <label for="password" class="col-sm-2 col-form-label">Password</label>
              <div class="col-sm-10">
                <input type="password" class="form-control" name="password" placeholder="Enter Password">
              </div>
            </div>
            <div class="form-group row">
              <div class="col-sm-12">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </div>
            <div class="form-group row">
              <div class="col-sm-12">
                <a href="adminlogin.php"  class="btn btn-success"><i class="fas fa-sign-in-alt mr-1"></i></button>Login</a>
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="col-md-3">
      </div>
    </div>
    </div>


  </section>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>