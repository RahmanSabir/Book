<?php

session_start();
$connect = mysqli_connect("localhost", "root", "", "sabir");





?>
<!DOCTYPE html>
<html>

<head>
	<title>Wishlist </title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>

<body>
	<br />
	<div class="container">
		<br />
		<br />
		<br />
		<h3 align="center">Shoping Cart With PHP And MySql </a></h3><br />
		<br /><br />
		<?php
		$query = "SELECT * FROM product ORDER BY product_id ASC";
		$result = mysqli_query($connect, $query);
		if (mysqli_num_rows($result) > 0) {
			while ($row = mysqli_fetch_array($result)) {
		?>

				<div class="col-md-4">
					<form method="post" action="wishlist.php?action=add&id=<?php echo $row["product_id"]; ?>">
						<div style="border:3px solid #5cb85c; background-color:whitesmoke; border-radius:5px; padding:16px;" align="center">
							<img src="img/<?php echo $row["product_image"]; ?>" class="img-responsive" /><br />

							<h4 class="text-info"><?php echo $row["product_name"]; ?></h4>

							<h4 class="text-danger">$ <?php echo $row["product_price"]; ?></h4>

							<input type="submit" name="add_to_wishlist" style="margin-top:5px;" class="btn btn-success" value="Add to Wishlist" />
<?php
                 
?>
						</div>
					</form>
				</div>
		<?php
			}
		}
		?>

		<div style="clear:both"></div>
		<br />
		<h3>Order Details</h3>
		<div class="table-responsive">
			<table class="table table-bordered">
				<tr>
					<th width="40%">Product Name</th>

					<th width="20%">Price</th>
					
					<th width="5%">Action</th>
				</tr>



			</table>

			<div class="col-sm-12 col-md-6 text-right">
					<a href="user.php" class="btn btn-md btn-block btn-success text-uppercase"> Back </a>
					</div>
			</div>
	</div>
	
</body>
</html>