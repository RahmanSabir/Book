<?php
session_start();
$connect = mysqli_connect("localhost", "root" );
  
 mysqli_select_db($connect, 'sabir');

$id =$_GET['id']; // get id through query string

$qry = mysqli_query($connect,"select * from category where cat_id='$id'"); // select query

$data = mysqli_fetch_array($qry); // fetch data

if(isset($_POST['update'])) // when click on Update button
{
    $fullname = $_POST['cattitle'];
 
	
    $edit = mysqli_query($connect,"update category set cat_title='$fullname' where cat_id='$id'");
	
    if($edit)
    {
        mysqli_close($connect); // Close connection
header("location:display.php");// redirects to all records page
        exit;
    }
    else
    {
        echo mysqli_error($edit);
    }    	

}
?>

<h3>Update Data for category</h3>

<form method="POST">
  
  <input type="text" name="cattitle" value="<?php echo $data['cat_title'] ?>" placeholder="Enter" Required>
  <input type="submit" name="update" value="Update">
</form>




<?php

$connect = mysqli_connect("localhost", "root" );
  
 mysqli_select_db($connect, 'sabir');

$ids =$_GET['id']; // get id through query string

$qryy = mysqli_query($connect,"select * from product where product_id='$ids'"); // select query

$dataa = mysqli_fetch_array($qryy); // fetch data

if(isset($_POST['updatee'])) // when click on Update button
{
    $fullnamee = $_POST['catid'];
 
	
    $editt = mysqli_query($connect,"update product set cat_id='$fullnamee' where product_id='$ids'");
	
    if($editt)
    {
        mysqli_close($connect); // Close connection
header("location:display.php");// redirects to all records page
        exit;
    }
    else
    {
        echo mysqli_error($editt);
    }    	

}
?>

<h3>Update Data for book</h3>

<form method="POST">
  
  <input type="text" name="catid" value="<?php echo $dataa['cat_id'] ?>" placeholder="Enter" Required>
  <input type="submit" name="updatee" value="Update">
</form>