<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <title>Document</title>
</head>
<body>
  <h2 class="text-center p-3 text-light bg-success mt-5">Delete Books</h2>
    
  <form  method='POST'>
							
							
							
									
							
							
              <b style="color:darkgreen">DELETE Book </b>						
                <br>
                  <select name="del">
                    <?php
                    
                   
                    session_start();
                    
                    $connect = mysqli_connect("localhost", "root" );
                    
                    mysqli_select_db($connect, 'sabir');
        
                        $query="select * from product ";
        
                        $res=mysqli_query($connect,$query);
                        
                        while($row=mysqli_fetch_assoc($res))
                        {
                          echo "<option>".$row['product_image'];
                        }
        
                        
                    ?>
                  </select>
              
                
                <input type='submit' value='  DELETE  '>
  <?php
    
                    
    $connect = mysqli_connect("localhost", "root" );
    
    mysqli_select_db($connect, 'sabir');
  
                if(!empty($_POST))
    {
      $msg=array();
      if(empty($_POST['del']))
      {
        $msg[]="Please full fill all requirement";
      }
      
      if(!empty($msg))
      {
        echo '<b>Error:-</b><br>';
        
        foreach($msg as $k)
        {
          echo '<li>'.$k;
        }
      }
      else
      {
      
        
      
        $delcat=$_POST['del'];
        
        $query="delete from product where product_image  ='$delcat' ";
      
        mysqli_query($connect,$query) or die("can't Execute...");
        
        
      //	header("location:category.php");
      }
    }
    else
    {
      //header("location:index.php");
    }
    ?>
  </form>




    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>