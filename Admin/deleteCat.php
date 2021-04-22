<?php

session_start();
                  
$connect = mysqli_connect("localhost", "root" );

mysqli_select_db($connect, 'sabir');

$id = $_GET['id'];

$q = " delete from category where cat_id=$id " ;

mysqli_query($connect , $q);

header ('location:display.php');

?>