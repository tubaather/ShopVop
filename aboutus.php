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
	<style>
		.body{
			background-image: url("back.jpg");
		}
	</style>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans%3A300%2C300italic%2C400%2C400italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic&amp;v1&amp;subset=latin%2Clatin-ext" type="text/css" media="screen"/>
<link href="https://fonts.googleapis.com/css?family=Oswald:300,400,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<body class="body">
	<h1 align="center">About Us </h1>
	<hr>
	<div align="center" style="background-color: #F0FFF0; font-size: 20px">
shopVop is synonymous with quality, speed and ease of use. Established in 2018, the e-commerce platform is based on intricately detailed and smooth user experience. In addition to basic groceries, also delivers a wide variety of premium products ranging over twelve categories.  user experience allows the customers to have more spare time to spend on other, more engaging experiences.
<br>
It is the aim of MyBazxar to give the customers their time, that they would otherwise spend on commuting, parking, physically navigating and looking for their groceries in congested spaces, back so that they can spend more time with family and friends, and focus on their health and wellbeing.<br>

Springs Mart is our exclusive fulfilment partner, fully stocked with a wide variety of Groceries, Meat & Poultry, Organic fruits and Vegetables and many more essential items!</div>
<div>
    <img src="ban.jpg">
</div>
</body>
</html>