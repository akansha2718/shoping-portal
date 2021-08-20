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
<div class="row">
<div class="col-sm-6" style="border: solid 2px;background-color:#fc3a0a;">
<h1>Give your feedback about our product and services</h1>
<form method="POST" action="">

  <div class="form-group">
  <label>Name:</label>
    <input type="name" class="form-control" name="name">
 </div>
 <div class="form-group">
    <label>Date:</label>
    <input type="date" class="form-control" name="date">
  </div>
  <div class="form-group">
  <lable>Description</lable>
  <textarea style="height: 100px;width:300px;" name="des"></textarea>
  </div>
  <div class="checkbox">
    <label><input type="checkbox"> Remember me</label>
  </div>
  <button type="submit" class="btn btn-danger" name="submit">add_text</button>
</form>
<?php
	
	include"config.php";
	if(isset($_POST['submit']))
	{
		$name=$_POST['name'];
		$date=$_POST['date'];
		$des=$_POST['des'];
		$sql="insert into feedback values('','$name','$date','$des')";
		$result=mysql_query($sql)or die("error:data are not send sucessfully");
		echo"data send sucessfully";
		
		
	}
	?>
	</div>
<div class="col-sm-6" style="height:600px;width:50%%;border:solid 2px;background-color:#060000;margin-top: 20px;">
	<h1 style="margin-left: 100px;color: #ffffff;"><i><u>customer thoughts:)</u></i></h1>
			<?php
	include "config.php";
	$sql="select * from feedback";
	$result=mysql_query($sql)or die("error:data base are not connected");
	if(mysql_num_rows($result)>0)
	{
			while($rows=mysql_fetch_array($result))
		{	
		echo "<h3 style='color:#ffffff;'>".$rows['name']."</h3>";
			echo "<h3 style='color:#ffffff;>".$rows['date']."</h3>";
			echo"<h3 style='color:#ffffff;>".$rows['des']."</h3>";
			echo "<hr>";
				}	
				
		}
	
	?>
	
</div>

</div>
</body>
</html>
