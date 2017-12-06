<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title> Food Nepal </title>
	
	<!-- favicon -->
	<link rel="shortcut icon" type="image/png" href="images/logo.png">
	<link href="css/bootstrap.css" rel="stylesheet">
	<!--
	<link href="css/normalize.css" rel="stylesheet">
	-->
	<link href="css/style.css" rel="stylesheet">
	<link href="font/font.css" rel="stylesheet">
	<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">

	<!--script-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.js"></script>

	<!-- php for form -->
	<?php include('php/form.php'); ?>
</head>

<body>
<a id="top" onClick="toTop(); return false;" href="#"><i class="fa fa-angle-double-up fa-5x" aria-hidden="true"></i></a>
	<div class="wrapper">
		<section id="banner-home" style="background-image:linear-gradient(rgba(0,0,0,0.66),rgba(0,0,0,0.25)), url(images/food.jpg);">
		<div class="container">
			<div class="row">

				<div class="nav-menu">
					<nav class="navbar navbar-default nav1">
						<div class="container">
							
							<div class="navbar-header">
								<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								</button>

								<a class="navbar-brand" href="#"><img src="images/logo.png"></a>
							</div>
								
							
							<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
								<ul class="nav navbar-nav navbar-right">
																	
									<li><a href="#">Home</a></li>
									<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Menu <span class="caret"></span></a>
									<ul class="dropdown-menu">
										<li><a href="browse.php">Browse by names</a></li>
										<li><a href="browse.php">Browse by alphabet</a></li>
									</ul>
									</li>
									<li><a href="aboutus.php">About Us</a></li>
									<li><a onClick="initScroll('contact'); return false;" href="#contact">Contact</a></li>

								</ul>

								</div><!-- /.navbar-collapse -->
							
							</div><!-- /.container-fluid -->
							</nav>
			</div>	<!--end of nav-menu-->	
			
			<div class="row">
				<div class="col-md-8 slogan">
					<h1> Find food, <br> find happiness. </h1>
					<button><a href="browse.php"> I'm hungry <i class="fa fa-cutlery" aria-hidden="true"></i> </a></button>
				</div>
			</div> 
			
		</div>
				
		</section> <!--end of section-banner home-->
		</div>
		</div>

<!--feature-->
<section id="Featured">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h2 align="center">Featured Foods</h2>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-sm-4 image-container featured-image">
				<img src="images/momo.jpg" class="img-responsive">
			</div>
			<div class="col-sm-4 image-container featured-image">
				<img src="images/food4.jpg" class="img-responsive">
			</div>
			<div class="col-sm-4 image-container featured-image">
				<img src="images/thakali.jpg" class="img-responsive">
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-sm-4 image-container featured-image">
				<img src="images/food3.jpg" class="img-responsive">
			</div>
			<div class="col-sm-4 image-container featured-image">
				<img src="images/food2.jpeg" class="img-responsive">
			</div>
			<div class="col-sm-4 image-container featured-image">
				<img src="images/food5.jpg" class="img-responsive">
			</div>
		</div>
	</div>
</section>
	<!--end of feature container-->
 	
 	<!--start of contact form-->
 <?php include('include/contact.php'); ?>
	
 	<!--end of contact-->

 	<section class="footer">
 		<div class="container">
 			<div class="row">
 				<div class="col-md-6">
					<div class="copyright">
											© 2017 Food Nepal Pvt. Ltd. All Rights Reserved.
					</div>
				</div>
				<div class="cold-md-6">
					<div class="social">
						<a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
						<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
						<a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
					</div>
				</div>
 			</div>
 		</div>
 	</section>

	</div> <!--end of wrapper-->
	
	
	<!-- smooth scroll -->
<script>
var marginY = 0;
var destination = 0;
var speed = 10;
var scroller = null;

function initScroll(elementId){
	destination = document.getElementById(elementId).offsetTop;
	
	scroller = setTimeout(function(){
		initScroll(elementId);
	}, 1);

	marginY = marginY + speed;

	if(marginY >= destination){
		clearTimeout(scroller);
	}	

	window.scroll(0, marginY);

	//console.log(destination);
}

window.onscroll = function(){
	marginY = this.pageYOffset;	
};

function toTop(){
	scroller = setTimeout(function(){
		toTop();
	}, 1);

	marginY = marginY - speed;

	if(marginY <= 0){
		clearTimeout(scroller);
	}	

	window.scroll(0, marginY);
}
</script>

</body>
</html>