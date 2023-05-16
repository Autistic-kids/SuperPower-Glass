<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Meta -->
	<meta name="viewport" content="width=device-width,initial-scale=1.0" />
	<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
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
	<link rel="stylesheet"
		href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@200;300;400;500;600;700;800&display=swap">
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
							<h2>Education</h2>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--banner End-->
		<!--Popular Course Start-->
		<div class="popular-course-col">
			<div class="container">
				<div class="row">
					<div class="heading-col">
						<h2>Level 4</h2>
						<div class="border"></div>
					</div>
					<div class="col-md-12">
						<div class="popular-course-carousel">
							<div class="course-carousel-content">
								<div class="popular-course">
									<div class="img">
										<img src="img/lvl/slok.jpg" alt="">
										 
									</div>
									<div class="text-panel">
										<div class="text">
											<h3>Decency</h3>
										</div>
										<div class="border"></div>
										<div class="btn-level">
											<button id="b_1" class=" bn btn2"onclick="playvideo(0)">Video</button>										
										</div>
									</div>
								</div>
							</div>
							<div class="course-carousel-content">
								<div class="popular-course">
									<div class="img">
										<img src="img/lvl/islam.jpg" alt="">
										 
									</div>
									<div class="text-panel">
										<div class="text">
											<h3>Pillars of islam</h3>
										</div>
										<div class="border"></div>
										<div class="btn-level">
											<button id="b_2" class=" bn btn1"onclick="playvideo(5)">Video</button>										
										</div>
									</div>
								</div>
							</div>
							<div class="course-carousel-content">
								<div class="popular-course">
									<div class="img">
										<img src="img/lvl/fatiha.jpg" alt=""onclick="playvideo(0)">
									</div>
									<div class="text-panel">
										<div class="text">
											<h3>AL-Ftiha (الفاتحه)</h3>
										</div>
										<div class="border"></div>
										<div class="btn-level">
											<button id="b_3" class=" bn btn2"onclick="playvideo(0)">Video</button>										
										</div>
									</div>
								</div>
							</div>
							<div class="course-carousel-content">
								<div class="popular-course">
									<div class="img">
										<img src="img/lvl/nas.jpg" alt="">
										 
									</div>
									<div class="text-panel">
										<div class="text">
											<h3>Al-Nas (الناس)</h3>
										</div>
										<div class="border"></div>
										<div class="btn-level">
											<button id="b_4" class=" bn btn1"onclick="playvideo(0)">Video</button>										
										</div>
									</div>
								</div>
							</div>
							<div class="course-carousel-content">
								<div class="popular-course">
									<div class="img">
										<img src="img/lvl/falaq.jpg" alt="">
									</div>
									<div class="text-panel">
										<div class="text">
											<h3>Al-falaq (الفلق)</h3>
										</div>
										<div class="border"></div>
										<div class="btn-level">
											<button id="b_5" class=" bn btn2"onclick="playvideo(0)">Video</button>
										</div>
									</div>
								</div>
							</div>
							<div class="course-carousel-content">
								<div class="popular-course">
									<div class="img">
										<img  src="img/lvl/ikhlas.jpg" alt="">
									</div>
									<div class="text-panel">
										<div class="text">
											<h3>Al-ikhlas (الاخلاص)</h3>
										</div>
										<div class="border"></div>
										<div class="btn-level">
											<button id="b_6" class="bn btn1"onclick="playvideo(0)">Video</button>
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
	<!-- <p id="para1">This is the initial text of Para1.</p>  -->
	<script>
		//  var para1 = document.getElementById("para1");
		function alertFunc() {
			document.cookie = "VID=3";
			document.getElementById("ViewInGlass").value = 'Stop Video';

		}
		function playvideo(x) {
			const btn = document.getElementById('ViewInGlass');
			if (parseInt(x) > 0) {
				document.cookie = "VID=" + parseInt(x);
				btn.style.display = 'block';
				setTimeout(alertFunc,15000)
			} else {
				document.cookie = "VID=0";
				btn.style.display = 'none';
			}
			// para1.innerText = enteredText
		}
	</script>
	<!--Popular Course End-->
	<div class="vid embed-responsive embed-responsive-16by9" style="margin: 0 100px;">
		<iframe id="Vid_1b" src="https://www.youtube.com/embed/TXH-qwmsWm0" title="آداب الطعام - تعليم الأطفال آداب الطعام" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
		<iframe id="Vid_2b" src="https://www.youtube.com/embed/dBx-C6oNs0w" title="5 Pillars of Islam for Kids - أركان الإسلام للأطفال - أركان الإسلام الخمسة للأطفال" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
		<iframe id="Vid_3b" src="https://www.youtube.com/embed/KCnCpyXWeKI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		<iframe id="Vid_4b" src="https://www.youtube.com/embed/9epHGxd6pOA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		<iframe id="Vid_5b" src="https://www.youtube.com/embed/Ma3RDlvt2l4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		<iframe id="Vid_6b" src="https://www.youtube.com/embed/qKGYLfQZuFw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	</div>
	<div class="blog-col blog-single">
		<div class="container">
			<div class="row">
			<form action="api/editData.php" method="post" >
				<input id="ViewInGlass" type="submit" value="View In Glasses" class="btn btn-success"
					style="float: right;" hidden  onclick="alert('Video Sent To Glass')">
			</form>
			</div>
		</div>
	</div>
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
<script src="js/edu4.js"></script>
</body>
</html>