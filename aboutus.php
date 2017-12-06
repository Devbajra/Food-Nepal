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
	<div class="wrapper">
	<section id="banner-home-img" style="background-image:linear-gradient(rgba(0,0,0,0.66),rgba(0,0,0,0.25)), url(images/food.jpg);">
		<div class="container">
			<div class="row">
			<!--
				<div class="banner-overlay"></div>
				-->
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
								<!-- Collect the nav links, forms, and other content for toggling -->
							
							<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
								<ul class="nav navbar-nav navbar-right">
																	
									<li><a href="index.php">Home</a></li>
									<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Menu <span class="caret"></span></a>
									<ul class="dropdown-menu">
										<li><a href="browse.php">Browse place</a></li>
										<li><a href="browse.php">Browse place</a></li>
									</ul>
									</li>
									<li><a href="#">About Us</a></li>
									<li><a href="#contact">Contact</a></li>

								</ul>

								</div><!-- /.navbar-collapse -->
							
							</div><!-- /.container-fluid -->
							</nav>
			</div>		
		</section>
			</div><!--end of section-banner home-->

<section class="about-us" style="margin-top: 10px;">
    <div class="container">

        <!-- Intro Content -->
         <div class="row">
            <div class="col-sm-4">
                <img class="img-responsive" src="images/logo.png" style="padding: 10%" alt="">
            </div>
            <div class="col-sm-8">
                <h1 style="color:black">About Food Nepal</h1>
				<p>Ever been confused where and what to eat? Not anymore. This website is the perfect site to find a good place for you to eat.</p></br>
                <p>Our motto is to help you find the suitable cafe/restaurant for you.</p></br>
                <p>Search the places and browse the menu. </p></br>
               
                <p><h3>Thank You For Your Visit</h3></p>
            </div>
        </div>
        <!--row -->
    </div>
 </section>   


 	<!--start of contact-->
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
</body>
</html>