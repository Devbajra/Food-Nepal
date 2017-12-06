<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title> Food Nepal </title>
	
	<!-- favicon -->
	<link rel="shortcut icon" type="image/png" href="../images/logo.png">

	<link href="../css/bootstrap.css" rel="stylesheet">
	
	<link href="../css/style.css" rel="stylesheet">
	<link href="font/font.css" rel="stylesheet">
	<link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet">

	<!--script-->
	<script src="../js/jquery-3.2.1.min.js"></script>
	<script src="../js/bootstrap.js"></script>
	
	<!-- including data editor -->
	<?php include('../include/dr.php')?>
	
	<!-- php for form -->
	<?php include('../php/form.php'); ?>

</head>

<body>
	<div class="wrapper" style="background-color: silver;">
	<section id="banner-home-img" style="background-image:linear-gradient(rgba(0,0,0,0.66),rgba(0,0,0,0.25)), url(../images/food.jpg);">
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

								<a class="navbar-brand" href="#"><img src="../images/logo.png"></a>
							</div>
								<!-- Collect the nav links, forms, and other content for toggling -->
							
							<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
								<ul class="nav navbar-nav navbar-right">
																	
									<li><a href="../index.php">Home</a></li>
									<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Menu <span class="caret"></span></a>
									<ul class="dropdown-menu">
										<li><a href="../browse.php">Restaurant</a></li>
									</ul>
									</li>
									<li><a href="../aboutus.php">About Us</a></li>
									<li><a href="#contact">Contact</a></li>

								</ul>

								</div><!-- /.navbar-collapse -->
							
							</div><!-- /.container-fluid -->
							</nav>
			</div>		
		</section> <!--end of section-banner home-->

					<!--content-->
<section class="container">
	<div class="row">
		<div class="col-sm-12">
			<h1 align="center" style="color: black">Annapurna Sweets House</h1>
		</div>
	</div>
</section>
<section class="container">
	<div class="row">
		<div class="col-sm-2">
			
		</div>
		<div class="col-md-8">
			
				<div id="slider">
				<figure>
				<img src="shop-images/annapurna/annapurna1.png" alt>
				<img src="shop-images/annapurna/annapurna2.png" alt>
				<img src="shop-images/annapurna/annapurna1.png" alt>
				<img src="shop-images/annapurna/annapurna2.png" alt>
				<img src="shop-images/annapurna/annapurna1.png" alt>
				</figure>
				</div>

		</div>
		<div class="col-sm-2">
			
		</div>
	</div>
</section>

<section class="information">
	<div class="container">
		<div class="row">
			<div class="col-sm-6 with-margin">
				<p><h4>Address: <?= $address?></h4></p>
		<p></p>
			<p><big align="left">Hours: Open&#8208;Close</big></p> 
	<p>Sunday		8AM&#8208;8PM</p>
	<p>Monday		8AM&#8208;8PM</p>
	<p>Tuesday		8AM&#8208;8PM</p>
	<p>Wednesday	8AM&#8208;8PM</p>
	<p>Thursday	8AM&#8208;8PM</p>
	<p>Friday		Closed</p>
	<p>Saturday	Closed</p>
	<p></p>		
	<p><strong>Phone:</strong><?= $contact?></p>	
			</div>
			<div class="col-sm-6 with-margin">
			<div class="google-map">
				<div class="google-map">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3643093.33367039!2d79.04329432107438!3d26.912750150675567!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19c91ebf147b%3A0x3ac3376313062190!2sAnnapurna+Sweets+%26+Fast+Food+Restaurant!5e0!3m2!1sen!2snp!4v1512528670019" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
		</div>
		</div>
	</div>
</section>
 <section class="detail">
 	<div class="container">
 		<div class="row">
 			<div class="col-sm-12">
 				<hr/>
 				<h1 align="center" style="color: black;">Menu</h1>
 				<hr/>
 			</div>
 		</div>
 	</div>
 </section>	
<section class="detail">
 	<div class="container">
 		<div class="row">
 			<div class="col-sm-6 foodmenu">
 			<p><h2 align="center">Main course</h2></p>
<pre align="center;" style="color: green; background-color: white; border-style: none;">
Shahi Paneer------------Rs.170/-
Paneer Butter Masala----Rs.180/-
Chana Masala------------Rs.80/-
Puri Chholla------------Rs.150/-
Puri Sabji--------------Rs.140/-
Puri Sabji Jalebi-------Rs.170/-
Cholle bhature----------Rs.150/-
Plain Rice With Curry---Rs.130/-
Roti Sabji--------------Rs.150/-
Roti Chholla------------Rs.200/-
</pre>	

		</div>
		<div class="col-sm-6" foodmenu>
			<p><h2 align="center">Main Course</h2></p>
<pre align="center;" style="color: green; background-color: white; border-style: none;">
Special Chaat--------Rs.130/-
Mixed Chaat----------Rs.110/-
Tikki Chaat----------Rs.110/-
Samosa Chaat---------Rs.100/-
Kachori Chaat--------Rs.100/-
Papri Bhalla Chaat---Rs.90/-
Dhal Bhalla Chaat----Rs.90/-
Papri Chaat----------Rs.90/-
Dahi Puri------------Rs.90/-
Pani Puri------------Rs.70/-
</pre>
		</div>	
 			</div>
 	</div>
 </section>	


 	<!--start of contact-->
 <?php include('../include/contact.php'); ?>
	
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
</body>
</html>