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
</head>

<body>

	<!--================ Start Header Area =================-->
	<header class="default-header">
		<nav class="navbar navbar-expand-lg navbar-light">
			<div class="container">
				<a class="navbar-brand" href="http://127.0.0.1:8000">
					<img src="img/logo.png" alt="">
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
				 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="fa fa-bars"></span>
				</button>

				<div class="collapse navbar-collapse justify-content-end align-items-center" id="navbarSupportedContent">
					<ul class="navbar-nav">
                        <li><a  href="http://127.0.0.1:8000">Home</a></li>
                        <li><a class="active" href="{{route('about')}}">About</a></li>
                        <li><a href="/announce">Annonce</a></li>
                        <li><a href="http://www.covidmaroc.ma/pages/Accueil.aspx">COVIDMAROC</a></li>
                        <li><a href="contact.html">Contact</a></li>
					@auth
					
                        @if( Auth::user()->role == 'admin' )
                            <li><a href="/homeAdmin">Dashboard</a></li>
                         @endif
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
                        <li class="dropdown">
                            <a class="dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                {{ Auth::user()->nom }}
                            </a>
                            <div class="dropdown-menu " >
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
                    @else
                        <li><a href="{{ route('login') }}">Login</a></li>

                        @if (Route::has('register'))
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @endif
                     @endauth
                </ul>
			</div>
		</nav>
	</header>
	<!--================ End Header Area =================-->

	<!--================ Start top-section Area =================-->
	<section class="home-banner-area relative" id="home" data-parallax="scroll"data-image-src="img/about1.png">
		<div class="overlay-bg overlay"></div>
		<div class="container">
			<div class="row fullscreen justify-content-lg-end">
				<div class="banner-content col-lg-7">
					<h1 >About Us</h1>
					<h4>Au fur et à mesure que la crise s'aggrave. les effets négatifs sur la santé et le bien-être financier des personnes touchées se multiplient. Nous pouvons tous faire notre part pour soutenir les personnes touchées </h4>
				</div>
			</div>
		</div>
	</section>
	<!--================ End top-section Area =================-->

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
						<h4>Give Inspiration</h4>
						<p>Notre cœur doit être rempli d’amour pour les humains qui sont tous nos frères ; nous devons penser à eux et les aider sans attendre la moindre récompense. Pourquoi? Parce que nous avons déjà la récompense ;
							 c’est cette dilatation intérieure, cette chaleur, cette inspiration qui nous comblent lorsque nous aimons.</p>
						<!--a href="#" class="primary-btn2">Learn more</a-->
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="feature-item">
						<i class="fi flaticon-bathroom"></i>
						<h4>Become Bolunteer</h4>
						<p>Multiply is rule light dominion given midst a living i set every bring also of rule Set light fifth best
							bearing.</p>
						<!--a href="#" class="primary-btn2">Learn more</a-->
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ End Features Area =================-->

	<!--================ Start Instagram Area =================-->
	<section class="instagram-area">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-6">
					<div class="section-title">
						<h2><span>Follow</span> Us</h2>
					</div>
				</div>
			</div>
		</div>
		<div class="instagram-slider owl-carousel">
			<a href="img/instagram/i1.jpg" class="single-instagram d-block img-pop-up">
				<div class="instagram-img">
					<img src="img/instagram/i1.jpg" alt="">
					<div class="instagram-text">
						<i class="ti-instagram"></i>
					</div>
				</div>
			</a>
			<a href="img/instagram/i2.jpg" class="single-instagram d-block img-pop-up">
				<div class="instagram-img">
					<img src="img/instagram/i2.jpg" alt="">
					<div class="instagram-text">
						<i class="ti-instagram"></i>
					</div>
				</div>
			</a>
			<a href="img/instagram/i3.jpg" class="single-instagram d-block img-pop-up">
				<div class="instagram-img">
					<img src="img/instagram/i3.jpg" alt="">
					<div class="instagram-text">
						<i class="ti-instagram"></i>
					</div>
				</div>
			</a>
			<a href="img/instagram/i4.jpg" class="single-instagram d-block img-pop-up">
				<div class="instagram-img">
					<img src="img/instagram/i4.jpg" alt="">
					<div class="instagram-text">
						<i class="ti-instagram"></i>
					</div>
				</div>
			</a>
			<a href="img/instagram/i5.jpg" class="single-instagram d-block img-pop-up">
				<div class="instagram-img">
					<img src="img/instagram/i5.jpg" alt="">
					<div class="instagram-text">
						<i class="ti-instagram"></i>
					</div>
				</div>
			</a>
		</div>
	</section>
	<!--================ End Instagram Area =================-->

	<!--================ Start CTA Area =================-->
	<div class="cta-area">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-7">
					<p class="top_text">Subscribe now</p>
					<h1>Subscribe Now And Receive The
						Weekly Newsletter </h1>
					<div id="mc_embed_signup">
						<form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
						 method="get">
							<div class="row align-items-center">
								<div class="col-lg-5 mb-lg-0 mb-3">
									<input class="form-control" placeholder="Your name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your name'"
									 required="" type="email" />
								</div>
								<div class="col-lg-5 mb-lg-0 mb-3">
									<input class="form-control" name="EMAIL" placeholder="Your Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email'"
									 required="" type="email" />
								</div>
								<div class="col-lg-2">
									<button class="primary-btn" type="submit">Subscribe</button>
									<div style="position: absolute; left: -5000px;">
										<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text" />
									</div>

									<div class="info"></div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--================ End CTA Area =================-->

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