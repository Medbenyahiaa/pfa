<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="../img/fav.png">
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
	<link rel="stylesheet" href="css/theme.css">
	
	

	
</head>

<body>

	<!--================ Start Header Area =================-->
	<header class="default-header">
		<nav class="navbar navbar-expand-lg navbar-light">
			<div class="container">
				<a class="navbar-brand" href="/">
					<img src="img/logo.png" alt="">
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
				 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="fa fa-bars"></span>
				</button>

				<div class="collapse navbar-collapse justify-content-end align-items-center" id="navbarSupportedContent">
					<ul class="navbar-nav">
                            <li><a class="active" href="http://127.0.0.1:8000">Home</a></li>
					<li><a href="{{route('about')}}">About</a></li>
							<li><a href="/announce">Annonce</a></li>
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
	<section class="home-banner-area relative" id="home" data-parallax="scroll" data-image-src="img/aba.png">
		<div class="overlay-bg overlay"></div>
		<div class="container">
			<div class="row fullscreen justify-content-lg-end">
				<div class="banner-content col-lg-7">
					<h1>
						Le don <br>
						est échange de vie ;et la vie,échange de don.
					</h1>
					<h4>Plus de charité.Plus de vie meilleure.</h4>
					<a href="/register" class="primary-btn">
						Inscrivez Vous
						<i class="ti-angle-right ml-1"></i>
					</a>
				</div>
			</div>
		</div>
	</section>
	<!--================ End banner Area =================-->

	<!--================ Start About Area =================-->
	<section class="about_area lite_bg">
		<div class="container">
			<div class="row align-items-end">
				<div class="col-lg-5">
					<div class="about_details lite_bg">
						<h2>Aider directement celles
							et ceux impactés par le virus </h2>
						
						<p class="mb-0">
							Notre site à pour but de mettre en relation des donateurs et les familles défavorisées victimes de covid-19.
							Collecter des fonds pour une aide d'urgence est indispensbale pour certaines populations qui sont en difficulte financière ne leur permettant pas d'acheter leur nourriture journalière. 
                            Ces personnes ont perdu leur emploi précaire en raison du confinement ; nous devons les aider.
						</p>
						

						<div class="active-brand-carusel">
							<div class="single-brand">
								<img class="mx-auto w-auto" src="img/brands/b1.png" alt="">
							</div>
							<div class="single-brand">
								<img class="mx-auto w-auto" src="img/brands/b2.png" alt="">
							</div>
							<div class=" single-brand">
								<img class="mx-auto w-auto" src="img/brands/b3.png" alt="">
							</div>
							<div class=" single-brand">
								<img class="mx-auto w-auto" src="img/brands/b2.png" alt="">
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 offset-lg-3 col-md-6 offset-md-1 d-lg-block d-none">
					<div class="about_right">
						<div class="video-inner justify-content-center align-items-center d-flex">
							<a id="play-home-video" class="video-play-button" 
							href="https://www.youtube.com/watch?v=QFy8iPBYDLU">
								<span></span>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="about_bg d-lg-block d-none"></div>
		</div>
	</section>
	<!--================ End About Area =================-->

	<!--================ Start Features Area =================-->
	<section class="features-area section-gap-top">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-6">
					<div class="section-title">
						<h2>Comment  <span>Pourriez-vous</span> Aider</h2>
					</div>
				</div>
			</div>
			<div class="row feature_inner">
				<div class="col-lg-4 col-md-6">
					<div class="feature-item">
						<i class="fi flaticon-compass"></i>
						<h4>Faire un Don</h4>
						<p>Si tu as besoin d’une main secourable, cherche-la au bout de ton bras. En grandissant, souviens-toi que tu as une autre main ; 
							la première est là pour t’aider toi-même, la seconde t’a été donnée pour aider les autres.</p>
						<!--a href="#" class="primary-btn2">Learn more</a-->
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="feature-item">
						<i class="fi flaticon-desk"></i>
						<h4>Donner  L'inspiration</h4>
						<p>Notre cœur doit être rempli d’amour pour les humains qui sont tous nos frères ; nous devons penser à eux et les aider sans attendre la moindre récompense. Pourquoi? Parce que nous avons déjà la récompense ;
							 c’est cette dilatation intérieure, cette chaleur, cette inspiration qui nous comblent lorsque nous aimons.</p>
						<!--a href="#" class="primary-btn2">Learn more</a-->
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="feature-item">
						<i class="fi flaticon-bathroom"></i>
						<h4>Être Bénévole</h4>
						<p> Un bénévole est motivé.c'est souvent ce qui compte le plus. En effet, tout le monde peut devenir bénévole :salarés , étudiant , demandeurs d'emplois , retraités ...Mais on ne s'engage pas pour rien, on investit du temps dans le milieu associatif</p>
						<!--a href="#" class="primary-btn2">Learn more</a-->
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ End Features Area =================-->

	

	


	<!--================ Start Upcoming Event Area =================-->
	<section class="upcoming_event_area section-gap-top">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-6">
					<div class="section-title">
						<h2><span>Upcoming</span> Event</h2>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-6">
					<div class="single_upcoming_event">
						<div class="row align-items-center">
							<div class="col-lg-6 col-md-6">
								<figure>
									<img class="img-fluid w-100" src="img/event/e1.png" alt="">
									<div class="date">
										17 Mar
									</div>
								</figure>
							</div>
							<div class="col-lg-6 col-md-6">
								<div class="content_wrapper">
									<h3 class="title">
										<a href="event-details.html">Working Syran Children</a>
									</h3>
									<p>
										Seed the life upon you are creat
									</p>
									<div class="d-flex count_time justify-content-lg-start justify-content-center" id="clockdiv1">
										<div class="single_time">
											<h4 class="days">552</h4>
											<p>Days</p>
										</div>
										<div class="single_time">
											<h4 class="hours">08</h4>
											<p>Hours</p>
										</div>
										<div class="single_time">
											<h4 class="minutes">45</h4>
											<p>Minutes</p>
										</div>
									</div>
									<a href="#" class="primary-btn2">Learn More</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="single_upcoming_event">
						<div class="row align-items-center">
							<div class="col-lg-6 col-md-6">
								<figure>
									<img class="img-fluid w-100" src="img/event/e2.png" alt="">
									<div class="date">
										19 May
									</div>
								</figure>
							</div>
							<div class="col-lg-6 col-md-6">
								<div class="content_wrapper">
									<h3 class="title">
										<a href="event-details.html">Help And Homeless</a>
									</h3>
									<p>
										Seed the life upon you are creat
									</p>
									<div class="d-flex count_time justify-content-lg-start justify-content-center" id="clockdiv2">
										<div class="single_time">
											<h4 class="days">552</h4>
											<p>Days</p>
										</div>
										<div class="single_time">
											<h4 class="hours">08</h4>
											<p>Hours</p>
										</div>
										<div class="single_time">
											<h4 class="minutes">45</h4>
											<p>Minutes</p>
										</div>
									</div>
									<a href="#" class="primary-btn2">Learn More</a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-6">
					<div class="single_upcoming_event">
						<div class="row align-items-center">
							<div class="col-lg-6 col-md-6">
								<figure>
									<img class="img-fluid w-100" src="img/event/e3.jpg" alt="">
									<div class="date">
										10 June
									</div>
								</figure>
							</div>
							<div class="col-lg-6 col-md-6">
								<div class="content_wrapper">
									<h3 class="title">
										<a href="event-details.html">Get Volunteeer Idea 2019</a>
									</h3>
									<p>
										Seed the life upon you are creat
									</p>
									<div class="d-flex count_time justify-content-lg-start justify-content-center" id="clockdiv3">
										<div class="single_time">
											<h4 class="days">552</h4>
											<p>Days</p>
										</div>
										<div class="single_time">
											<h4 class="hours">08</h4>
											<p>Hours</p>
										</div>
										<div class="single_time">
											<h4 class="minutes">45</h4>
											<p>Minutes</p>
										</div>
									</div>
									<a href="#" class="primary-btn2">Learn More</a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-lg-6">
					<div class="single_upcoming_event">
						<div class="row align-items-center">
							<div class="col-lg-6 col-md-6">
								<figure>
									<img class="img-fluid w-100" src="img/event/e4.jpg" alt="">
									<div class="date">
										18 July
									</div>
								</figure>
							</div>
							<div class="col-lg-6 col-md-6">
								<div class="content_wrapper">
									<h3 class="title">
										<a href="event-details.html">Get Volunteeer Idea 2019</a>
									</h3>
									<p>
										Seed the life upon you are creat
									</p>
									<div class="d-flex count_time justify-content-lg-start justify-content-center" id="clockdiv4">
										<div class="single_time">
											<h4 class="days">552</h4>
											<p>Days</p>
										</div>
										<div class="single_time">
											<h4 class="hours">08</h4>
											<p>Hours</p>
										</div>
										<div class="single_time">
											<h4 class="minutes">45</h4>
											<p>Minutes</p>
										</div>
									</div>
									<a href="#" class="primary-btn2">Learn More</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ End Upcoming Event Area =================-->

	<!--================ Start Home Blog Area =================-->
	<section class="blog-area section-gap-top">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-12">
					<div class="home-blog-left">
						<h2>Latest From
							Our Blog </h2>
						<p>
							Open fifth midst divided great fly gathering living deep no abundantly. Evening appear saying that forth god
							wito
							Given sixth days of very Third spirit waters seas. Calleded can't his third. Evening upon. All stars. Seasons a
							the a dry for third days
						</p>
						<a href="#" class="primary-btn2">Show more</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 single-blog">
					<div class="thumb">
						<img class="img-fluid" src="img/b1.jpg" alt="">
					</div>
					<div class="single-blog-info">
						<p class="tag"><span>Homeless, orphan</span><span>March 17, 2019</span></p>
						<a href="blog-single.html">
							<h4>Seed The Life Upon Creature
								Shall Lesser Fifth</h4>
						</a>
						<div class="meta-bottom d-flex">
							<a href="#" class="mr-3"><span class="ti-comments mr-2"></span> 02 Comments</a>
							<a href="#"> <span class="ti-eye mr-2"></span> 05 View</a>
						</div>
					</div>
				</div>

				<div class="col-lg-4 col-md-6 single-blog">
					<div class="thumb">
						<img class="img-fluid" src="img/b2.jpg" alt="">
					</div>
					<div class="single-blog-info">
						<p class="tag"><span>Homeless, orphan</span><span>March 17, 2019</span></p>
						<a href="blog-single.html">
							<h4>Seed The Life Upon Creature
								Shall Lesser Fifth</h4>
						</a>
						<div class="meta-bottom d-flex">
							<a href="#" class="mr-3"><span class="ti-comments mr-2"></span> 02 Comments</a>
							<a href="#"> <span class="ti-eye mr-2"></span> 05 View</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ End Home Blog Area =================-->

	<!--================ Start Instagram Area =================-->
	<section class="popular-cause-area section-gap-top">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-6">
					<div class="section-title">
						<h2><span>Our</span> Volunteer</h2>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-4 col-md-6">
				<div class="card single-popular-cause">
					<div class="card-body">
						<figure>
							<img class="card-img-top img-fluid" src="img/volenteer/1.png" alt="Card image cap">
						</figure>
						<div class="card_inner_body">
							<h4 class="card-title">Mohamed Benyahia</h4>
							<div class="tag">Co-Founder</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6">
				<div class="card single-popular-cause">
					<div class="card-body">
						<figure>
							<img class="card-img-top img-fluid" src="img/volenteer/2.png" alt="Card image cap">
						</figure>
						<div class="card_inner_body">
							<h4 class="card-title">Mehdi Boudir</h4>
							<div class="tag">Co-Founder</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
	</section>
	<!--================ End Instagram Area =================-->

	

	<!--================ start footer Area =================-->
	<footer class="footer">
		<div class="footer-area">
			<div class="container">
				<div class="row section_gap">
					<div class="col-lg-5 col-md-6 col-sm-6">
						<div class="single-footer-widget tp_widgets">
							<h4 class="footer_title large_title">About Us</h4>
							<p>
								Notre site à pour but de mettre en relation des donateurs et les familles défavorisées victimes de covid-19.
								Collecter des fonds pour une aide d'urgence est indispensbale pour certaines populations qui sont en difficulte financière ne leur permettant pas d'acheter leur nourriture journalière. 
                            	Ces personnes ont perdu leur emploi précaire en raison du confinement ; nous devons les aider
							</p>
							<p>
									<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright Mohamed Benyahia && Mehdi Boudir All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a >MB</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							</p>
						</div>
					</div>
					<div class="offset-lg-1 col-lg-2 col-md-6 col-sm-6">
						<div class="single-footer-widget tp_widgets">
							<h4 class="footer_title">Quick Links</h4>
							<ul class="list">
								<li><a href="#">Home</a></li>
								<li><a href="/announce">Annonce</a></li>
								<li><a href="http://www.covidmaroc.ma/pages/Accueil.aspx">COVIDMAROC</a></li>
                                
                                
							</ul>
						</div>
					</div>
					<div class="offset-lg-1 col-lg-3 col-md-6 col-sm-6">
						<div class="single-footer-widget tp_widgets">
							<h4 class="footer_title">Contact Us</h4>
							<div class="ml-5">
								<p class="sm-head">
									<span class="fa fa-location-arrow"></span>
									EMSI OFFICE
								</p>
								<p>RABAT, EMSI BOURGRAG,  </p>

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
									admin-Covaide@gmail.com
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