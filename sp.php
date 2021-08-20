<html>
<head>
<title>addmission form</title>

<style>
  	h5{
		margin-left: 100px;
		color: #ffffff;
	}
	</style>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  </head>
  <body>
  	<div class="container" style="width: 100%;">
<div class="row">
	<div class="col-sm-12" style="height: 50px;padding-bottom: 30px;background-color: #ffffff">
	<h3 style="font-style: italic;margin-left:500px;margin-bottom: 10px;"> <span font-family: 'Hepta Slab', serif;
><img src="images/th.jpg" style="height: 40px;width:70px;"> oopshop :)<img src="images/th.jpg" style="height: 40px;width:70px;"></span></h3>
	</div>
</div>
<nav class="navbar navbar-inverse" style="width: 100%;">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"><p style="font-style: italic;"><span font-family: 'Hepta Slab', serif;
>  oopshop   :)</span></p></a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="next.php">Home</a></li>

	  <li><a href="about.php">About us</a></li>
	  <li><a href="feedback.php">Feedback</a></li>
	  <li><a href="help_center.php">Help center</a></li>
	  
      <li><a href="#"><span class="glyphicon glyphicon-basket"></span></a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      
      <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>
	
	<div class="row">
	<div class="col-sm-9" style="border: solid 2px;padding: 20px;">
	<form class="form-horizontal" action="" method="POST">
  <div class="form-group">
    <label class="control-label col-sm-2"> Name:</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="name">
    </div>
  </div>
  
	<div class="form-group">
    <label class="control-label col-sm-2">Mobile Number:</label>
    <div class="col-sm-10"> 
      <input type="text" class="form-control" name="mno">
    </div>
	</div>	
	<div class="form-group">
    <label class="control-label col-sm-2">Parmanent Address:</label>
    <div class="col-sm-10"> 
      <textarea style="height: 100px;width:200px;" name="address"></textarea>
    </div>
	</div>
	
	
	
	<div class="form-group">
    <label class="control-label col-sm-2">Email id</label>
    <div class="col-sm-10"> 
      <input type="email" class="form-control" name="email">
    </div>
	</div>
	
	
	
	<div class="form-group">
    <label class="control-label col-sm-2">Password</label>
    <div class="col-sm-10"> 
      <input type="password" class="form-control" name="password">
    </div>
	</div>
	
	 <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
	
      <button type="submit"  name="submit" class="btn btn-success">submit</button>
	 
    </div>
	</div>
	</form>
	<?php
	include "config.php";
	if(isset($_POST['submit']))
	{
		$name=$_POST['name'];
		$mno=$_POST['mno'];
		$address=$_POST['address'];
         $email=$_POST['email'];
		$password=md5($_POST['password']);
		 $sql="insert into reg values('','$name','$mno','$address','$email','$password')";
		 $result=mysql_query($sql)or die("Error:database are not connected");
		 ?>
		 <script>
		 alert ('your information send sucessfully pls go to Login!!use your email address as username');
		 </script>
		 <?php
		
	}
	
	?>
	
	</div><!--form div closed-->
	</div><!--row div closed--->
		
	</div><!--container div closed-->
  </body>
</html>



