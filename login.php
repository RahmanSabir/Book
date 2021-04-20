<?php
session_start();


$connect = mysqli_connect("localhost", "root" );

mysqli_select_db($connect, 'sabir');

if(isset($_POST['submit'])){
  $name = mysqli_real_escape_string($connect, $_POST['username']);
  $password = $_POST['password'];
 
  $sql = "SELECT * FROM user WHERE u_name='$name' ";
$result = mysqli_query($connect, $sql);
$row = mysqli_fetch_assoc($result);
$dbStoredPASSWORD = $row['password'];

if (password_verify ($password, $dbStoredPASSWORD)) {
  $_SESSION['u_name'] = $name;
  $_SESSION['u_id'] = $row['id'];
  header('location:index.php');
} else {
 header('location:login.php?message=1');
   $message =  'incorrect info';
}




 
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>

</head>

<body>

  <section class="container-fluid mt-5 mb-3">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
        </div>
        <div class="col-md-6">


          <form class="bg-secondary p-3" method="post">

            <div class="form-group row">
              <label for="username" class="col-sm-2 col-form-label">Username</label >
              <div class="col-sm-10">
                <input type="text" class="form-control" name="username" placeholder="Name" required>
              </div>
            </div>


            <div class="form-group row">
              <label for="password" class="col-sm-2 col-form-label">Password</label>
              <div class="col-sm-10 mb-2 ">
                <input type="password" class="form-control" name="password" placeholder="Password" required>
              </div>
            </div>
            <div class="form-group row">
              <div class="col-sm-12">
                <a class="btn btn-primary btn-success" href="user.php" role="button">signIn</a>

                <div class="pull-right">
                  <p class="pull-left text-light mt-4 ">Create an Account </p>

                  <a class="btn btn-primary btn-success" href="register.php" role="button">signUp</a>

                  <div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h3 class="modal-title text-center text-success" id="exampleModalLabel">Create An Accccccount</h3>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>


                        <form method="post" enctype="multipart/form-data">
                          <div class="modal-body">
                            <div class="row">
                              <div class="col-md-6">
                                <input type="text" name="name" class="form-control" placeholder="enter name">
                              </div>
                              <div class="col-md-6">
                                <input type="email" name="email" class="form-control" placeholder="enter email">
                              </div>
                            </div>
                            <br>
                            <div class="row">
                              <div class="col-md-6">
                                <input type="password" name="password" class="form-control" placeholder="enter password">
                              </div>
                              <div class="col-md-6">
                                <input type="text" name="number" class="form-control" placeholder="enter phone Number">
                              </div>
                            </div>
                            <br>
                            <div class="row">
                              <div class="col-md-6">
                                <input type="text" name="city" class="form-control" placeholder="enter city">
                              </div>
                              <div class="col-md-6">
                                <input type="text" name="address" class="form-control" placeholder="enter address">
                              </div>
                            </div>
                            <br>
                            <br>
                            <button type="submit" class="btn btn-primary" name="save">SAVE</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>

                </div>
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



  <footer class="footer text-center text-light container-fluid bg-dark">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="info">
            <ul class="nav nav-pills">
              <li><a href="" class="text-white"><i class="fa fa-phone"></i> +2 95 01 88 821</a></li>
              <li><a href="" class="text-white"><i class="fa fa-envelope"></i> info@domain.com</a></li>
            </ul>
          </div>

        </div>
        <div class="col-md-6">
          <div class="pull-right">
            <button class="btn top_btn"><i class="fa fa-facebook"></i></button>
            <button class="btn top_btn"><i class="fa fa-twitter"></i></button>
            <button class="btn top_btn"><i class="fa fa-trash"></i></button>
            <button class="btn top_btn"><i class="fa fa-close"></i></button>
            <button class="btn top_btn"><i class="fa fa-folder"></i></button>
          </div>
        </div>
      </div>
    </div>
  </footer>


</body>

</html>