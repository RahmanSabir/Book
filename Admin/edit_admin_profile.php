<?php
session_start();
$connect = mysqli_connect("localhost", "root" );
  
 mysqli_select_db($connect, 'sabir');

$id =$_GET['id']; // get id through query string

$qry = mysqli_query($connect,"select * from adminlist where admin_id='$id'"); // select query

$data = mysqli_fetch_array($qry); // fetch data

if(isset($_POST['update'])) // when click on Update button
{
    $fullname = $_POST['aname'];
    $fullnameee = $_POST['aemail'];
    $fullnamee = $_POST['apass'];
 
	
    $editt = mysqli_query($connect,"update adminlist set username='".$fullname."' , email='".$fullnameee."' , password='".$fullnamee."'  where admin_id='$id'  ");
	
    if($editt)
    {
        mysqli_close($connect); // Close connection
header("location:display_admin_profile.php");// redirects to all records page
        exit;
    }
    else
    {
        echo mysqli_error($editt);
    }    	

}
?>

<h3>Update Data for Admin Profile</h3>

<form method="POST">
  
  <input type="text" name="aname" value="<?php echo $data['username'] ?>" placeholder="Enter" Required>
  <input type="text" name="aemail" value="<?php echo $data['email'] ?>" placeholder="Enter" Required>
  <input type="text" name="apass" value="<?php echo $data['password'] ?>" placeholder="Enter" Required>
  <input type="submit" name="update" value="Update">
</form>




