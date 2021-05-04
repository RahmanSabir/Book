<?php
session_start();
$connect = mysqli_connect("localhost", "root" );
  
 mysqli_select_db($connect, 'sabir');

$id =$_GET['id']; // get id through query string

$qry = mysqli_query($connect,"select * from contact where con_id='$id'"); // select query

$data = mysqli_fetch_array($qry); // fetch data

if(isset($_POST['update'])) // when click on Update button
{
    $fullname = $_POST['query'];
 
	
    $edit = mysqli_query($connect,"update contact set reply='$fullname' where con_id='$id'");
	
    if($edit)
    {
        mysqli_close($connect); // Close connection
header("location:contact.php");// redirects to all records page
        exit;
    }
    else
    {
        echo mysqli_error($edit);
    }    	

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <title> Update or Edit</title>
</head>
<body style="background-image: url('norbert-toth-I1oL89qxefc-unsplash.jpg'); background-size: cover; ">
    

<h1 class="bg-success text-light text-center mt-5"> Update Data for Category</h1>

<br>



<form method="POST">
  
  <input type="text" name="query" value="<?php echo $data['reply'] ?>" placeholder=" Enter Category name" Required>
  <input class="btn-primary" type="submit" name="update" value="Update">
</form>