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
								<p>Currently, there is no medication that can cure autism spectrum disorder (ASD) or all of its symptoms.But some medications, particularly those that target specific behaviours, can help treat some ASD symptoms.
									The use of any medicines not recognised by the American Food and Drug Administration (FDA) to treat the symptoms of autism or other conditions is not encouraged or supported by NICHD.
									Medication is frequently prescribed by medical professionals to address a particular behaviour, such as aggression or self-harm.
									A person with autism can concentrate on other things, like learning and communication, by minimising a symptom.
									According to research, using medication in conjunction with behavioural therapies maximises its effectiveness.</p>
								<p>Some antipsychotic medications, including risperidone and aripripazole, have FDA approval for the treatment of ASD-related irritability in children between specific ages. Parents should discuss any medications for children with ASD with their child's medical professionals.
									Although there are other medications that can help with autism symptoms, the FDA has not given them approval for this particular use. Some of the medications on this list are not permitted for use by people under the age of 18. For detailed information on the medications listed below, please consult the FDA.			
									Each medication carries some serious risks. To ensure the safe use of any medication, families should collaborate closely with their children's healthcare providers</p>
								<a href="https://www.integrityinc.org/what-are-the-5-types-of-autism/"><p class="border-left" style="font-size: 24px;">Selective serotonin re-uptake inhibitors (SSRIs)</p></a>
								<ol style="list-style-type: square; margin-left:20px; font-size: 14px; margin-top: -10px">
									<li>This group of antidepressants treats some problems that result from imbalances in the body's chemical systems.</li>
									<li>SSRIs might reduce the frequency and intensity of repetitive behaviors; decrease anxiety, irritability, tantrums, and aggressive behavior; and improve eye contact.</li>
								</ol>
								<p class="border-left" style="font-size: 24px;">Tricyclics </p>
								<ol style="list-style-type: square; margin-left:20px; font-size: 14px; margin-top: -6px">
									<li>These medications are another type of antidepressant used to treat depression and obsessive-compulsive behaviors.</li>
									<li>These drugs seem to cause more minor side effects than do SSRIs. They are sometimes more effective than SSRIs for treating certain people and certain symptoms.</li>
								</ol>
								<p class="border-left" style="font-size: 24px;">Psychoactive or anti-psychotic medications </p>
								<ol style="list-style-type: square; margin-left:20px; font-size: 14px; margin-top: -6px">
									<li>These types of medications affect the brain of the person taking them. The anti-psychotic drug risperidone is approved for reducing irritability in 5-to-16-year-olds with autism.</li>
									<li>These medications can decrease hyperactivity, reduce stereotyped behaviors, and minimize withdrawal and aggression among people with autism.</li>
								</ol>
								<p class="border-left" style="font-size: 24px;">Anti-anxiety medications </p>
								<ol style="list-style-type: square; margin-left:20px; font-size: 14px; margin-top: -6px">
									<li>This group of medications can help relieve anxiety and panic disorders, which are often associated with ASD.</li>
								</ol>
								<p class="border-left" style="font-size: 24px;">Stimulants </p>
								<ol style="list-style-type: square; margin-left:20px; font-size: 14px; margin-top: -6px">
									<li>This group of medications can help to increase focus and decrease hyperactivity in people with autism. They are particularly helpful for those with mild ASD symptoms.</li>
								</ol>
								<p class="border-left" style="font-size: 24px;">Anticonvulsants </p>
								<ol style="list-style-type: square; margin-left:20px; font-size: 14px; margin-top: -6px">
									<li>These medications treat seizures and seizure disorders, such as epilepsy. (Seizures are attacks of jerking or staring and seeming frozen)</li>
									<li>Almost one-third of people with autism symptoms have seizures or seizure disorders</li>
								</ol>
								<p>Refrance:  <a class="hover-underline-animation" style="font-size: 16px;" href="https://www.autismspeaks.org/tool-kit/atnair-p-medication-decision-aid">www.autismspeaks.org</a></p>
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
												<a href="essay_Teach.php"><h3>How to teach autistic children ?</h3></a>
							    				<p>9 Feb, 2022</p>
							    			</div>
							    		</div>
							    		<div class="item">
							    			<div class="img">
							    				<img src="img/blog5.jpg" alt="">
							    			</div>
							    			<div class="text">
							    				<a href="essay_Treat.php"><h3>What is the medication Treatment for Autism ?</h3></a>
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