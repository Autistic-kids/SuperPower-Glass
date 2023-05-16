<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Meta -->
	<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
	<meta name="description" content="AUTISM">
	<meta name="Dodger" content="ErrorThemes">
	<!--Title-->
	<title>Autism EAEAT</title>
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
	<link rel="stylesheet" href="css/simplyCountdown.theme.losange.css">
	<link rel="stylesheet" href="css/linearicons.css">
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
						<h2>Our Blog For Autsim</h2>
						<p>We Talk together what is Autism</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--banner End-->
	<!--Home Blog Start-->
	<div class="blog-col blog-single">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-sm-12 col-xs-12">
					<div class="blog-single">
						<div class="img">
							<img src="img/blog1.jpg" alt="">
						</div>
						<div class="blog-single-body">
							<div class="title">
								<h2>Main Types of Autism Spectrum Disorders</h2>
							</div>
							<div class="list">
								<ul>
									<li><i class="fa fa-user-o"><span>admin</span></i></li>
									<li><i class="fa fa-map-marker"><span>Cairo</span></i></li>
									<li><i class="fa fa-calendar-o"><span>10 may, 2022</span></i></li>
									<li class="block"><i class="fa fa-clock-o"><span>10.30 pm</span></i></li>
								</ul>
							</div>
							<div class="body-text">
								<p class="border-left" style="font-size: 24px;">Asperger’s Syndrome</p>
								<p>Prior to 2013, the term "Asperger's syndrome" was widely used, however now, doctors no longer refer to it by that name. The DSM-5 diagnostic handbook later classed it as level 1 autism spectrum disorder. However, Asperger's syndrome is sometimes used informally; in fact, it is more frequently used in autistic groups than level 1 spectrum condition.
									A kid with level 1 autism spectrum condition will be intelligent and verbally skilled above normal, but they will struggle with social communication. A kid with level 1 autism spectrum condition will often exhibit the symptoms listed below:</p>
								<ol style="list-style-type: square; margin-left:20px; font-size: 14px; margin-top: -10px">
									<li>Inflexibility in thought and behavior </li>
									<li>Challenges in switching between activities</li>
									<li>Executive functioning problems</li>
									<li>Flat monotone speech, the inability to express feelings in their speech, or change their pitch to fit their immediate environment</li>
									<li>Difficulty interacting with peers at school or home</li>
								</ol>
								<p class="border-left" style="font-size: 24px;">Rett Syndrome</p>
								<p>An infant is first diagnosed with the rare neurodevelopmental disease known as Rett syndrome. Although it can still be identified in boys, the condition primarily affects girls. Nearly every element of a child's life is impacted by the difficulties Rett syndrome poses. Fortunately, with the right care, your child can still enjoy and have a full life. You can spend time as a family and give the child encouragement to pursue their interests.<br>
									Common symptoms of Rett syndrome include:</p>
								<ol style="list-style-type: square; margin-left:20px; font-size: 14px; margin-top: -10px">
									<li>Loss of standard movement and coordination</li>
									<li>Challenges with communication and speech</li>
									<li>Breathing difficulties in some cases</li>
								</ol>
								<p class="border-left" style="font-size: 24px;">Childhood Disintegrative Disorder (CDD)</p>
								<p>A neurodevelopmental disorder called childhood disintegrative disorder (CDD), also referred to as Heller's syndrome or disintegrative psychosis, is characterised by the delayed onset of developmental issues with language, motor skills, or social function. A youngster enjoys typical development in these areas before hitting a wall between the ages of three and ten. For parents who were unaware that their child had autism issues all along, the loss of developmental progress can be incredibly upsetting.<br>
									Though experts have connected CDD to the neurobiology of the brain, the exact reason is uncertain. Boy patients with childhood disintegrative disorder are more prevalent. Only one girl will experience the disease out of every 10 cases, with nine boys.<br>A child with CDD will have normal development up until the point the disorder manifests, at which point abrupt regressions in more than two developmental domains start to happen. The following abilities and skills could be lost by the child:</p>
								<ol style="list-style-type: square; margin-left:20px; font-size: 14px; margin-top: -10px">
									<li>Toileting skills if they had already been established</li>
									<li>Acquired language or vocabularies</li>
									<li>Social skills and adaptive behaviors</li>
									<li>Some motor skills</li>
								</ol>
								<p class="border-left" style="font-size: 24px;">Kanner’s Syndrome</p>
								<p>Leo Kanner, a psychiatrist at John Hopkins University, first identified Kanner's condition as infantile autism in 1943. The illness is also referred to by doctors as a classic autistic disorder. Children that have Kanner's syndrome will seem attractive, awake, and clever while also having the following disorder-specific traits:</p>
								<ol style="list-style-type: square; margin-left:20px; font-size: 14px; margin-top: -10px">
									<li>Lack of emotional attachment with others</li>
									<li>Communication and interaction challenges</li>
									<li>Uncontrolled speech</li>
									<li>Obsession with handling objects</li>
									<li>A high degree of rote memory and visuospatial skills with major difficulties learning in other areas</li>
								</ol>
								<p class="border-left" style="font-size: 24px;">Pervasive Developmental Disorde <br><br> Not Otherwise Specified (PDD-NOS)</p>
								<p>A moderate form of autism known as Pervasive Developmental Disorder - Not Otherwise Specified (PDD-NOS) manifests a variety of symptoms. The most typical signs are difficulties with language and social development.
									Language, walking, and other motor skill development delays may occur in your child. You can detect this sort of autism by monitoring the child and noting what area the youngster has a lack in, such as interacting with people. When a person exhibits some but not all of the symptoms of autism, they are said to have PDD-NOS, which is also known as "subthreshold autism."</p>
								<p>Refrance:  <a class="hover-underline-animation" style="font-size: 16px;" href="https://www.integrityinc.org/what-are-the-5-types-of-autism/">www.integrityinc.org</a></p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-12 col-xs-12">
					<div class="blog-right">
						<div class="tab-panel">
							  <!-- Nav tabs -->
							  <ul class="nav nav-tabs" role="tablist">
							    <li role="presentation" class="active"><a href="#popular" aria-controls="popular">Popular</a></li>
							  </ul>
							  <!-- Tab panes -->
							  <div class="tab-content">
							    <div role="tabpanel" class="tab-pane active" id="popular">
							    	<div class="single-content">
							    		<div class="item">
							    			<div class="img">
							    				<img src="img/blog1.jpg" alt="">
							    			</div>
							    			<div class="text">
							    				<a href="essay_Types.php"><h3>What types of autism ?</h3></a>
							    				<p>12 Feb, 2022</p>
							    			</div>
							    		</div>
							    		<div class="item">
											<div class="img">
												<img src="img/blog3.jpg" alt="">
							    			</div>
							    			<div class="text">
												<a href="essay_Comm.php"><h3>How to communicate with autistic children ?</h3></a>
							    				<p>25 Sep, 2022</p>
							    			</div>
							    		</div>
							    		<div class="item">
											<div class="img">
												<img src="img/blog4.jpg" alt="">
							    			</div>
							    			<div class="text">
							    				<a href="essay_Treat.php"><h3>What is the medication Treatment for Autism ?</h3></a>
							    				<p>9 Feb, 2022</p>
							    			</div>
							    		</div>
							    		<div class="item">
							    			<div class="img">
							    				<img src="img/blog5.jpg" alt="">
							    			</div>
							    			<div class="text">
							    				<a href=""><h3>What medications can be taken ?</h3></a>
							    				<p>20 Aug, 2022</p>
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
	</div>
	<!--Home Blog End-->
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