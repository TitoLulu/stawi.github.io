<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
  <!-- email transfer path-->
    <?php include_once("../email/transfer.php"); ?>
    <div style="background-color: #CCFCCB;"><img id="lg" src="../images/lg.png" style="max-height: 120px;max-width: 340px; margin-left: 0vw; margin-right: 0"></div>
    <nav class="navbar navbar-inverse">
  <div class="container-fluid">
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
      <ul class="nav navbar-nav navbar-right">
        <li ><a href="../index.php">Home</a></li>
        <li class="dropdown">
             <a href="#" class="dropdown-toggle"  data-toggle="dropdown"> About Us <span class="caret">
              </span></a>
          <ul class="dropdown-menu">
            <li><a href="story.php">Our Story</a></li>
            <li><a href="board.php">Team</a></li>
          </ul>
          
        </li> 
        <li><a href="products.php">Products</a>
        </li>
        <li><a href="socialImpact.php">Social Impact</a></li> 
        <li class="active"><a href="contactUs.php">Contact Us</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="map">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.9175861908466!2d36.88385501405429!3d-1.2174960358966909!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f15f59629f6b5%3A0x2f2d5625e3140811!2sStawi+Foods+and+Fruits!5e0!3m2!1sen!2sgh!4v1501331748091" width="800" height="300" frameborder="0" style="border:0" allowfullscreen></iframe></div>

  <div class="social">
  <i class="fa fa-phone fa-2x " aria-hidden="true">+254702736645</i>
</div>
<div class="mail">
  <i class="fa fa-envelope-o fa-2x " aria-hidden="true"> info@stawifoods.co.ke</i>
</div>
<div id="pAddress">
  <p>Roysambu, Behind Thika Road Mall, P.O. Box 64565-00620 Nairobi Kenya</p>
</div>


<footer id="fter">
    Copyright &copy; Stawi Foods and Fruits
</footer>


</body>
</html>

