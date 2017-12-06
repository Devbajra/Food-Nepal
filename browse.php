<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title> Food Nepal </title>
	<!-- favicon -->
	<link rel="shortcut icon" type="image/png" href="images/logo.png">

	<link href="css/bootstrap.css" rel="stylesheet">
	
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
	<div class="wrapper" style="background-color: black;">
	<section id="banner-home-img" style="background-image:linear-gradient(rgba(0,0,0,0.66),rgba(0,0,0,0.25)), url(images/food.jpg);">
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
								<!-- Collect the nav links, forms, and other content for toggling -->
							
							<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
								<ul class="nav navbar-nav navbar-right">
																	
									<li><a href="index.php">Home</a></li>
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
			</div>		
		</section> <!--end of section-banner home-->

					<!--content-->
<section class="resturents">
        <h3 class="text-center" style="padding-top:10px;">Available Eateries</h3><br><br>
       
            <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <a href="shop/annapurna.php">
                    	<img src="shop/shop-images/annapurna/annapurna1.png" alt="ARNAPURNA">
                    	</br></br>
                    	<p class="text-center">ARNAPURNA, PATAN</p>
                    </a>
                </div>
                
                 <div class="col-md-4">
                     <a href="shop/cafe-hessed.php">
                    	<img src="shop/shop-images/Cafe-Hessed/Cafe-Hessed5.png" alt="CAFE-HESSED">
                    	</br></br>
                    	<p class="text-center">CAFE-HESSED <br> PULCHOWK, LALITPUR</p>
                    </a>
                </div>
                
                 <div class="col-md-4">
                   <a href="shop/dzouka.php">
                    	<img src="shop/shop-images/Dzouka-Tribal/dzouka3.JPG" alt="DZOUKA-TRIBAL">
                    	</br></br>
                    	<p class="text-center">DZOUKA-TRIBAL<br>KATHMANDU</p>
                    </a>
                </div>
            </div><hr>
               
               <div class="row">
                <div class="col-md-4">
                    <a href="shop/el.php">
                    	<img src="shop/shop-images\El-Maditerraneo\el maditerraneo1.jpg" alt="El-MADITERRANEO">
                    	</br></br>
                    	<p class="text-center">EL-MADITERRANEO<br>JHAMSHIKHEL,LALITPUR</p>
                    </a>
                </div>
                
                 <div class="col-md-4">
                     <a href="shop/fat.php">
                    	<img src="shop/shop-images\Fat Panda, Bouddha\maxresdefault.jpg" alt="FAT PANDA">
                    	</br></br>
                    	<p class="text-center">FAT PANDA <br>BOUDDHA</p>
                    </a>
                </div>
                
                 <div class="col-md-4">
                   <a href="shop/ghangri.php">
                    	<img src="shop/shop-images\Ghangri Cafe, Pulchwok\ghangri cafe3.JPG" alt="GANGRI">
                    	</br></br>
                    	<p class="text-center">GHANGRI CAFE<br>PULCHOWK</p>
                    </a>
                </div>
            </div><hr>

            <div class="row">
                <div class="col-md-4">
                    <a href="shop/himalayan.php">
                    	<img src="shop/shop-images\Himalayan Java, Mangalbazar\himalayan2.jpg" alt="HIMALAYAN JAVA">
                    	</br></br>
                    	<p class="text-center">HIMALAYAN JAVA<br>MANGALBAZAR</p>
                    </a>
                </div>
                
                 <div class="col-md-4">
                     <a href="shop/ichiban.php">
                    	<img src="shop/shop-images\Ichiban, Dilibazar\ichiban cafe1.JPG" alt="ICHIBAN">
                    	</br></br>
                    	<p class="text-center">ICHIBAN<br>DILLIBAZAR</p>
                    </a>
                </div>
                
                 <div class="col-md-4">
                   <a href="shop/korean.php">
                    	<img src="shop/shop-images\Korean\korean picnic1.jpg" alt="KOREAN PICNIC">
                    	</br></br>
                    	<p class="text-center">KOREAN PICNIC<br>THAMEL</p>
                    </a>
                </div>
            </div><hr>
             <div class="row">
                <div class="col-md-4">
                    <a href="shop/le-mantra.php">
                    	<img src="shop/shop-images\le\Le MANTRA.jpg" alt="LE MANTRA">
                    	</br></br>
                    	<p class="text-center">LE-MANTRA<br>PHALCHASA GALLO, KATHMANDU </p>
                    </a>
                </div>
                
                 <div class="col-md-4">
                     <a href="shop/mr.php">
                    	<img src="shop/shop-images\mr\mr.gimbaab.jpg" alt="Mr.gimbaab">
                    	</br></br>
                    	<p class="text-center">MR.GIMBAAB<br>JAWLAKHEL, LALITPUR</p>
                    </a>
                </div>
                
                 <div class="col-md-4">
                   <a href="shop/newa.php">
                    	<img src="shop/shop-images/newa/newa-lahana1.jpg" alt="NEWA LAHANA">
                    	</br>
                    	</br>
                    	<p class="text-center">NEWA LAHANA<br>KRITIPUR</p>
                    </a>
                </div><hr>
            </div>
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