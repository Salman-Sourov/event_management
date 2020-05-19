<?php 
session_start();
$connect = mysqli_connect("localhost", "root", "", "testing");

if(isset($_POST["add_to_cart"]))
{
	if(isset($_SESSION["shopping_cart"]))
	{
		$item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
		if(!in_array($_GET["id"], $item_array_id))
		{
			$count = count($_SESSION["shopping_cart"]);
			$item_array = array(
				'item_id'			=>	$_GET["id"],
				'item_name'			=>	$_POST["hidden_name"],
				'item_price'		=>	$_POST["hidden_price"],
				'item_quantity'		=>	$_POST["quantity"]
			);
			$_SESSION["shopping_cart"][$count] = $item_array;
		}
		else
		{
			echo '<script>alert("Item Already Added")</script>';
		}
	}
	else
	{
		$item_array = array(
			'item_id'			=>	$_GET["id"],
			'item_name'			=>	$_POST["hidden_name"],
			'item_price'		=>	$_POST["hidden_price"],
			'item_quantity'		=>	$_POST["quantity"]
		);
		$_SESSION["shopping_cart"][0] = $item_array;
	}
}

if(isset($_GET["action"]))
{
	if($_GET["action"] == "delete")
	{
		foreach($_SESSION["shopping_cart"] as $keys => $values)
		{
			if($values["item_id"] == $_GET["id"])
			{
				unset($_SESSION["shopping_cart"][$keys]);
				echo '<script>alert("Item Removed")</script>';
				echo '<script>window.location="silverwd.php"</script>';
			}
		}
	}
}

?>

<!DOCTYPE html>
<html>
	<head>
		<title>Weeding Silver Package</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800|Playfair+Display:,300, 400, 700" rel="stylesheet">
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/style.css">
	</head>
	
	<body>
	    <header role="banner">
      <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container">
          <a class="navbar-brand" href="index.php">Event Management</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarsExample05">
            <ul class="navbar-nav ml-auto pl-lg-5 pl-0">
              <li class="nav-item">
                <a class="nav-link active" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Services.php">About & Services</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle active" href="event.php" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Event</a>
                <div class="dropdown-menu" aria-labelledby="dropdown04">
                  <a class="dropdown-item" href="birthday.php">Birthday</a>
                  <a class="dropdown-item" href="weeding.php">Wedding</a>
                  <a class="dropdown-item" href="corporate.php">Corporate</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="admin_login.php">Admin</a>
              </li>
                  <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact</a>
              </li>           
            </ul>
          </div>
        </div>
      </nav>
    </header>
	
		<br />
		<div class="container">
			<br />
			<span class="section-heading">Weeding Silver Package Details</span><br />
			<br />
			
			
<span class="section-heading-left">Stage Design</span>
			<?php
				$query = "SELECT * FROM wd_stage ORDER BY id ASC";
				$result = mysqli_query($connect, $query);
				if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
					{
			?>			
			<form method="post" action="silverwd.php?action=add&id=<?php echo $row["id"]; ?>">
				<div class="col-md-4">
					<span class="section-heading-no">1</span>
					<div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;" align="center">
						<img src="images/<?php echo $row["image"]; ?>" class="img-responsive" /><br />

						<h4 class="text-info"><?php echo $row["name"]; ?></h4>
						
						<h4 class="text-info"><?php echo $row["details"]; ?></h4>
						
						<h4 class="text-danger"><?php echo $row["price"]; ?> Taka</h4>
						
						<input type="text" name="quantity" value="1" class="form-control" />

						<input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />

						<input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />

						<input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />
					</div>
				</div>
			</form>
			
			<?php
					}
				}
			?>
			
<span class="section-heading-left">Photography</span>
			<?php
				$query = "SELECT * FROM wd_photography ORDER BY id ASC";
				$result = mysqli_query($connect, $query);
				if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
					{
			?>			
			<form method="post" action="silverwd.php?action=add&id=<?php echo $row["id"]; ?>">
				<div class="col-md-4">
					<span class="section-heading-no">1</span>
					<div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;" align="center">
						<img src="images/<?php echo $row["image"]; ?>" class="img-responsive" /><br />

						<h4 class="text-info"><?php echo $row["name"]; ?></h4>

						<h4 class="text-info"> [ <?php echo $row["details"]; ?> ] </h4>
						
						<h4 class="text-danger"><?php echo $row["price"]; ?> Taka</h4>
						
						<input type="text" name="quantity" value="1" class="form-control" />

						<input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />

						<input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />

						<input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />
					</div>
				</div>
			</form>
			
			<?php
					}
				}
			?>
			
<span class="section-heading-left">Transport</span>
			<?php
				$query = "SELECT * FROM wd_transport ORDER BY id ASC";
				$result = mysqli_query($connect, $query);
				if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
					{
			?>			
			<form method="post" action="silverwd.php?action=add&id=<?php echo $row["id"]; ?>">
				<div class="col-md-4">
					<span class="section-heading-no">1</span>
					<div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;" align="center">
						<img src="images/<?php echo $row["image"]; ?>" class="img-responsive" /><br />

						<h4 class="text-info"><?php echo $row["name"]; ?></h4>

						<h4 class="text-info"> [ <?php echo $row["details"]; ?> Distance 20 KM ] </h4>
						
						<h4 class="text-danger"><?php echo $row["price"]; ?> Taka</h4>
						
						<input type="text" name="quantity" value="1" class="form-control" />

						<input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />

						<input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />

						<input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />
					</div>
				</div>
			</form>
			
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
						<th width="10%">ID</th>
						<th width="35%">Item Name</th>
						<th width="10%">Quantity</th>
						<th width="20%">Price</th>
						<th width="15%">Total</th>
						<th width="10%">Action</th>
					</tr>
					<?php
					if(!empty($_SESSION["shopping_cart"]))
					{
						$total = 0;
						foreach($_SESSION["shopping_cart"] as $keys => $values)
						{
					?>
					<tr>
						<td><?php echo $values["item_id"]; ?></td>
						<td><?php echo $values["item_name"]; ?></td>
						<td><?php echo $values["item_quantity"]; ?></td>
						<td><?php echo $values["item_price"]; ?> Taka</td>
						<td><?php echo number_format($values["item_quantity"] * $values["item_price"], 2);?> Taka</td>
						<td><a href="silverwd.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>
					</tr>
					<?php
							$total = $total + ($values["item_quantity"] * $values["item_price"]);
						}
					?>
					<tr>
						<td colspan="3" align="right">Total</td>
						<td align="right"><?php echo number_format($total, 2); ?> Taka</td>
						<td></td>
					</tr>
					<?php
					}
					?>
						
				</table>
			</div>
		</div>
	</div>
	<br />
     <style>
        a.promotion-btn {
  background: black;
  display: inline-block;
          align: center;
  text-align: center;
  text-decoration: none;
  border-radius: 4px;
  padding: 12px 24px;
            float: right;
}
    </style>
     <a href="payment.php" class="promotion-btn">Purchased</a>
    
	</body>
</html>
<?php
//If you have use Older PHP Version, Please Uncomment this function for removing error 

/*function array_column($array, $column_name)
{
	$output = array();
	foreach($array as $keys => $values)
	{
		$output[] = $values[$column_name];
	}
	return $output;
}*/
?>