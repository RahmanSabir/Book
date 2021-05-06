



<?php

session_start();
                  
$connect = mysqli_connect("localhost", "root" );

mysqli_select_db($connect, 'sabir');

$id = $_GET['id'];

$q = " delete from user where user_id=$id " ;

mysqli_query($connect , $q);

header ('location:view_users.php');

?>