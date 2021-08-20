
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Hepta+Slab&display=swap" rel="stylesheet">
     <link rel="stylesheet" type="text/css" href="engine1/style.css" />
	<script type="text/javascript" src="engine1/jquery.js"></script>
</head>
<style>
	.image{
		height:100px;
		width:50%;
		margin-left: 20px;
		
	}
	body
	{
		background-image: url("images/55.jpg");
	}
</style>
<body>
<div class="container">
	<div class="row" style="height: 100px;width:100%;">
	<div class="col-sm-12">
	
	<h3 style="text-align: center; color: #ffffff;"><img src="images/basket.jpg" style="height: 100px;width:150px;border-radius: 50%;"><b><u>GROCMART</u></b></h3>
	</div><!--header div closed-->
	</div><!--row div closed-->
</div><!--container div closed-->
<nav class="navbar navbar-default" style="background-color: #ffffff;">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"><b>GROCMART</b></a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php">Home</a></li>
      <li><a href="feedback.php">feedback</a></li>
      <li><a href="contact.php">contact us</a></li>
    </ul>
  </div>
</nav>
<?php
include("config.php");
Session_start();
if(isset($_GET['id']))
{
	$id=$_GET['id'];
	$_SESSION['id']=$id;
	$sql="select * from quantity_detail where id='$id'";
	$result=mysql_query($sql)or die("Error:database are not connected");
	if(mysql_num_rows($result)>0)
	{
		while($rows=mysql_fetch_array($result))
		{
			$id=$rows['id'];
			$quantity=$rows['quantity'];
			$price=$rows['price'];
			$total=$rows['total'];
			$shipping=$rows['shipping'];
			$grand_total=$rows['grand_total'];
			//$standard=$rows['standard'];
			//$file=$rows['file'];
			$_SESSION['quantity']=$quantity;
			$_SESSION['price']=$price;
			$_SESSION['total']=$total;
			$_SESSION['shipping']=$shipping;
			$_SESSION['grand_total']=$grand_total;
			//$_SESSION['standard']=$standard;
			//$_SESSION['file']=$file;
			
		}
	}
}

?>

<div class="row">
<div class="col-sm-8">
<h2 style="color: #ffffff;"><?php echo $_SESSION['price'];?></h2>
<h2 style="color: #ffffff;"><?php echo $_SESSION['quantity'];?></h2>
<h2 style="color: #ffffff;"><?php echo $_SESSION['shipping'];?></h2>
<h2 style="color: #ffffff;"><?php echo $_SESSION['shipping'];?></h2>
<h2 style="color: #ffffff;"><?php echo $_SESSION['grand_total'];?></h2>


</div>
</div>
</div>
</body>
</html>