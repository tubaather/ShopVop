<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">

	<?php include 'includes/navbar.php'; ?>
	 
	  <div class="content-wrapper">
	    <div class="container">

	      <!-- Main content -->
	      <section class="content">
	        <div class="row">
	        	<div class="col-sm-9">
	        		<?php
	        			if(isset($_SESSION['error'])){
	        				echo "
	        					<div class='alert alert-danger'>
	        						".$_SESSION['error']."
	        					</div>
	        				";
	        				unset($_SESSION['error']);
	        			}
	        		?>
	        		<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="css/bootstrap.min.css" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 500px;
  max-height: 10px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}
.para{
  text-align: center;
}
.box2 {
  width: 100px;
  height: 100px;
  transition: width 2s, height 2s, transform 2s;
}

div.box2:hover {
   width: 220px;
  height: 220px;
  transform: rotate(1deg);

}
.box2 {
  width: 100px;
  height: 100px;
  transition: width 2s, height 2s, transform 2s;
}

div.box2:hover {
   width: 220px;
  height: 220px;
  transform: rotate(1deg);

}

.tran{
  background-color: lightgreen;
  color: white;
  font-style: bold;
  font-size: 16px;
  width: 15%;
  height: 5%;
   position: relative;
  animation-name: example;
  animation-duration: 4s;
  animation-iteration-count: 3;
}

@keyframes example {
   0% {background-color:lightgreen; left:0px; top:0px;}

  50%  {background-color:green; left:0px; top:200px;}
  75% {background-color:lightgreen; left:0px; top:0px;}

  100%  {background-color:green; left:0px; top:200px;}
  
}
/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  width: 20%;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 150px) {
  .text {font-size: 11px}
}
</style>
</head>
<body style="width: 100%; background-color: yellow">
<div class="tran">
  Get 10% on Easy Paisa
</div>

        
     
        
        
        <div class="slideshow-container" >

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="ban.jpg" style="width:150%">
  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade" >
  <div class="numbertext">2 / 4</div>
  <img src="ban1.png" style="width:150%">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 4</div>
  <img src="ban2.jpg" style="width:150%">
  <div class="text">Caption Three</div>
</div>



<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>
<br>
 <h1> Select Category by clicking below</h1>
                        <div class="row" id="ani">

                            <div class="col-xs-9 col-sm-3 col-md-3">
                                <div class="box2" align="center"><a href="http://localhost/tuba/ecommerce/category.php?category=tender"><img src="meat.png" width="100px" ></a>
                                    <div class="media-body">
                                        <h4 class="font-15 text-uppercase">Meat</h4>
                                        <p></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-9 col-sm-3 col-md-3">
                                <div class="box2" align="center"> <a href="http://localhost/tuba/ecommerce/category.php?category="><img src="fruit.jpg" width="100px"></a>
                                    <div class="media-body">
                                        <h4>Fruit</h4>
                                        <p></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-9 col-sm-3 col-md-3">
                                <div class="box2" align="center"> <a href="http://localhost/tuba/ecommerce/category.php?category=tastelfull"><img src="key.png" width="70px"></a>
                                    <div class="media-body">
                                        <h4>Sauces</h4>
                                        <p></p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-xs-9 col-sm-3 col-md-3" align="center">
                                <div class="box2" align="center"><a href="http://localhost/tuba/ecommerce/category.php?category=Fresh"> <img src="veg.jpg" width="100px"></a>
                                    <div class="media-body">
                                        <h4>Vegetables</h4>
                                        <p></p>
                                    </div>
                                </div>
                            </div>
                            <br>
                        </div>
                        

<br><br>

<div  class="parag">
  <b style="color: grey">
  <p style="font-size: 20px">An online grocer is either a brick-and-mortar supermarket or grocery store that allows online ordering, or a standalone e-commerce service that includes grocery items. There is usually a delivery charge for this service.</p></b>
</div>
<br>
<br>
<div class="section-content">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                        <div class="box" align="center">
                                <img src="car.jpg" width="70" alt="">
                           
                            <h4 class="font-weight-600 mt-20">Delivery</h4>
                            
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                        <div class="box" align="center">
                           
                                <img src="rs.jpg" width="70" alt="">
                           
                            <h4 class="font-weight-600 mt-20">Cash On Delivery</h4>
                            
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                        <div class="box" align="center">
                           
                                <img src="phone.png" width="50" align="">
                        
                            <h4 class="font-weight-600 mt-20" align="center">Helpline</h4>
                            
                        </div>


        </div>


    </div></div></p></p></td></p></p></td></p></p></td></p></p></td></tr></table> </nav>
   
    <br>
    <br>
   
<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>



  
  	<?php include 'includes/footer.php'; ?>
</div>


<?php include 'includes/scripts.php'; ?>
</body>
</html>