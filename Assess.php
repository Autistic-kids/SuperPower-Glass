<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Meta -->
	<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
	<meta name="description" content="AUTISM">
	<meta name="Dodger" content="">
    <!-- font-awesome -->
    <link rel="stylesheet" 
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
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
	<link rel="stylesheet" href="css/footer.css">
	<link rel="stylesheet" href="css/swip_style.css">
    <link rel="stylesheet" href="css/swiper.min.css">
	<!--Main StyleSheet-->
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/responsive.css">
	<link rel="stylesheet" href="style.css">
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
							<li><a href=""><i class="fa fa-pinterest-p"></i></a></li>
							<li><a href=""><i class="fa fa-linkedin"></i></a></li>
							<li><a href=""><i class="fa fa-twitter"></i></a></li>
							<li><a href=""><i class="fa fa-google-plus"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-6 col-sm-6 col-xs-12">
					<div class="login-signup">
						<ul>
						<?php
							if(isset($_COOKIE["user_id"])) {
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
						<h2>Assessment</h2>
						<p>To Contact A Doctor</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--banner End-->
	<div class="contact-col">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-sm-7 col-xs-12">
					<div class="input-feild">
						<div class="heading">
							<h2>Child Assessment</h2>
						</div>
						<div class="input">
							<form action="api/pdf.php" method="post" enctype="multipart/form-data">
								<!-- <p style="font-size: 16px; font-weight: 0.2;">momf fvmofvm vfmvofsv vofsmvfv</p> -->
								<div class="name-email">
									<div class="name">
										<label>Name *</label>
										<input type="text" class="form-control" required="required" name="name">
									</div>
									<div class="email">
										<label>Age *</label>
										<input type="number" class="form-control" required="required"name="age">
									</div>
								</div>
								<div class="subject">
									<label>Number Parents *</label>
									<input type="tel" class="form-control" required="required" name="phone">
								</div>
								<div class="subject">
									<label>Email *</label>
									<input type="email" class="form-control" required="required" name="email">
								</div>
								<div class="subject">
									<label>City *</label>
									<input type="text" class="form-control" required="required" >
								</div>
								<div class="subject">
									<label>District/County/Province/State *</label>
									<input type="text" class="form-control" required="required">
								</div>
								<div class="subject">
									<label>Address *</label>
									<input type="text" class="form-control" required="required" name="address">
								</div>
								<div class="name-email">
									<div class="name">
										<label>Diseases *</label>
										<input type="text" class="form-control" required="required" name="disease">
									</div>
									<div class="email">
										<label>Date of Diseases *</label>
										<input type="date" class="form-control" required="required" name="DateOfDisease">
									</div>
								</div>
								<div class="subject">
									<label>Medicine *</label>
									<input type="text" class="form-control" required="required" name="medicine">
								</div>
								<div class="all-upload row">
									<div class="uplaod col-xs-6 col-md-4" >
										<label class="drop-container">
										<span class="drop-title">Uplaod Image Kids</span>
										<input type="file" name="photo" id="photo" class="hidden-file" accept="image/jpeg" required>
										</label>

									</div>
									<div class="uplaod col-xs-6 col-md-4" >
										<label class="drop-container">
										<span class="drop-title">Uplaod Medical Report</span>
										<input type="file" name="photo2" id="photo2" class="hidden-file" accept="image/jpeg" required>
										</label>
									</div>
								</div>
								<div class="massage-body">
									<label>Notes *</label>
									<textarea class="form-control" name="notes" id="massage" cols="30" rows="10" ></textarea>
								</div>
								<div class="button">
									<button>Submit</button>
									<button><a href="mailto:kids.disease.app@gmail.com?subject=Reports">Send To Email</a></button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--Footer main Start-->
	<div class="footer-distributed">
		<div class="footer-left">

			<h3>Graduation Project in <span>AUTISM</span> </h3>
			<p class="footer-company-name">AUTISM EAEAT &copy; 2022</p>
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