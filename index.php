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
	<link rel="stylesheet" href="css/blue.css">
	<link rel="stylesheet" href="css/simplyCountdown.theme.losange.css">
	<link rel="stylesheet" href="css/linearicons.css">
	<link rel="stylesheet" href="css/footer.css">
	<link rel="stylesheet" href="css/swip_style.css">
    <link rel="stylesheet" href="css/swiper.min.css">
    <!-- main css -->
    <link rel="stylesheet" href="css/main_blog.css">

	<!--Main StyleSheet-->
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/responsive.css">
	<link rel="stylesheet" href="style.css">

	<!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@200;300;400;500;600;700;800&display=swap" >
	
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
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
							if(isset($_COOKIE["user_id"])) { //Check It have User Or No to Show the data to users
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
							if(isset($_COOKIE["user_id"])) { //Check It have User Or No to Show the data to users
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
	<!-- Slider Start -->
	<div class="default-slider">
		<div class="slider-carousel-col owl-item">					
			<div class="content" style="background-image:url(img/slider1.jpg);">
				<div class="overlay"></div>
				<div class="text-col">
					<div class="text-item">
						<h2>Welcome to Autism Care Service</h2>
					</div>
					<div class="text-item">
						<h3>Towards a smart, interactive child</h3>
					</div>
					<div class="button">
						<a href="Reg.php" class="left">get started now</a>
						<a href="about.php" class='right'>learn more</a>
					</div>
				</div>
			</div>
			<div class="content" style="background-image:url(img/slider2.jpg);">
				<div class="overlay"></div>
				<div class="text-col">
					<div class="text-item">
						<h2>Welcome to Autism Care Service</h2>
					</div>
					<div class="text-item">
						<h3>Towards a smart, interactive child</h3>
					</div>
					<div class="button">
						<a href="Reg.php" class="left">get started now</a>
						<a href="about.php" class='right'>learn more</a>
					</div>
				</div>
			</div>					
			<div class="content" style="background-image:url(img/slider3.jpg);">
				<div class="overlay"></div>
				<div class="text-col">
					<div class="text-item">
						<h2>Welcome to Autism Care Service</h2>
					</div>
					<div class="text-item">
						<h3>Towards a smart, interactive child</h3>
					</div>
					<div class="button">
						<a href="Reg.php" class="left">get started now</a>
						<a href="about.php" class='right'>learn more</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Slider End -->
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
	<!--Popular Course Start-->
	<div class="popular-course-col">
		<div class="container">
			<div class="row">
				<div class="heading-col">
					<h2>Education</h2>
					<div class="border"></div>
				</div>
				<div class="col-md-12">
					<div class="popular-course-carousel">
						<div class="course-carousel-content">
							<div class="popular-course">
								<div class="img">
									<img src="img/coures1.jpg" alt="">
								</div>
								<div class="text-panel">
									<div class="text">
										<h3>Letters</h3>
									</div>
									<div class="border"></div>
									<div class="icon-text">
										<div class="icon">
											<ul>
												<li><i class="fa fa-users"></i><span>380</span></li>
												<li><i class="fa fa-comment-o"></i><span>3</span></li>
											</ul>
										</div>
										<div class="text-bar">
											<p>free</p>
										</div>
									</div>
								</div>	
							</div>
						</div>
						<div class="course-carousel-content">
							<div class="popular-course">
								<div class="img">
									<img src="img/coures2.jpg" alt="">
								</div>
								<div class="text-panel">
									<div class="text">
										<h3>Words</h3>
									</div>
									<div class="border"></div>
									<div class="icon-text">
										<div class="icon">
											<ul>
												<li><i class="fa fa-users"></i><span>380</span></li>
												<li><i class="fa fa-comment-o"></i><span>8</span></li>
											</ul>
										</div>
										<div class="text-bar">
											<p>free</p>
										</div>
									</div>
								</div>	
							</div>
						</div>
						<div class="course-carousel-content">
							<div class="popular-course">
								<div class="img">
									<img src="img/coures3.jpg" alt="">
								</div>
								<div class="text-panel">
									<div class="text">
										<h3>Communication</h3>
									</div>
									<div class="border"></div>
									<div class="icon-text">
										<div class="icon">
											<ul>
												<li><i class="fa fa-users"></i><span>380</span></li>
												<li><i class="fa fa-comment-o"></i><span>12</span></li>
											</ul>
										</div>
										<div class="text-bar">
											<p>free</p>
										</div>
									</div>
								</div>	
							</div>
						</div>
						<div class="course-carousel-content">
							<div class="popular-course">
								<div class="img">
									<img src="img/coures4.jpg" alt="">
								</div>
								<div class="text-panel">
									<div class="text">
										<h3>Numbers</h3>
									</div>
									<div class="border"></div>
									<div class="icon-text">
										<div class="icon">
											<ul>
												<li><i class="fa fa-users"></i><span>380</span></li>
												<li><i class="fa fa-comment-o"></i><span>4</span></li>
											</ul>
										</div>
										<div class="text-bar">
											<p>free</p>
										</div>
									</div>
								</div>	
							</div>
						</div>
						<div class="course-carousel-content">
							<div class="popular-course">
								<div class="img">
									<img src="img/coures5.jpg" alt="">
								</div>
								<div class="text-panel">
									<div class="text">
										<h3>Quran</h3>
									</div>
									<div class="border"></div>
									<div class="icon-text">
										<div class="icon">
											<ul>
												<li><i class="fa fa-users"></i><span>380</span></li>
												<li><i class="fa fa-comment-o"></i><span>4</span></li>
											</ul>
										</div>
										<div class="text-bar">
											<p>free</p>
										</div>
									</div>
								</div>	
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--Popular Course End-->
	<!-- star time line -->
	<div class="timeLine" id="KNOWN">
        <div class="container">
            <div class="timeLine-content">
                <div class="year">2022</div>
                <div class="content left">
                    <h3>What is Autism spectrum disorder (ASD) ?</h3>
                    <p>In the United States there are more than 1 million children under the age of 11 with autism spectrum disorders. These children often struggle to recognize basic facial emotions, which makes it more difficult to maintain friendships and engage in social activities. These skills must be acquired through intensive behavioral therapies, which are often expensive, difficult to obtain, and inconsistently delivered.</p>
                </div>
                <div class="clearFix"></div>
                <div class="content right">
                   <h3>What is benefit of this project?</h3>
                   <p>We have created a system that works on measurements of blood pressure, Temperature and ...etc , a small screen and headphones for education with audio and video from a distance through a website or mobile application. The program recognizes and names people's emotions when a young person interacts with them through a Google Glass speaker or screen.</p>
               </div>
               <div class="clearFix"></div>
               <div class="year">2023</div>
               <div class="content left">
                   <h3>What do doctors notice about their children?</h3>
                   <p>Doctors noticed that their autistic children made greater eye contact and interacted with others after using the treatment regularly for one to three months. Additionally, it tracks the quantity and nature of eye contact, adding another level of behavioral intervention.</p>
               </div>
               <div class="clearFix"></div>
               <div class="content right">
                   <h3>Is it easy to learn for children with autism through this application ?</h3>
                   <p>According to a pilot study conducted by researchers at Stanford University School of Medicine, children with autism were able to enhance their social skills by using smartphone software along with Google Glass to help them understand the emotions that are expressed in people's facial expressions.</p>
               </div>
               <div class="clearFix"></div>
            </div>
        </div>
    </div>
    <!-- end time line -->
	<!--make Success Start-->
	<div class="success-col">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="success-bar">
						<div class="title">
							<h2>make your success a priority</h2>
							<h4>begin your education Autism EAEAT today!</h4>
						</div>
						<div class="button-col">
							<div class="button-left">
								<div class="button-effiect"></div>
								<a href="Reg.php">enroll today!</a>
							</div>
							<div class="button-right">
								<div class="button-effiect"></div>
								<?php
								if(isset($_COOKIE["user_id"])) {
								echo '<a href="lev1.php">view the Education catelog</a>';
								} else {
								echo '<a href="#">view the Education catelog</a>';
								}
								?>
							</div>
						</div>
					</div>	
				</div>
			</div>
		</div>
	</div>
	<!--make Success End-->
	<!--WelCome Start-->
	<div class="about-col">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="heading-col">
						<h2>about us</h2>
						<div class="border"></div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-sm-12 col-xs-12">
					<div class="about-us">
						<h3>Welcome To Project Team</h3>
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
	<!--Footer main Start-->
	<div class="footer-distributed">
		<div class="footer-left">

			<h3>Graduation Project in <span>AUTISM</span> </h3>
			<p class="footer-company-name">AUTISM EAEAT &copy; 2022/2023</p>
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