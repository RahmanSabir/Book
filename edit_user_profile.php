<?php
session_start();
$connect = mysqli_connect("localhost", "root" );
  
 mysqli_select_db($connect, 'sabir');

$id =$_GET['id']; // get id through query string

$qry = mysqli_query($connect,"select * from user where u_id='$id'"); // select query

$data = mysqli_fetch_array($qry); // fetch data

if(isset($_POST['update'])) // when click on Update button
{
    $fullname = $_POST['uname'];
    $fullnamee = $_POST['upass'];
 
	
    $editt = mysqli_query($connect,"update user set u_name='".$fullname."' , u_password='".$fullnamee."'  where u_id='$id'  ");
	
    if($editt)
    {
        mysqli_close($connect); // Close connection
header("location:display_user_profile.php");// redirects to all records page
        exit;
    }
    else
    {
        echo mysqli_error($editt);
    }    	

}
?>

<h3>Update Data for User Profile</h3>

<form method="POST">
  
  <input type="text" name="uname" value="<?php echo $data['u_name'] ?>" placeholder="Enter" Required>
  <input type="text" name="upass" value="<?php echo $data['u_password'] ?>" placeholder="Enter" Required>
  <input type="submit" name="update" value="Update">
</form>




