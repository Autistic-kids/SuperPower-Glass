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
								<h2>Interacting with a Child Who Has Autism</h2>
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
								<p>Developmental disorders include autism spectrum disorder (ASD). Children's interactions and interpersonal communications are impacted. Since children can fall anywhere on the autism spectrum, the condition is known as a spectrum disorder.<br>
									The signs of ASD in children first appear at a young age. Both in adolescence and in adulthood, the symptoms persist. Healthcare professionals are unsure about the causes of ASD in some youngsters. They may have a mix of inherited genes and environmental triggers, depending on the situation.<br>
									Children with ASD have a hard time connecting with others. They struggle to look one other in the eyes. They tend to isolate themselves a lot. They could come out as uninterested in interacting with relatives.<br>
									However, some ASD kids could like continuing a conversation about an obsession with family members, friends, or even total strangers. The issue is that they might ramble on for too long. Alternatively, they might just discuss that one topic. This can alienate others.<br>
									It might be distressing if you feel like you just can't connect with a child or grandchild who has an ASD. However, understanding these conditions and what has worked for others might benefit you and your relationship.
								</p>
								<p class="border-left" style="font-size: 24px;">Breaking through the barriers of ASD</p>
								<p>ASD can't be cured. But with the right care, there is hope. Many kids can develop their communication and social skills. Mental health professionals and healthcare professionals have learned a lot about how to connect with these kids.
									The following are some things we know about kids with ASDs:</p>
								<ol style="list-style-type: square; margin-left:20px; font-size: 14px; margin-top: -10px">
									<li>They might not be able to decipher your nonverbal cues.
										If you grin or grimace, they might not respond.
									</li>
									<li>
										They read everything as literal.
										Be careful to convey your meaning clearly.
										Don't be surprised if the child asks what to tread on if you hurried them by telling them to "Step on it."
									</li>
									<li>They might be limited to being able to process one notion or thought at a time.
										Maintain clear and concise conversations.
									</li>
									<li>
										They could only wish to discuss the one subject in which they are truly interested at any one time.
										And they might want to bring it up repeatedly. 
									</li>
									<li>
										They might have a different perspective than you do. Even commonplace noises, tastes, sensations, scents, and images could pass you by. However, the child might experience bodily pain from these.
									</li>
								</ol>
								<p class="border-left" style="font-size: 24px;">Communication and interaction tips for ASD</p>
								<p>There are no set guidelines on how to interact with a youngster who has ASD. But many members of the family have found success with this advice:</p>
								<ol style="list-style-type: square; margin-left:20px; font-size: 14px; margin-top: -10px">
									<li>Be patient: A youngster with ASD frequently needs more time to digest information.
										You might have to speak more slowly to match their pace.
										Long pauses are often beneficial.
									</li>
									<li>Teach the kid healthy ways to vent their rage without coming out as violent.
										Children with ASD should be aware that they are free to express their displeasure and rage.
									</li>
									<li>Be tenacious yet also tough.
										If the youngster doesn't respond to you as you'd like, try not to let it bother you.
										Children with ASD may struggle to both express and regulate their emotions.
										They sometimes respond in a direct manner.
										Don't let this bother you. 
									</li>
									<li>Stay upbeat at all times.
										Positive reinforcement has the best effects on children with ASD.
										Make sure to acknowledge and reward good conduct frequently.
										Be kind when giving praise for positive behaviour.
									</li>
									<li>
										Neglect annoying attention-seeking behaviour.
										Sometimes a youngster with ASD will behave badly to seek your attention.
										The greatest method to stop this tendency is frequently to ignore it.
										Frequently praise and thank your child for his or her positive behaviour.
										
									</li>
									<li>Engage in physical interaction.
										The attention spans of ASD children are frequently short.
										Particularly when it comes to communication, this is true.
										Outdoor play and running about might be a better approach to spend time with one another.
										They'll be able to unwind and feel calmer as a result. 
									</li>
									<li>Be empathetic and respectful.
										Just like ordinary kids, children with ASD frequently need to be hugged.
										They occasionally require this support considerably more than normal kids do.
										However, some kids don't want to be touched at all, and even minimal contact might make them uncomfortable.
										Regard their private space.
										Never make a youngster accept physical affection against their will.
									</li>
									<li>
										Make love and interest known.
										Children with ASD may find it difficult to express their emotions.
										But you still need to let them know that you care.
										Make an effort to show that you are interested, caring, and supportive. 
									</li>
									<li>Take advice from your kid.
										Your child's unique abilities and needs may open your eyes to new perspectives on the world.
										Even though it could be challenging some days, taking time to unwind, laugh, and appreciate the special gift that is your child can bring you and your family many benefits.
									</li>
									<li>Believe.
										First and foremost, a child with autism is a child.
										They are a developing individual with a variety of potentials.
										Have faith in the child's abilities.
										Don't let a diagnosis limit the child.
									</li>
									<li>Take care of yourself. It’s OK to take a break. Join parent support groups. Or ask understanding family and friends to care for your child so you can recharge. School psychologists and counselors can also provide resources to help you</li>
								</ol>
								<p>Refrance:  <a class="hover-underline-animation" style="font-size: 16px;" href="https://www.urmc.rochester.edu/encyclopedia/content.aspx?contenttypeid=160&contentid=46">www.urmc.rochester.edu</a></p>

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