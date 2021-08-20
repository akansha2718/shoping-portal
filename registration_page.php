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
		background-image: url("images/56.jpg");
	}
	.name
	{
		color: #ffffff;
	}
</style>
<body>

	<div class="row" style="height: 100px;width:100%;">
	<div class="col-sm-12">
	
	<h3 style="text-align: center; color: #ffffff;"><img src="images/basket.jpg" style="height: 100px;width:150px;border-radius: 50%;"><b><u>GROCMART</u></b></h3>
	</div><!--header div closed-->
	</div><!--row div closed-->

<nav class="navbar navbar-default" style="background-color: #ffffff;">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"><b>GROCMART</b></a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php">Home</a></li>
      <li><a href="feedback.php">feedback</a></li>
      <li><a href="#">contact us</a></li>
     
    </ul>
  </div>
</nav>
	<div class="row">
	<div class="col-sm-6">
	<form method="POST" action="">
  <div class="form-group">
    <label for="name" class="name">Name:</label>
    <input type="text" class="form-control" required="" name="name">
  </div>
  <div class="form-group">
    <label for="pwd" class="name">Email</label>
    <input type="email" class="form-control" required="" name="email">
  </div>
  <div class="form-group">
    <label for="pwd" class="name">Mobile Number</label>
    <input type="text" class="form-control" required="" name="mobile_no">
  </div>
  <div class="form-group">
    <label for="pwd" class="name">Country</label>
    <input type="text" class="form-control" required="" name="country">
  </div>
  <div class="form-group">
    <label for="pwd" class="name">Password</label>
    <input type="password" class="form-control" required="" name="password">
  </div>
  <div class="checkbox">
    <label><input type="checkbox" class="name"> Remember me</label>
  </div>
  <button type="submit" class="btn btn-success" name="submit">Submit</button>
</form>
<?php
include "config.php";
if(isset($_POST['submit']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$mobile_no=$_POST['mobile_no'];
	$password=$_POST['password'];
	$sql="insert into registration values('','$name','$email','$mobile_no','$country','$password')";
	$result=mysql_query($sql)or die ("database are not work properly");
	?>
	<script>
	alert('your data was send sucessfully');
	</script>
	<?php
	}
	?>
}
?>
</div><!--form div closed-->
	</div><!--row div closed-->
  
</body>
</html>
<?php

?>