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
  <a href="orange.php">
<img class="image" src="images/orange.jpg"/>
  <h5 style="margin-left: 20px;">Orange</h5>
  <center><a href="orange.php">Buy now</a></center>
  </div><!--div closed-->
  <div class="col-sm-3"style="height: 200px;border: solid 1px;padding: 10px;">
    <a href="pear.php">
<img class="image" src="images/pear green.jpg"/>
  <h5 style="margin-left: 20px;">Pear</h5>
 <center><a href="pear.php">Buy now</a></center>
  </div><!--div closed-->
  <div class="col-sm-3"style="height: 200px;border: solid 1px;padding: 10px;">
    <a href="avocado.php">
<img class="image" src="images/avocado.jpg"/>
  <h5 style="margin-left: 20px;">Avocado</h5>
 <center><a href="avocado.php">Buy now</a></center>
  </div><!--div closed-->
  <div class="col-sm-3"style="height: 200px;border: solid 1px;padding: 10px;">
    <a href="guava.php">
<img class="image" src="images/guava.jpg"/>
  <h5 style="margin-left: 10px;">Guava</h5>
 <center><a href="guava.php">Buy now</a></center>
  </div><!--div closed-->
  </div><!--row div closed-->
  <div class="row">
  <div class="col-sm-3"style="height: 200px;border: solid 1px;padding: 10px;">
    <a href="pomegranate.php">
<img class="image" src="images/pomegranate.jpg"/>
  <h5 style="margin-left: 10px;">Pomegranate</h5>
 <center><a href="pomegranate.php">Buy now</a></center>
  </div><!--div closed-->
  <div class="col-sm-3"style="height: 200px;border: solid 1px;padding: 10px;">
    <a href="mosambi.php">
<img class="image" src="images/mosambi.jpg"/>
  <h5 style="margin-left: 10px;">Mosambi</h5>
 <center><a href="mosambi.php">Buy now</a></center>
  </div><!--div closed-->
  <div class="col-sm-3"style="height: 200px;border: solid 1px;padding: 10px;">
    <a href="papaya.php">
<img class="image" src="images/papaya.jpg"/>
  <h5 style="margin-left: 10px;">Papaya</h5>
 <center><a href="papaya.php">Buy now</a></center>
  </div><!--div closed-->
  <div class="col-sm-3"style="height: 200px;border: solid 1px;padding: 10px;">
    <a href="banana.php">
<img class="image" src="images/banana.jpg"/>
  <h5 style="margin-left: 10px;">Banana</h5>
 <center><a href="banana.php">Buy now</a></center>
  </div><!--div closed-->
  </div><!--row div closed-->
  
</body>
</html>

