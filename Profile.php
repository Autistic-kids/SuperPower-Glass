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
	<link rel="stylesheet" href="css/simplyCountdown.theme.losange.css">
	<link rel="stylesheet" href="css/linearicons.css">
	<!--Main StyleSheet-->
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/responsive.css">
	<link rel="stylesheet" href="css/Profile.css">
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

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
	  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<body>

	<?php
	// start get profiel data from check API by User id
	$data =
		[
			'ID' => $_COOKIE['user_id'],

		];
	$url = 'http://127.0.0.1/kidsfront/api/check.php';
	$context = stream_context_create(
		array(
			// use key 'http' even if you send the request to https
			'http' => array(
				//'header' and 'content' is optional
				'header' => "Content-type: application/x-www-form-urlencoded\r\n",
				'method' => 'POST',
				'content' => http_build_query($data)
			)
		)
	);
	$result = file_get_contents($url, true, $context);
	$array = json_decode($result, true);


	if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['name'])) { 
		$data2 =
			[
				'ID' => $_COOKIE['user_id'],
				'name' => $_POST['name'],
				'phone' => $_POST['phone'],
				'email' => $_POST['email'],
				'pass' => $array['password'],
			];
		//print_r($data2); //print sended array
	
		$url2 = 'http://127.0.0.1/kidsfront/api/editData.php';
		$context2 = stream_context_create(
			array(
				// use key 'http' even if you send the request to https
				'http' => array(
					//'header' and 'content' is optional
					'header' => "Content-type: application/x-www-form-urlencoded\r\n",
					'method' => 'POST',
					'content' => http_build_query($data2)
				)
			)
		);
		$result2 = file_get_contents($url2, true, $context2);
		$array2 = json_decode($result2, true);
		//echo $result2; // print response from api
		echo '<script>alert("Profile Data updated")</script>';
	}
	if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['new-pass'])) { // if post request send update data request to editdata API
	
		if ($_POST['new-pass'] == $_POST['re-pass'] && $_POST['old-pass'] == $array['password']) {

			$data3 =
				[
					'ID' => $_COOKIE['user_id'],
					'pass' => $_POST['new-pass'],
					'name' => $array['full name'],
					'phone' => $array['phone'],
					'email' => $array['email'],
				];
			//print_r($data3); //print sended array
	
			$url3 = 'http://127.0.0.1/kidsfront/api/editData.php';
			$context3 = stream_context_create(
				array(
					// use key 'http' even if you send the request to https
					'http' => array(
						//'header' and 'content' is optional
						'header' => "Content-type: application/x-www-form-urlencoded\r\n",
						'method' => 'POST',
						'content' => http_build_query($data3)
					)
				)
			);
			$result3 = file_get_contents($url3, true, $context3);
			$array3 = json_decode($result3, true);
			//echo $result2; // print response from api
			echo '<script>alert("password updated")</script>';
		} else {
			echo '<script>alert("Password not match")</script>';
		}
	}


	?>

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
								if (isset($_COOKIE["user_id"])) {
									echo '<li><a href="api/ProfilePic.php"><i class="fa fa-user-o"></i><span>Profile</span></a></li>';
									echo '<li><a href="api/logout.php"><i class=""></i><span>Logout</span></a></li>';
								} else {
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
		<!--banner Start-->
		<div class="banner-col">
			<div class="container">
				<div class="overlay"></div>
				<div class="row">
					<div class="col-md-12">
						<div class="banner">
							<h2>Profile Setting</h2>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--banner End-->
		<!--------------------------->
		<!--------------------------->
		<!--------------------------->
		<!--------------------------->
		<div class="contact-col">
			<div class="container">
				<div class="profile">
					<img src="api/profile.jpg" class="img" alt="">
					<!-- <button><img src="img/icons/up.svg" class="imgsmall" alt=""></button> -->
				</div>
				<form class="fileUpload" action="api/ProfilePic.php" method="post" enctype="multipart/form-data">
					<input class="upload" type="file" name="Pimage" id="fileToUpload">
					<input class="button" type="submit" value="Upload Image" name="submit" >
				</form>
				<style>
								
				</style>
				<div class="row" style="margin-top: 30px;">
					<div class="col-md-12 col-sm-7 col-xs-12">
						<div class="input-feild">
							<div class="heading">
								<h2>Edit Profile Page</h2>
							</div>
							<div class="input">
								<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
									<div class="subject">
										<label>Full Name *</label>
										<input type="text" class="form-control" name="name" placeholder="Mohamed Amr"
											value=<?php echo $array['full name']; ?>>
									</div>
									<div class="subject">
										<label>Phone *</label>
										<input type="number" class="form-control" name="phone"
											placeholder="+201122334455" value=<?php echo $array['phone']; ?>>
									</div>
									<div class="subject">
										<label>Email *</label>
										<input type="email" class="form-control" name="email"
											placeholder="test@gmail.com" value=<?php echo $array['email']; ?>>
									</div>
									<div class="button">
										<button>Save & Change</button>
									</div>
								</form>

							</div>



							<div class="input">
								<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
									<div class="name-email">
										<div class="name">
											<label>Old Password *</label>
											<input type="password" name="old-pass" class="form-control"
												placeholder="* * * * * * * *">
										</div>
										<div class="email">
											<label>Password Requirments</label>
											<p class="font">to create a new password,you have to meet all the following
												Requirments:</p>
											<p class="font">at minimum 8 character <br>
												at least one special character <br>
												can't be the same as a pervios password</p>
										</div>
									</div>
									<div class="name-email">
										<div class="name">
											<label>New Password *</label>
											<input type="password" name="new-pass" class="form-control"
												placeholder="* * * * * * * *">
										</div>
									</div>
									<div class="name-email">
										<div class="name">
											<label>Confirm Password *</label>
											<input type="password" name="re-pass" class="form-control"
												placeholder="* * * * * * * *">
										</div>
									</div>
									<div class="button">
										<button>Save & Change</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!--------------------------->
		<!--------------------------->
		<!--------------------------->
		<!--------------------------->
		<!--Footer main Start-->
		<div class="footer-distributed">
			<div class="footer-left">

				<h3>Graduation Project in <span>AUTISM</span> </h3>
				,<p class="footer-company-name">Autistic Kids &copy; 2022</p>
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