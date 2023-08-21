<!DOCTYPE html>
<html lang="fr">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="description" content="Orbitor,business,company,agency,modern,bootstrap4,tech,software">
  <meta name="author" content="themefisher.com">

  <title>Bloodfinder</title>

  <!-- Favicon 
  <link rel="shortcut icon" type="image/x-icon" href="/images/favicon.ico" />-->

  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="frontend/plugins/bootstrap/css/bootstrap.min.css">
  <!-- Icon Font Css -->
  <link rel="stylesheet" href="frontend/plugins/icofont/icofont.min.css">
  <!-- Slick Slider  CSS -->
  <link rel="stylesheet" href="frontend/plugins/slick-carousel/slick/slick.css">
  <link rel="stylesheet" href="frontend/plugins/slick-carousel/slick/slick-theme.css">

  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="frontend/css/style.css">

</head>

<body id="top">

<header>
	<div class="header-top-bar">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6">
					<ul class="top-bar-info list-inline-item pl-0 mb-0">
						<li class="list-inline-item"><a href="mailto:mohamedtariq150@gmail.com"><i class="icofont-support-faq mr-2"></i>mohamedtariq150@gmail.com</a></li>
						<li class="list-inline-item"><i class="icofont-location-pin mr-2"></i>Address DLA, Cameroun </li>
					</ul>
				</div>
				<div class="col-lg-6">
					<div class="text-lg-right top-right-bar mt-2 mt-lg-0">
						<a href="tel:+237 694914695" >
							<span>Call Now : </span>
							<span class="h4">+237 694914695</span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<nav class="navbar navbar-expand-lg navigation" id="navbar">
		<div class="container">
		 	 <a class="navbar-brand" href="<?php echo e(URL::to('index')); ?>">
				<p class="moi">Bloodfinder</p>
			  </a>

		  	<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarmain" aria-controls="navbarmain" aria-expanded="false" aria-label="Toggle navigation">
			<span class="icofont-navigation-menu"></span>
		  </button>
	  
		  <div class="collapse navbar-collapse" id="navbarmain">
			<ul class="navbar-nav ml-auto">
			  <li class="nav-item active">
				<a class="nav-link" href="<?php echo e(URL::to('index')); ?>">Accueil</a>
			  </li>
			   <li class="nav-item"><a class="nav-link" href="<?php echo e(URL::to('about')); ?>">Apropos</a></li>
			  	<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="doctor.html" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Annonces <i class="icofont-thin-down"></i></a>
					<ul class="dropdown-menu" aria-labelledby="dropdown03">
						<li><a class="dropdown-item" href="<?php echo e(URL::to('dons')); ?>">Dons</a></li>
						<li><a class="dropdown-item" href="<?php echo e(URL::to('demandes')); ?>">Demandes</a></li>
					</ul>
			  	</li>
			   <li class="nav-item"><a class="nav-link" href="<?php echo e(URL::to('contact')); ?>" class="--primary">Contact</a></li>
			   <li class="nav-item"><a href="<?php echo e(URL::to('login')); ?>" class="btn btn-main btn-round-full">Logout</a></li>
			</ul>
		  </div>
		</div>
	</nav>
</header>
	
<?php echo $__env->yieldContent('contenu'); ?>



<!-- footer Start -->
<footer class="footer section gray-bg">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 mr-auto col-sm-6">
				<div class="widget mb-5 mb-lg-0">
					<div class="logo mb-4">
						<p class="moi">Bloodfinder</p>
					</div>
					<p>Tempora dolorem voluptatum nam vero assumenda voluptate, facilis ad eos obcaecati tenetur veritatis eveniet distinctio possimus.</p>

					<ul class="list-inline footer-socials mt-4">
						<li class="list-inline-item"><a href="https://www.facebook.com/iai-cameroun"><i class="icofont-facebook"></i></a></li>
						<li class="list-inline-item"><a href="https://twitter.com/iai-cameroun"><i class="icofont-twitter"></i></a></li>
						<li class="list-inline-item"><a href="https://www.pinterest.com/themefisher/"><i class="icofont-linkedin"></i></a></li>
					</ul>
				</div>
			</div>

			<div class="col-lg-2 col-md-6 col-sm-6">
				<div class="widget mb-5 mb-lg-0">
					<h4 class="text-capitalize mb-3">Services</h4>
					<div class="divider mb-4"></div>

					<ul class="list-unstyled footer-menu lh-35">
						<li><a href="#">Dons de sang </a></li>
						<li><a href="#">Demande de dons</a></li>
					</ul>
				</div>
			</div>

			<div class="col-lg-2 col-md-6 col-sm-6">
				<div class="widget mb-5 mb-lg-0">
					<h4 class="text-capitalize mb-3">Support</h4>
					<div class="divider mb-4"></div>

					<ul class="list-unstyled footer-menu lh-35">
						<li><a href="#">Thermes & Conditions</a></li>
						<li><a href="#">Privacy Policy</a></li>
						<li><a href="#">Company Support </a></li>
						<li><a href="#">FAQ</a></li>
					</ul>
				</div>
			</div>

			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="widget widget-contact mb-5 mb-lg-0">
					<h4 class="text-capitalize mb-3">contactez en un clique</h4>
					<div class="divider mb-4"></div>

					<div class="footer-contact-block mb-4">
						<div class="icon d-flex align-items-center">
							<i class="icofont-email mr-3"></i>
							<span class="h6 mb-0">Support disponible  24/7</span>
						</div>
						<h4 class="mt-2"><a href="tel:+237 694914695">mohamedtariq150@gmail.com</a></h4>
					</div>

					<div class="footer-contact-block">
						<div class="icon d-flex align-items-center">
							<i class="icofont-support mr-3"></i>
							<span class="h6 mb-0">Lundi a Lundi : 24/24</span>
						</div>
						<h4 class="mt-2"><a href="tel:+237 694914695">+237 694914695</a></h4>
					</div>
				</div>
			</div>
		</div>
		
		<div class="footer-btm py-4 mt-5">
			<div class="row align-items-center justify-content-between">
				<div class="col-lg-6">
					<div class="copyright">
						&copy; Copyright Reserved to <span class="text-color">Bloodly</span> by <a href="https://www.iai-cameroun.cm/" target="_blank">MBEMDIA Saliou</a>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-4">
					<a class="backtop js-scroll-trigger" href="#top">
						<i class="icofont-long-arrow-up"></i>
					</a>
				</div>
			</div>
		</div>
	</div>
</footer>



    <!-- 
    Essential Scripts
    =====================================-->

    
    <!-- Main jQuery -->
    <script src="frontend/plugins/jquery/jquery.js"></script>
    <!-- Bootstrap 4.3.2 -->
    <script src="frontend/plugins/bootstrap/js/popper.js"></script>
    <script src="frontend/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="frontend/plugins/counterup/jquery.easing.js"></script>
    <!-- Slick Slider -->
    <script src="frontend/plugins/slick-carousel/slick/slick.min.js"></script>
    <!-- Counterup -->
    <script src="frontend/plugins/counterup/jquery.waypoints.min.js"></script>
    
    <script src="frontend/plugins/shuffle/shuffle.min.js"></script>
    <script src="frontend/plugins/counterup/jquery.counterup.min.js"></script>
    <!-- Google Map -->
    <script src="frontend/plugins/google-map/map.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkeLMlsiwzp6b3Gnaxd86lvakimwGA6UA&callback=initMap"></script>    
    
    <script src="frontend/js/script.js"></script>
    <script src="frontend/js/contact.js"></script>

  </body>
  </html>
   <?php /**PATH C:\wamp64\www\bloodfinder\resources\views/layout/foot.blade.php ENDPATH**/ ?>