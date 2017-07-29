<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Stawi Foods and Fruits</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<!--nav section-->
<div style="background-color: #CCFCCB;"><img id="lg" src="images/lg.png" style="max-height: 120px;max-width: 340px; margin-left: 0vw; margin-right: 0;"></div>
	<nav class="navbar navbar-inverse">
  <div class="row">
  <div class="col-md-12">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
        <span class="icon-bar"></span>  
      </button>
      <a class="navbar-brand" href="#">Stawi Foods & Fruits</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
    <!--nav list items-->
      <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="../index.php">Home</a></li>
        <li class="dropdown">
        		 <a href="#" class="dropdown-toggle"  data-toggle="dropdown"> About Us <span class="caret"></span>
        		 </a>
				  <ul class="dropdown-menu">
				    <li><a href="pages/story.php">Our Story</a></li>
				    <li><a href="pages/board.php">Team</a></li>
				  </ul>
        </li> 
         <li>
          <a href="pages/products.php">Products </a>
        </li>
        <li><a href="pages/socialImpact.php">Social Impact</a></li> 
        <li><a href="pages/contactUs.php">Contact Us</a></li>
      </ul>
      </div>
    </div>
  </div>
</nav>
<!--slider section-->
<div id="slider" class="carousel slide" data-ride="carousel" style="height: 500px; width: 100%;">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#slider" data-slide-to="0" class="active"></li>
    <li data-target="#slider" data-slide-to="1"></li>
    <li data-target="#slider" data-slide-to="2"></li>
    <li data-target="#slider" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox" style="height: 100%;">
    <div class="item active" style="height: 100%; width: 100%;">
      <img src="images/22.jpg" alt="" style="height: 100%; width: 100%;">
      <div class="carousel-caption">
        Play
      </div>
    </div>
    <div class="item" style="height: 100%; width: 100%;">
      <img src="images/28.jpg" alt="" style="height: 100%; width: 100%;">
      <div class="carousel-caption">
        ...
      </div>
    </div>
      <div class="item" style="height: 100%; width: 100%;"> 
      <img src="images/27.jpg" alt="" style="height: 100%; width: 100%;">
      <div class="carousel-caption">
        ...
      </div>
    </div>
      <div class="item" style="height: 100%; width: 100%;">
      <img src="images/33.jpg" alt="" style="height: 100%; width: 100%;">
      <div class="carousel-caption">
        ...
      </div>
    </div>
    ...
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#slider" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#slider" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<footer id="fter">
    Copyright &copy; Stawi Foods and Fruits
</footer>
</body>
</html>