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
<div class="row">
  <div class="col-sm-12" style="border: solid 2px;height: 350px;width:100%;padding-left: 30px;padding-right: 30px;padding-top: 30px;padding-bottom: 30px;">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  <li data-target="#myCarousel" data-slide-to="3"></li>
  <li data-target="#myCarousel" data-slide-to="4"></li>
  <li data-target="#myCarousel" data-slide-to="5"></li>
  <li data-target="#myCarousel" data-slide-to="6"></li>
  <li data-target="#myCarousel" data-slide-to="7"></li>
  <li data-target="#myCarousel" data-slide-to="8"></li>
  <li data-target="#myCarousel" data-slide-to="9"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="images/2nd.jpg" style="height: 280px;width: 100%;">
    </div>

    <div class="item">
      <img src="images/ist.jpg" style="height: 280px;width: 100%;">
    </div>

    <div class="item">
      <img src="images/3rd.jpg" style="height: 280px;width: 100%;">
    </div>
  
   <div class="item">
      <img src="images/4th.jpg" style="height: 280px;width: 100%;">
    </div>
  
  <div class="item">
      <img src="images/5th.jpg" style="height: 280px;width: 100%;">
    </div>
  
  <div class="item">
      <img src="images/6th.jpg" style="height: 280px;width: 100%;">
    </div>
  <div class="item">
      <img src="images/7th.jpg" style="height: 280px;width: 100%;">
    </div>
  
  <div class="item">
      <img src="images/8th.jpg" style="height: 280px;width: 100%;">
    </div>
  
  </div><!--inner div closed-->


  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div><!--crousel div closed-->
  </div><!--slider div closed--->
</div><!--row div closed-->
<div class="row">
<div class="col-sm-3"style="height: 200px;border: solid 1px;padding: 10px;">
  <a href="pea.php">
<img class="image" src="images/peas.jpg"/>
<h5 style="margin-left: 20px;">Peas</h5>
 <center><a href="pea.php">Buy now</a></center>
</a>
  </div>
  <div class="col-sm-3"style="height: 200px;border: solid 1px;padding: 10px;">
    <a href="beans.php">
<img class="image" src="images/beans.jpg"/>
  <h5 style="margin-left: 20px;">Beans</h5>
 <center><a href="beans.php">Buy now</a></center>
  </div>
  <div class="col-sm-3"style="height: 200px;border: solid 1px;padding: 10px;">
    <a href="radish.php">
<img class="image" src="images/radish1.jpg"/>
  <h5 style="margin-left: 20px;">Radish</h5>
 <center><a href="radish.php">Buy now</a></center>
  </div>
  <div class="col-sm-3"style="height: 200px;border: solid 1px;padding: 10px;">
    <a href="mushroom.php">
<img class="image" src="images/mushroom.jpg"/>
  <h5 style="margin-left: 20px;">Mushroom</h5>
 <center><a href="mushroom.php">Buy now</a></center>
  </div>
  </div>
  <div class="row">
  <div class="col-sm-3"style="height: 200px;border: solid 1px;padding: 10px;">
    <a href="methi.php">
<img class="image" src="images/methi.jpg"/>
  <h5 style="margin-left: 20px;">Methi</h5>
 <center><a href="methi.php">Buy now</a></center>
  </div>
  <div class="col-sm-3"style="height: 200px;border: solid 1px;padding: 10px;">
    <a href="palak.php">
<img class="image" src="images/palak.jpg"/>
  <h5 style="margin-left: 20px;">Palak</h5>
 <center><a href="palak.php">Buy now</a></center>
  </div>
  <div class="col-sm-3"style="height: 200px;border: solid 1px;padding: 10px;">
    <a href="tamato.php">
<img class="image" src="images/tamato.jpg"/>
  <h5 style="margin-left: 20px;">Tamato</h5>
 <center><a href="tamato.php">Buy now</a></center>
  </div>
  <div class="col-sm-3"style="height: 200px;border: solid 1px;padding: 10px;">
    <a href="patato.php">
<img class="image" src="images/patato.jpg"/>
  <h5 style="margin-left: 20px;">Patato</h5>
 <center><a href="patato.php">Buy now</a></center>
  </div>
  </div>
</body>
</html>

