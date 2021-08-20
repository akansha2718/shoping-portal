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
      <li class="active"><a href="next.php">Home</a></li>
      <li><a href="feedback.php">feedback</a></li>
      <li><a href="#">contact us</a></li>
      <li><a href="#">FaQ</a></li>
    </ul>
  </div>
</nav>
<div class="container">
<div class="row">
<div class="col-sm-6" style="background-color:#ffffff;border-radius:50%;height: 200px;margin-left: 200px;">

    <form action="" method="post">
	<table align="center">
      <h1 style="text-align: center;">Login Form</h1>
      <tr>
      <td>  <input name=username type="text" placeholder="Enter Username" style="border-radius: 5%;" required> </td>
		</tr>
		<tr>    
       <td><input name=password type="password" placeholder="Enter Password" style="border-radius: 5%;" required></td> 
		</tr>
		<tr>    
       <td><input type="submit" value="Log in" />
	
         </tr>
		 </table> 
		<center><a href="registration_page.php">sign_up</a></center>   
    </form><!-- form -->
	</div><!--coloumn div closed-->
	</div><!--row div closed--->
	<?php
	require('config.php');
  session_start();
    // If form submitted, insert values into the database.
    if (isset($_POST['username']))
    {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $username = stripslashes($username);
    //    $username = mysqli_real_escape_string($_POST['username']);

        $password = stripslashes($password);
   //     $password = mysqli_real_escape_string($_POST['password']);

        //Checking is user existing in the database or not
        $sql = "SELECT * FROM `registration` WHERE username='$username' and password='$password'";
        $result = mysql_query($sql) or die("database not work properly");
        $rows = mysql_num_rows($result);

        if($rows==1)
        {
          $_SESSION['username'] = $username;
		  $_SESSION['password'] = $password;
          header("Location:vegetable/buy pea.php");
        }
        else
        {
          ?>
          <script>
            alert('Invalid Keyword, please try again.');
            window.location.href='login.php';
          </script>
          <?php
        }
    
?>
</div><!-- container -->


<?php } ?>


  </body>
</html>
<?php

?>