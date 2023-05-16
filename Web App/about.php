<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Meta -->
	<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
	<meta name="description" content="AUTISM">
	<meta name="Dodger" content="">
	<!--Title-->
	<title>Autistic kids</title>
	<!--Favicon Icon-->
	<link rel="icon" type="image/x-icon" href="img/icons/fav.ico" />
	<!--StyleSheet-->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/superfish.css">
	<link rel="stylesheet" href="css/owl.theme.default.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/hover.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/slicknav.css">
	<link rel="stylesheet" href="css/simplyCountdown.theme.losange.css">
	<link rel="stylesheet" href="css/linearicons.css">
	<!--Main StyleSheet-->
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/responsive.css">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/superfish.css">
	<link rel="stylesheet" href="css/owl.theme.default.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/hover.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/slicknav.css">
	<link rel="stylesheet" href="css/blue.css">
	<link rel="stylesheet" href="css/simplyCountdown.theme.losange.css">
	<link rel="stylesheet" href="css/linearicons.css">
	<link rel="stylesheet" href="css/footer.css">
	<link rel="stylesheet" href="css/swip_style.css">
    <link rel="stylesheet" href="css/swiper.min.css">
	<!--Main StyleSheet-->
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/responsive.css">
	<link rel="stylesheet" href="style.css">

</head>
<body>
	<!--Preloader Start-->
	<div id="preloader">
		<div id="status"></div>
	</div>
	<!--Preloader Start End-->
<div class="wrapper">
	<!--Header Top Section Start-->
	<div class="header-top-col">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-6 col-xs-12">
					<div class="header-social">
						<ul>
							<li><a href=""><i class="fa fa-facebook"></i></a></li>
							<li><a href=""><i class="fa fa-google-plus"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-6 col-sm-6 col-xs-12">
					<div class="login-signup">
						<ul>
						<?php
							if(isset($_COOKIE["user_id"])) {  //Check It have User Or No to Show the data to users
								echo '<li><a href="api/ProfilePic.php"><i class="fa fa-user-o"></i><span>Profile</span></a></li>';
								echo '<li><a href="api/logout.php"><i class=""></i><span>Logout</span></a></li>';
							}else{
								echo '<li><a href="Reg.php"><i class="fa fa-registered"></i><span>Registering</span></a></li>';
							}
							?>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--Header Top Section End-->
	<!--Logo Nav Col Start-->
	<div class="logo-nav-col">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<a href="index.php">
						<div class="logo">
							<img src="img/icons/logo.png" alt="">
						</div>
					</a>	
				</div>
				<div class="col-md-9">
					<!-- Nav Start -->
					<div class="nav-bar">
						<ul class="sf-menu">
							<li class="current-menu-item"><a href="index.php">Home</a></li>
							<li><a href="autism.php">Autism</a> </li>
							<?php
							if(isset($_COOKIE["user_id"])) {
							echo '<li><a href="lev1.php">Education</a>
								<ul>
									<li><a href="lev1.php">Level 1</a></li>
									<li><a href="lev2.php">Level 2</a></li>
									<li><a href="lev3.php">Level 3</a></li>
									<li><a href="lev4.php">Level 4</a></li>
								</ul>
							</li>';
							echo '<li><a href="Assess.php">Assessment</a></li>';
							echo '<li><a href="Moniture.php">Monitor</a></li>';
							}
							?>
							<li><a href="about.php">about-us</a> </li>
							<li><a href="contact.php">Contact</a></li>
						</ul>
					</div>
					<!-- Nav End -->
				</div>
			</div>
		</div>
	</div>
	<!--Slider Start-->
	<!--banner Start-->
	<div class="banner-col">
		<div class="container">
			<div class="overlay"></div>
			<div class="row">
				<div class="col-md-12">
					<div class="banner">
						<h2>About Us</h2>
						<p>Who we are, What is the Benefit of this project.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--banner End-->
	<!--WelCome Start-->
	<div class="about-col">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-12 col-xs-12">
					<div class="about-us">
						<h3>Welcome to Autism EAEAT</h3>
						<p>We are students in Egyptian Academy for Engineering and advanced Technology (EAEAT)</p>
						<p>This project is based on helping children with autism through electronic glasses to fully learn with a humble approach and working with them to monitor their health.</p>
						<div class="button">
							<div class="button-effiect"></div>
								<a href="about.php">Read More</a>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-sm-12 col-xs-12">
					<div class="img">
						<img src="img/about-bg.jpg" alt="">
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--WelCome End-->
	<!--Column Box Start-->
	<div class="column-box-col">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="heading-col">
						<h2>resources</h2>
						<div class="border"></div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="column-box">
						<div class="icon">
							<?php
							if(isset($_COOKIE["user_id"])) {
							echo '<a href="lev1.php"><img src="img/icons/edu.gif" height="250px" width="250px" alt=""></a>';
							} else {
							echo '<a href="#"><img src="img/icons/edu.gif" height="250px" width="250px" alt=""></a>';
							}
							?>
						</div>
						<div class="text">
							<h2>Free Video</h2>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="column-box">
						<div class="icon">
							<?php
							if(isset($_COOKIE["user_id"])) {
							echo '<a href="lev1.php"><img src="img/icons/anime.gif" height="250px" width="250px" alt=""></a>';
							} else {
							echo '<a href="#"><img src="img/icons/anime.gif" height="250px" width="250px" alt=""></a>';
							}
							?>
						</div>
						<div class="text">
							<h2>Free Animate</h2>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="column-box">
						<div class="icon">
							<?php
							if(isset($_COOKIE["user_id"])) {
							echo '<a href="Moniture.php"><img src="img/icons/moni.gif" height="250px" width="250px" alt=""></a>';
							} else {
							echo '<a href="#"><img src="img/icons/moni.gif" height="250px" width="250px" alt=""></a>';
							}
							?>
						</div>
						<div class="text">
							<h2>Monitor Available</h2>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12">
					<div class="column-box">
						<div class="icon">
							<a href="autism.php"><img src="img/icons/magic.gif" height="250px" width="250px" alt=""></a>
						</div>
						<div class="text">
							<h2>All you need to know about autism</h2>
						</div>
					</div>
				</div>
			</div>	
		</div>
	</div>
	<!--Column Box End-->
	<!------Our Studnets start------->
	<div class="teacher-col">
		<div class="container">
			<div class="row">
				<div class="heading-col">
					<h2>Our Students</h2>
					<div class="border"></div>
				</div>	
				<div class="col-md-12">	
					<div class="teacher-carousel">
						<div class="teacher-carousel-content">
							<div class="teacher">
								<div class="img">
									<img src="img/students/Nouran.jpg" alt="">
									<div class="overlay">
										<div class="social-icon">
											<ul>
												<li><a href=""><i class="fa fa-facebook"></i></a></li>
												<li><a href=""><i class="fa fa-google-plus"></i></a></li>
											</ul>
										</div>
									</div>
									<div class="overlay-2">
										<img src="img/students/Nouran.jpg" alt="">
									</div>
								</div>
								<div class="text">
									<h2>Name Students</h2>
									<p>Programmer</p>
								</div>
							</div>
						</div>
						<div class="teacher-carousel-content">
							<div class="teacher">
								<div class="img">
									<img src="img/students/Donia.jpg" alt="">
									<div class="overlay">
										<div class="social-icon">
											<ul>
												<li><a href=""><i class="fa fa-facebook"></i></a></li>
												<li><a href=""><i class="fa fa-google-plus"></i></a></li>
											</ul>
										</div>
									</div>
									<div class="overlay-2">
										<img src="img/students/Donia.jpg" alt="">
									</div>
								</div>
								<div class="text">
									<h2>Name Students</h2>
									<p>Programmer</p>
								</div>
							</div>
						</div>
						<div class="teacher-carousel-content">
							<div class="teacher">
								<div class="img">
									<img src="img/students/Diaa.jpg" alt="">
									<div class="overlay">
										<div class="social-icon">
											<ul>
												<li><a href=""><i class="fa fa-facebook"></i></a></li>
												<li><a href=""><i class="fa fa-google-plus"></i></a></li>
											</ul>
										</div>
									</div>
									<div class="overlay-2">
										<img src="img/students/Diaa.jpg" alt="">
									</div>
								</div>
								<div class="text">
									<h2>Name Students</h2>
									<p>Programmer</p>
								</div>
							</div>
						</div>
						<div class="teacher-carousel-content">
							<div class="teacher">
								<div class="img">
									<img src="img/students/adel.jpg" alt="">
									<div class="overlay">
										<div class="social-icon">
											<ul>
												<li><a href=""><i class="fa fa-facebook"></i></a></li>
												<li><a href=""><i class="fa fa-google-plus"></i></a></li>
											</ul>
										</div>
									</div>
									<div class="overlay-2">
										<img src="img/students/adel.jpg" alt="">
									</div>
								</div>
								<div class="text">
									<h2>Name Students</h2>
									<p>Engineer</p>
								</div>
							</div>
						</div>
						<div class="teacher-carousel-content">
							<div class="teacher">
								<div class="img">
									<img src="img/students/Hatem.jpg" alt="">
									<div class="overlay">
										<div class="social-icon">
											<ul>
												<li><a href=""><i class="fa fa-facebook"></i></a></li>
												<li><a href=""><i class="fa fa-google-plus"></i></a></li>
											</ul>
										</div>
									</div>
									<div class="overlay-2">
										<img src="img/students/Hatem.jpg" alt="">
									</div>
								</div>
								<div class="text">
									<h2>Name Students</h2>
									<p>Engineer</p>
								</div>
							</div>
						</div>
						<div class="teacher-carousel-content">
							<div class="teacher">
								<div class="img">
									<img src="img/students/Mahmoud.jpg" alt="">
									<div class="overlay">
										<div class="social-icon">
											<ul>
												<li><a href=""><i class="fa fa-facebook"></i></a></li>
												<li><a href=""><i class="fa fa-google-plus"></i></a></li>
											</ul>
										</div>
									</div>
									<div class="overlay-2">
										<img src="img/students/Mahmoud.jpg" alt="">
									</div>
								</div>
								<div class="text">
									<h2>Name Students</h2>
									<p>Engineer</p>
								</div>
							</div>
						</div>
						<div class="teacher-carousel-content">
							<div class="teacher">
								<div class="img">
									<img src="img/students/Dodger.jpg" alt="">
									<div class="overlay">
										<div class="social-icon">
											<ul>
												<li><a href=""><i class="fa fa-facebook"></i></a></li>
												<li><a href=""><i class="fa fa-google-plus"></i></a></li>
											</ul>
										</div>
									</div>
									<div class="overlay-2">
										<img src="img/students/Dodger.jpg" alt="">
									</div>
								</div>
								<div class="text">
								<h2>Name Students</h2>
									<p>Programmer</p>
								</div>
							</div>
						</div>
						<div class="teacher-carousel-content">
							<div class="teacher">
								<div class="img">
									<img src="img/students/Moataz.jpg" alt="">
									<div class="overlay">
										<div class="social-icon">
											<ul>
												<li><a href=""><i class="fa fa-facebook"></i></a></li>
												<li><a href=""><i class="fa fa-google-plus"></i></a></li>
											</ul>
										</div>
									</div>
									<div class="overlay-2">
										<img src="img/students/Moataz.jpg" alt="">
									</div>
								</div>
								<div class="text">
									<h2>Name Students</h2>
									<p>Programmer</p>
								</div>
							</div>
						</div>
						<div class="teacher-carousel-content">
							<div class="teacher">
								<div class="img">
									<img src="img/students/Mayar.jpg" alt="">
									<div class="overlay">
										<div class="social-icon">
											<ul>
												<li><a href=""><i class="fa fa-facebook"></i></a></li>
												<li><a href=""><i class="fa fa-google-plus"></i></a></li>
											</ul>
										</div>
									</div>
									<div class="overlay-2">
										<img src="img/students/Mayar.jpeg" alt="">
									</div>
								</div>
								<div class="text">
								<h2>Name Students</h2>
									<p>Engineer</p>
								</div>
							</div>
						</div>
						<div class="teacher-carousel-content">
							<div class="teacher">
								<div class="img">
									<img src="img/students/feto.jpg" alt="">
									<div class="overlay">
										<div class="social-icon">
											<ul>
												<li><a href=""><i class="fa fa-facebook"></i></a></li>
												<li><a href=""><i class="fa fa-google-plus"></i></a></li>
											</ul>
										</div>
									</div>
									<div class="overlay-2">
										<img src="img/students/feto.jpg" alt="">
									</div>
								</div>
								<div class="text">
								<h2>Name Students</h2>
									<p>Engineer</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!------Our Studnets End------->
	<!-------Start End--------->
	<div class="teacher-col">
		<div class="container">
			<div class="row">
				<div class="heading-col">
					<h2>Our Prof</h2>
					<div class="border"></div>
				</div>
			</div>
		</div>
	</div>
	<div class="blog-slider">
		<div class="blog-slider__wrp swiper-wrapper">
			<div class="blog-slider__item swiper-slide">
				<div class="blog-slider__img">
				  
				  <img src="img/students/DrOla.jpg" alt="">
				</div>
				<div class="blog-slider__content">
				  <div class="blog-slider__title">Ola Mohammed</div>
				  <div class="blog-slider__text">Philosophy of Doctorate (PhD) in Electrical Eng., 2014
					Military Technical College.
					Research title: “Human Identification Using Multi-Features biometric Authentication”

					Master of Science (M.Sc.) in Electrical Engineering, 2009. 
					Faculty of Engineering, Shoubra, Benha University
					Research title: ”Computer-Aided Personal Identification based on Iris Image Processing”

					Bachelor of Science in Electrical Engineering, 2002. 
					Specialization: Computer and System Engineering.
					Faculty of Engineering, Shoubra, Zagazig University
					</div>
				</div>
			</div>
			<div class="blog-slider__item swiper-slide">
				<div class="blog-slider__img">
				  <img src="img/students/DrMoataz.jpg" alt="">
				</div>
				<div class="blog-slider__content">
				  <div class="blog-slider__title">Moataz Elsherbini</div>
				  <div class="blog-slider__text">received the Msc and Ph.D. degree
					in electronics engineering from the Faculty of
					Engineering at Shoubra, Benha University, Egypt,
					in 2012 and 2016. He is an assistant professor in Benha University
					and currently serving as an Assistant Professor
					with the Egyptian Academy of Engineering and
					Advanced Technology. He has published around
					35 articles in different international journals and
					conferences. His research interests include surface
					acoustic wave devices, IoT, energy harvesting, and
					healthcare. He is also a reviewer and an editor
					board member in several international journals. 
					</div>
				</div>
			</div>
		</div>
	  	<div class="blog-slider__pagination"></div>
	</div>
	<!-------Doctors End--------->
	<!--Footer main Start-->
	<div class="footer-distributed">
		<div class="footer-left">

			<h3>Graduation Project in <span>AUTISM</span> </h3>
			<p class="footer-company-name">Autistic Kids &copy; 2022</p>
		</div>

		<div class="footer-center">

			<div>
				<i class="fa fa-map-marker"></i>
				<p><span>33, Baker Street</span> Cairo, EG</p>
			</div>

			<div>
				<i class="fa fa-phone"></i>
				<p>+1 234 567890</p>
			</div>

			<div>
				<i class="fa fa-envelope"></i>
				<p><a href="mailto:kids.disease.app@gmail.com">kids.disease.app@gmail.com</a></p>
			</div>

		</div>

		<div class="footer-right">

			<p class="footer-company-about">
				<span>About the website</span>
				We are students in Egyptian Academy for Engineering and advanced Technology (EAEAT).
				This is for the treatment and education of autistic children
			</p>

			<div class="footer-icons">

				<a href="#"><i class="fa fa-facebook"></i></a>
				<a href="#"><i class="fa fa-twitter"></i></a>
				<a href="#"><i class="fa fa-linkedin"></i></a>
				<a href="#"><i class="fa fa-github"></i></a>

			</div>

		</div>
	</div>
	<!--Footer main End-->
	<!--Scroll To Top Start-->
	<a href="#" class="scrollup">
		<i class="fa fa-angle-up"></i>
	</a>
	<!--Scroll To Top End-->
</div>
	<!--JavaScript-->
	<script src="js/jquery-2.2.4.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/superfish.js"></script>
	<script src="js/owl.animate.js"></script>
	<script src="js/hoverIntent.js"></script>
	<script src="js/jquery.counterup.min.js"></script>
	<script src="js/waypoints.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/simplyCountdown.min.js"></script>
	<script src="js/jquery.slicknav.js"></script>
	<script src="js/custom.js"></script>
	<script src="js/user.custom.js"></script>
	<script src="js/swiper.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>