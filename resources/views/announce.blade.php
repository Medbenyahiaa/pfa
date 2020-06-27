<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="img/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="colorlib">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>COV-AIDE</title>

	<link href="https://fonts.googleapis.com/css?family=Lora:400,700|Roboto:300,400" rel="stylesheet">
	<!--
			CSS
			============================================= -->
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/themify-icons.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/nice-select.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/aa.css">

</head>

<body>

	<!--================ Start Header Area =================-->
	<header class="default-header">
		<nav class="navbar navbar-expand-lg navbar-light">
			<div class="container">
				<a class="navbar-brand" href="#">
					<img src="img/logo.png" alt="">
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
				 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="fa fa-bars"></span>
				</button>

				<div class="collapse navbar-collapse justify-content-end align-items-center" id="navbarSupportedContent">
					<ul class="navbar-nav">
						<li><a href="http://127.0.0.1:8000">Home</a></li>
				<li><a href="{{route('about')}}">About</a></li>
						<li><a class ="active" href="/announce">Annonce</a></li>
						<li><a href="http://www.covidmaroc.ma/pages/Accueil.aspx">COVIDMAROC</a></li>
						@auth
						@if( Auth::user()->role == 'beneficiare')
						<li><a href="/homeBeneficiare">Mon Espace</a></li>
						@endif
						@endauth
						@auth
						@if( Auth::user()->role == 'donateur')
						<li><a href="/homeDonateur">Mon Espace</a></li>
						@endif
						@endauth
						<li><a href="contact.html">Contact</a></li>
						 
						<!--li class="dropdown">
							<a class="dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
								Pages
							</a>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="event-details.html">Event Details</a>
								<a class="dropdown-item" href="elements.html">Elements</a>
							</div>
						</li>
						<li class="dropdown">
							<a class="dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
								Blog
							</a>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="blog.html">Blog</a>
								<a class="dropdown-item" href="blog-details.html">Blog Details</a>
							</div>
						</li-->
						@auth
						@if( Auth::user())
							<li class="dropdown">
								<a class="dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
									<i class="now-ui-icons users_single-02"></i>
									{{ Auth::user()->nom }}
								</a>
								<div class="dropdown-menu " >
									@auth
										@if(Auth::user()->role == 'admin')
										 <a class="dropdown-item" href="/homeAdmin">Dashboard</a>
										 @endif
										

									@endauth
									

									<a class="dropdown-item" href="{{ route('logout') }}"
									onclick="event.preventDefault();
													document.getElementById('logout-form').submit();">
										{{ __('Logout') }}
									</a>
									
	
									<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
										@csrf
									</form>
								</div>
							</li>
						@endif
						
					@else
						<li><a href="{{ route('login') }}">Login</a></li>

						@if (Route::has('register'))
							<li><a href="{{ route('register') }}">Register</a></li>
						@endif
					 @endauth
				</ul>
				</div>
			</div>
		</nav>
	</header>
	<!--================ End Header Area =================-->

	<!--================ start banner Area =================-->
	<section class="home-banner-area relative" id="home" data-parallax="scroll"data-image-src="img/COVI.png">
		<div class="overlay-bg overlay"></div>
		<div class="container">
			<div class="row fullscreen justify-content-lg-end">
				<div class="banner-content col-lg-7">
					<h1 class="text-white">Voulez vous aider des gens dans le besoin?</h1>
					<h4> Notre site est le réflexe a prendre pour devenir un donateur , n’hésitez surtout pas à vous y inscrire pour contacter les bénéficiaires.</h4>
				</div>
			</div>
		</div>
	</section>
	<!--================ End banner Area =================-->

	<!--================ Start Popular Causes Area =================-->
	<section class="popular-cause-area section-gap-top">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-6">
					<div class="section-title">
						<h2><span>Les Annonces</span> Actuelles</h2>
					</div>
				</div>
			</div>

			<div class="content">
				<div class="first">
				  <img src="https://i.pravatar.cc/40" alt="" class="profil">
			
				  <div class="user-date">
			
					  <span class="user">simo</span>
					  <span class="date"> 2020-o6-17 14:14:00</span>
			
					</div>
				</div>
			
				<div class="body">
				  <h2 class="title"> titre: Voluptatem info veritas </h2>
				  <p class="annonce">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
					magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
					Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				</div>
			
			  </div>
	</section>
	<!--================ End Popular Causes Area =================-->
	<!--================ start footer Area =================-->
	<footer class="footer">
		<div class="footer-area">
			<div class="container">
				<div class="row section_gap">
					<div class="col-lg-5 col-md-6 col-sm-6">
						<div class="single-footer-widget tp_widgets">
							<h4 class="footer_title large_title">About Us</h4>
							<p>
								Do you want to be even more successful? Learn to love learning and growth. The more effort you put into
								improving your skills, the bigger the payoff you will get. Realize that things will be hard at first, but the
								rewards will be worth it.
							</p>
							<p>
								<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							</p>
						</div>
					</div>
					<div class="offset-lg-1 col-lg-2 col-md-6 col-sm-6">
						<div class="single-footer-widget tp_widgets">
							<h4 class="footer_title">Quick Links</h4>
							<ul class="list">
								<li><a href="#">Home</a></li>
								<li><a href="#">Shop</a></li>
								<li><a href="#">Blog</a></li>
								<li><a href="#">Product</a></li>
							</ul>
						</div>
					</div>
					<div class="offset-lg-1 col-lg-3 col-md-6 col-sm-6">
						<div class="single-footer-widget tp_widgets">
							<h4 class="footer_title">Contact Us</h4>
							<div class="ml-5">
								<p class="sm-head">
									<span class="fa fa-location-arrow"></span>
									Head Office
								</p>
								<p>123, Main Street, Your City</p>

								<p class="sm-head">
									<span class="fa fa-phone"></span>
									Phone Number
								</p>
								<p>
									+123 456 7890
								</p>

								<p class="sm-head">
									<span class="fa fa-envelope"></span>
									Email
								</p>
								<p>
									free@infoexample.com
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!--================ End footer Area =================-->

	<script src="js/vendor/jquery-2.2.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
	 crossorigin="anonymous"></script>
	<script src="js/vendor/bootstrap.min.js"></script>
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="js/parallax.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/isotope.pkgd.min.js"></script>
	<script src="js/jquery.nice-select.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/countdown.js"></script>
	<script src="js/jquery.sticky.js"></script>
	<script src="js/main.js"></script>
</body>

</html>