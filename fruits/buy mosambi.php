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
<div class="dropdown">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">1.Fill Quantity
  <span class="caret"></span></button>
  <ul class="dropdown-menu" style="width: 100%;padding: 20px;background-color: #ffd5d5;">
 <form method="POST" action="buy mosambi.php">
  <div class="form-group">
    <label>Quantity:</label>
    <select name="quantity">
	<option>select Quantity</option>
	<option>1kg</option>
	<option>2kg</option>
	<option>3kg</option>
	<option>4kg</option>
	<option>5kg</option>
	</select>
	</div>
  <button type="submit" class="btn btn-default" name="save">Save</button>
  </form>
  <?php
  include "config.php";
  if(isset($_POST['save']))
  {
  	$quantity=$_POST['quantity'];
	$price=40;
	$total=$quantity*$price;
	echo "<b>Price:".$total."</b>";
	$shipping=149;
	echo "<br>";
	echo "<b>Shipping charges=".$shipping."</b>";
	echo "</br>";
	$grand_total=$total+$shipping;
	echo "<b>Total price=".$grand_total."</b>";
	$sql="insert into customer_detail values('','$price','$total','$shipping','$grand_total')";
	$result=mysql_query($sql)or die("database not work properly");
	echo "</br>";
	echo "Entry fill successfully";
  }
  ?>
</ul>
</div>

<br><br>
<div class="dropdown">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">2.Address
  <span class="caret"></span></button>
  <ul class="dropdown-menu" style="width: 100%;padding: 20px;background-color: #ffd5d5;">
  <form method="POST" action="">
  <div class="form-group">
    <label for="email">Name:</label>
	<table>
	<tr>
	<td><select name="title">
		<option>Title</option>
		<option>Mr.</option>
		<option>Miss.</option>
		<option>Mrs.</option>
	</select></td>
   <td><input type="text" class="form-control" id="email" name="name"></td>
	</tr>
	</table>
  </div>
  <div class="form-group">
  <input type="radio" name="gender">Male
   <input type="radio" name="gender">Female
    <input type="radio" name="gender">Other
   </div>
  <div class="form-group">
    <label for="pwd">Flat/House/Office No.:</label>
    <input type="text" class="form-control" name="house">
  </div>
  
  <div class="form-group">
    <label for="pwd">Street/Society/Office Name/city.:</label>
    <input type="text" class="form-control" name="society">
  </div>
  <div class="form-group">
    <label for="pwd">Pin code.:</label>
    <input type="text" class="form-control" name="pin_code">
  </div>
  <div class="form-group">
    <label for="pwd">state:</label>
    <input type="text" class="form-control" name="state">
  </div>
  
  <div class="form-group">
  <input type="radio" name="add">Home
   <input type="radio" name="add">Office
    <input type="radio" name="add">Other
   </div>
 
  <button type="submit" name="save" class="btn btn-success">Save</button>
  </form>
  <?php
 /* include "config.php";
  if(isset($_POST['save']))
  {
  	$name=$_POST['name'];
	$gender=$_POST['gender'];
	$house=$_POST['house'];
	$society=$_POST['society'];
	$pin_code=$_POST['pin_code'];
	$state=$_POST['state'];
	$add=$_POST['add'];
	$sql="insert into customer_detail values('$name','$gender','$house','$society','$pin_code','$state','$add')";
	$result=mysql_query($sql)or die("database not work properly");
	echo "your address saved sucessfully";
	
  }*/
  ?>
</ul>
</div><!--address dropdown div close-->
<br><br>

<div class="dropdown">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">3.Delivery Date/Time
  <span class="caret"></span></button>
  <ul class="dropdown-menu" style="width: 100%;padding: 20px;background-color: #ffd5d5;">
  <div class="form-group">
    <label for="email">Choose Date for delivery:</label>
	<input type="date" name="date"/>
    </div> 
  <!--<button type="submit" class="btn btn-default" name="">Save</button>-->
</ul>

</div>

<br><br>
<div class="dropdown">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">4.Payment
  <span class="caret"></span></button>
  <ul class="dropdown-menu" style="width: 100%;padding: 20px;background-color: #ffd5d5;">

  <div class="form-group">
    <input type="radio" name="payment"><b>cash on delivery</b><br>
	<input type="radio" name="payment"><b>Debit card</b><br>
	<input type="radio" name="payment"><b>credit card</b><br>
	<input type="radio" name="payment"><b>paytm</b><br>
	
	
    </div> 
 <button type="submit" name="" class="btn btn-default">Save</button>
</ul>

</div>
<br><br>

	<button class="btn btn-primary" type="button" name="submit">5.submit
  </button>
  </form>
  <?php
  include "config.php";
  if(isset($_POST['submit']))
  {
  	
  	$name=$_POST['name'];
	$house=$_POST['house'];
	$society=$_POST['society'];
	//$add=$_POST['add'];
	$date=$_POST['date'];
	$payment=$_POST['payment'];
	$quantity=$_POST['quantity'];
	$sql="insert into address values('','$name','$house','$society','$date','$payment','$quantity')";
	$result=mysql_query($sql)or die("data are not connected suceesfully");
	?>
	<script>
	alert("your order is confirm");
	</script>
	<?php
  }
  ?>
  </ul>

</div>

<br><br>
<div class="dropdown">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">4.Payment
  <span class="caret"></span></button>
  <ul class="dropdown-menu" style="width: 50%;padding: 20px;background-color: #ffd5d5;">
  <form method="POST" action="">
  <div class="form-group">
    <input type="radio" name="payment"><b>cash on delivery</b><br>
  <input type="radio" name="payment"><b>Debit card</b><br>
  <input type="radio" name="payment"><b>credit card</b><br>
  <input type="radio" name="payment"><b>paytm</b><br>
  <button type="submit" name="payment" class="btn btn-default">Save</button>
    </div> 
  </form>
  <?php
include "config.php";
if(isset($_post['payment']))
{
  $payment=$_POST['payment'];
  $sql="insert into payment_detail values('','$payment')";
  $result=mysql_query($sql)or die("database not connected properly");
  ?>
  <script>
  alert("payment saved sucessfully");
  </script>
  <?php
  
}
?>
</ul>

</div>



<br><br>
 
  <form method="POST" action="">
<a href="final_submit.php"><b style="color: #ffffff;">Final Submit</b>
<script>
  alert("your order was confirm!thanku for visiting our website");
</script>
</a>
</form>	
</body>
</html>
