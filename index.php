<?php

if (isset($_POST['submit'])) {
$name = $_POST['name'];
$mailFrom = $_POST['email'];
$message = $_POST['message'];

$mailTo = "harivenkat0506@gmail.com";
$headers = "From: ".$mailFrom;
$subject = 'Contact Request From '.$name;
$txt = "You have received an e-mail from ".$name.".\n\n".$mailFrom."\n\n".$message;

mail($mailTo, $subject, $txt);

}
?>

<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Profile &mdash; Free Website Template, Free HTML5 Template by freehtml5.co</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by freehtml5.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="freehtml5.co" />

	<!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FreeHTML5.co
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Space+Mono" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
	<div class="fh5co-loader"></div>
	
	<div id="page">	
	<header id="fh5co-header" class="fh5co-cover js-fullheight" role="banner" style="background-image:url(images/cover_bg_3.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t js-fullheight">
						<div class="display-tc js-fullheight animate-box" data-animate-effect="fadeIn">
							<div class="profile-thumb" style="background: url(images/user-4.jpg);"></div>
							<h1><span>Harish V</span></h1>
							<h3><span>Web Developer / IOT </span></h3>
							<p>
								<ul class="fh5co-social-icons">
									<li><a href="https://www.twitter.com"><i class="icon-twitter2"></i></a></li>
									<li><a href="https://www.facebook.com"><i class="icon-facebook2"></i></a></li>
									<li><a href="https://www.linkedin.com"><i class="icon-linkedin2"></i></a></li>
									<li><a href="https://www.instagram.com"><i class="icon-instagram2"></i></a></li>
								</ul>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<div id="fh5co-about" class="animate-box">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>About Me</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<ul class="info">
						<li><span class="first-block">Full Name:</span><span class="second-block">Harish V</span></li>
						<li><span class="first-block">Phone:</span><span class="second-block">+91 8610558973</span></li>
						<li><span class="first-block">Email:</span><span class="second-block">harivenkat0506@gmail.com</span></li>
						<li><span class="first-block">Website:</span><span class="second-block">www.yoursite.com</span></li>
						<li><span class="first-block">Address:</span><span class="second-block">No:178,Vaniyar Street,New Thirupachur,Thiruvallur-TamilNadu-India-602001</span></li>
					</ul>
				</div>
				<div class="col-md-8">
					<h2>Hello There!</h2>
					<p>Myself HARISH V  Im currently pursuing B.E computer science engineering(CSE) in Prathyusha Engineering College. My wish is to become an entrepreneur  and also in the field of software. </p>
					<p>I  have some experience to work on web developing and in IOT domain.I did a project in IOT domain and won 1st prizes in Project Expo which is help in TJS Engineering college.I can solve Logical Problems using Python Programming .I hold SILVER BADGE in HackerRank and my aim is to get Gold Badge soon...</p>
					<p>
						<ul class="fh5co-social-icons">
							<li><a href="https://www.twitter.com"><i class="icon-twitter2"></i></a></li>
									<li><a href="https://www.facebook.com"><i class="icon-facebook2"></i></a></li>
									<li><a href="https://www.linkedin.com"><i class="icon-linkedin2"></i></a></li>
									<li><a href="https://www.instagram.com"><i class="icon-instagram2"></i></a></li>
						</ul>
					</p>
				</div>
			</div>
		</div>
	</div>

	<div id="fh5co-resume" class="fh5co-bg-color">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>My Resume</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 col-md-offset-0">
					<ul class="timeline">
						<li class="timeline-heading text-center animate-box">
							<div><h3>Work Experience</h3></div>
						</li>
						<li class="animate-box timeline-unverted">
							<div class="timeline-badge"><i class="icon-suitcase"></i></div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h3 class="timeline-title">Web Developer</h3>
									<span class="company">PEC - 2019 - Current</span>
								</div>
								<div class="timeline-body">
									<p>"love what we do and we do what our clients love & work with great clients all over the world to create thoughtful and purposeful websites." </p>
								</div>
							</div>
						</li>
						<li class="timeline-inverted animate-box">
							<div class="timeline-badge"><i class="icon-suitcase"></i></div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h3 class="timeline-title">IOT Developer</h3>
									<span class="company">PEC - 2017 - 2019</span>
								</div>
								<div class="timeline-body">
									<p>"As the Internet of things advances, the very notion of a clear dividing line between reality and virtual reality becomes blurred, sometimes in creative ways."</p>
								</div>
							</div>
						</li>
						<li class="animate-box timeline-unverted">
							<div class="timeline-badge"><i class="icon-suitcase"></i></div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h3 class="timeline-title">UI/UX Designer</h3>
									<span class="company">PEC - 2019</span>
								</div>
								<div class="timeline-body">
									<p>"UI is the saddle, the stirrups, & the reins. UX is the feeling you get being able to ride the horse."</p>
								</div>
							</div>
						</li>

						<br>
						<li class="timeline-heading text-center animate-box">
							<div><h3>Education</h3></div>
						</li>
						<li class="timeline-inverted animate-box">
							<div class="timeline-badge"><i class="icon-graduation-cap"></i></div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h3 class="timeline-title">Bachelors Degree</h3>
									<span class="company">PEC  - 2017 - 2021</span>
								</div>
								<div class="timeline-body">
									<p>"It's a Foundation for all who wants its carrier to become Brighter."</p>
								</div>
							</div>
						</li>
						<li class="animate-box timeline-unverted">
							<div class="timeline-badge"><i class="icon-graduation-cap"></i></div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h3 class="timeline-title">Masters Degree</h3>
									<span class="company">After - 2023</span>
								</div>
								<div class="timeline-body">
									<p>"Education is the most powerful weapon which you can use to change the world."</p>
								</div>
							</div>
						</li>
						
						<li class="timeline-inverted animate-box">
							<div class="timeline-badge"><i class="icon-graduation-cap"></i></div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h3 class="timeline-title">NPTEL Course</h3>
									<span class="company">PEC - 2018</span>
								</div>
								<div class="timeline-body">
									<p>"Introduction to Programming in C its not end Many more to come....ML loading...."</p>
								</div>
							</div>
						</li>
						<li class="animate-box timeline-unverted">
							<div class="timeline-badge"><i class="icon-graduation-cap"></i></div>
							<div class="timeline-panel">
								<div class="timeline-heading">
									<h3 class="timeline-title">Graduation</h3>
									<span class="company">College PEC - 2017 - 2021</span>
								</div>
								<div class="timeline-body">
									<p>"Life is ten percent what happens to you and ninety percent how you respond to it."</p>
								</div>
							</div>
						</li>
			    	</ul>
				</div>
			</div>
		</div>
	</div>
	

	<div id="fh5co-features" class="animate-box">
		<div class="container">
			<div class="services-padding">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
						<h2>My Services</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 text-center">
						<div class="feature-left">
							<span class="icon">
								<i class="icon-paintbrush"></i>
							</span>
							<div class="feature-copy">
								<h3>Python</h3>
								<p>"Everyone knows that any scripting language shootout that doesn't show Python as the best language is faulty by design." </p>
							</div>
						</div>
					</div>
					
					<div class="col-md-4 text-center">

						<div class="feature-left">
							<span class="icon">
								<i class="icon-briefcase"></i>
							</span>
							<div class="feature-copy">
								<h3>Web Design</h3>
								<p>"If you're already a front-end developer, well, pretend you're also wearing a pirate hat."</p>
							</div>
						</div>

					</div>
		
                   
					<div class="col-md-4 text-center">
						<div class="feature-left">
							<span class="icon">
								<i class="icon-briefcase"></i>
							</span>
							<div class="feature-copy">
								<h3>AI & ML</h3>
								<p>"We can build a much brighter future where humans are relieved of menial work using AI capabilities."</p>
							</div>
						</div>
					</div>
					
				
           </div>
										
				
			</div>
		</div>
	</div>


	<div id="fh5co-skills" class="animate-box">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Skills</h2>
				</div>
			</div>
			<div class="row row-pb-md">
				<div class="col-md-3 col-sm-6 col-xs-12 text-center">
					<div class="chart" data-percent="95"><span><strong>HTML5</strong>95%</span></div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12 text-center">
					<div class="chart" data-percent="93"><span><strong>CSS3</strong>93%</span></div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12 text-center">
					<div class="chart" data-percent="90"><span><strong>JavaScript</strong>85%</span></div>
				</div>

				<div class="col-md-3 col-sm-6 col-xs-12 text-center">
					<div class="chart" data-percent="89"><span><strong>PHP</strong>89%</span></div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12 text-center">
					<div class="chart" data-percent="85"><span><strong>MySQL</strong>85%</span></div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12 text-center">
					<div class="chart" data-percent="90"><span><strong>Python</strong>90%</span></div>
				</div>
				
				<div class="col-md-3 col-sm-6 col-xs-12 text-center">
					<div class="chart" data-percent="90"><span><strong>Java</strong>90%</span></div>
				</div>
				
				<div class="col-md-3 col-sm-6 col-xs-12 text-center">
					<div class="chart" data-percent="90"><span><strong>C</strong>90%</span></div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12 text-center">
					<div class="chart" data-percent="90"><span><strong>RPA Uipath</strong>75%</span></div>
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12 text-center">
					<div class="chart" data-percent="90"><span><strong>BootStrap3</strong>90%</span></div>
				</div>
				
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="progress-wrap">
						<h3><span class="name-left">HTML5/CSS3</span><span class="value-right">95%</span></h3>
						<div class="progress">
						  <div class="progress-bar progress-bar-1 progress-bar-striped active" role="progressbar"
						  aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:90%">
						  </div>
						</div>
					</div>
					
					<div class="progress-wrap">
						<h3><span class="name-left">PHP</span><span class="value-right">80%</span></h3>
						<div class="progress">
						  <div class="progress-bar progress-bar-3 progress-bar-striped active" role="progressbar"
						  aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:80%">
						  </div>
						</div>
					</div>
					<div class="progress-wrap">
						<h3><span class="name-left">Java</span><span class="value-right">85%</span></h3>
						<div class="progress">
						  <div class="progress-bar progress-bar-4 progress-bar-striped active" role="progressbar"
						  aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width:85%">
						  </div>
						</div>
					</div>
				</div>
				
                   <div class="col-md-6">
					
					<div class="progress-wrap">
						<h3><span class="name-left">Python</span><span class="value-right">85%</span></h3>
						<div class="progress">
						  <div class="progress-bar progress-bar-4 progress-bar-striped active" role="progressbar"
						  aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width:85%">
						  </div>
						</div>
					</div>
					<div class="progress-wrap">
						<h3><span class="name-left">JavaScript</span><span class="value-right">75%</span></h3>
						<div class="progress">
						  <div class="progress-bar progress-bar-4 progress-bar-striped active" role="progressbar"
						  aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width:75%">
						  </div>
						</div>
					</div>
					<div class="progress-wrap">
						<h3><span class="name-left">RPA Uipath</span><span class="value-right">70%</span></h3>
						<div class="progress">
						  <div class="progress-bar progress-bar-4 progress-bar-striped active" role="progressbar"
						  aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width:75%">
						  </div>
						</div>
					</div>
				</div>
				</div>
			</div>
		</div>
	

	<div id="fh5co-work" class="fh5co-bg-dark">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Work</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3 text-center col-padding animate-box">
					<a href="#" class="work" style="background-image: url(images/portfolio-1.jpg);">
						<div class="desc">
							<h3>Project Name</h3>
							<span>Illustration</span>
						</div>
					</a>
				</div>
				<div class="col-md-3 text-center col-padding animate-box">
					<a href="#" class="work" style="background-image: url(images/portfolio-2.jpg);">
						<div class="desc">
							<h3>Project Name</h3>
							<span>Brading</span>
						</div>
					</a>
				</div>
				<div class="col-md-3 text-center col-padding animate-box">
					<a href="#" class="work" style="background-image: url(images/portfolio-3.jpg);">
						<div class="desc">
							<h3>Project Name</h3>
							<span>Illustration</span>
						</div>
					</a>
				</div>
				<div class="col-md-3 text-center col-padding animate-box">
					<a href="#" class="work" style="background-image: url(images/portfolio-4.jpg);">
						<div class="desc">
							<h3>Project Name</h3>
							<span>Design</span>
						</div>
					</a>
				</div>
				<div class="col-md-3 text-center col-padding animate-box">
					<a href="#" class="work" style="background-image: url(images/portfolio-5.jpg);">
						<div class="desc">
							<h3>Project Name</h3>
							<span>Website</span>
						</div>
					</a>
				</div>
				<div class="col-md-3 text-center col-padding animate-box">
					<a href="#" class="work" style="background-image: url(images/portfolio-6.jpg);">
						<div class="desc">
							<h3>Project Name</h3>
							<span>Illustration</span>
						</div>
					</a>
				</div>
				<div class="col-md-3 text-center col-padding animate-box">
					<a href="#" class="work" style="background-image: url(images/portfolio-7.jpg);">
						<div class="desc">
							<h3>Project Name</h3>
							<span>Brading</span>
						</div>
					</a>
				</div>
				<div class="col-md-3 text-center col-padding animate-box">
					<a href="#" class="work" style="background-image: url(images/portfolio-8.jpg);">
						<div class="desc">
							<h3>Project Name</h3>
							<span>Illustration</span>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>

	<div id="fh5co-blog">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Post on Medium</h2>
					<p>"When people share your story on Facebook and Twitter, it will be more prominent in news feeds, making people more likely to click on it."</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="fh5co-blog animate-box">
						<a href="#" class="blog-bg" style="background-image: url(images/1.jpg);"></a>
						<div class="blog-text">
							<span class="posted_on">Mar. 15th 2017</span>
							<h3><a href="#">Cricket</a></h3>
							<p>"Always Love to play Cricket at anytime and anywhere. Sachin Tendulkar the man who makes everyone Proud."</p>
							<ul class="stuff">
								<li><i class="icon-heart2"></i>249</li>
								<li><i class="icon-eye2"></i>308</li>
								<li><a href="#">Read More<i class="icon-arrow-right22"></i></a></li>
							</ul>
						</div> 
					</div>
				</div>
				<div class="col-md-4">
					<div class="fh5co-blog animate-box">
						<a href="#" class="blog-bg" style="background-image: url(images/5.jpg);"></a>
						<div class="blog-text">
							<span class="posted_on">Mar. 15th 2017</span>
							<h3><a href="#">Surfing at Philippines</a></h3>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
							<ul class="stuff">
								<li><i class="icon-heart2"></i>249</li>
								<li><i class="icon-eye2"></i>308</li>
								<li><a href="#">Read More<i class="icon-arrow-right22"></i></a></li>
							</ul>
						</div> 
					</div>
				</div>
				<div class="col-md-4">
					<div class="fh5co-blog animate-box">
						<a href="#" class="blog-bg" style="background-image: url(images/3.jpg);"></a>
						<div class="blog-text">
							<span class="posted_on">Mar. 15th 2016</span>
							<h3><a href="#">Capture Living On Uderwater</a></h3>
							<p>"The fish in the water that is thirsty needs serious professional counseling."</p>
							<ul class="stuff">
								<li><i class="icon-heart2"></i>249</li>
								<li><i class="icon-eye2"></i>308</li>
								<li><a href="#">Read More<i class="icon-arrow-right22"></i></a></li>
							</ul>
						</div> 
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div id="fh5co-started" class="fh5co-bg-dark">
		<div class="overlay"></div>
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Hire Me!</h2>
					
				</div>
			</div>
		</div>
	</div>

	<div id="fh5co-consult">
		<div class="video fh5co-video" style="background-image: url(images/user-8.jpg);">
			<div class="overlay"></div>
		</div>
		<div class="choose animate-box">
			
			<h2>Contact</h2>
			
    	
			
            <form method="post" action="index.php">
				<div class="row form-group">
					<div class="col-md-6">
						<input type="text" id="fname" name="name"  class="form-control" placeholder="Your name">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-md-6">
						
					</div>
				</div>

				<div class="row form-group">
					<div class="col-md-12">
						<input type="text" id="femail" name="email"  class="form-control" placeholder="Your email address">
					</div>
				</div>

				<div class="row form-group">
					<div class="col-md-12">
						
					</div>
				</div>

				<div class="row form-group">
					<div class="col-md-12">
						<textarea name="message" id="fmessage"  cols="20" rows="10" class="form-control" placeholder="Say something about us"></textarea>
					</div>
				</div>
				<div class="form-group">
					<input name="submit" type="submit" value="Send Message" class="btn btn-primary">
				</div>

			</form>	
		</div>
	</div>

	
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15541.68549189196!2d79.86883051954572!3d13.13579974830559!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a52906189d231c1%3A0x638165c9970cbd1b!2sVaacheeswarar+Temple+Thirupachur!5e0!3m2!1sen!2sin!4v1565616869486!5m2!1sen!2sin" width="1400" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
	
	</div>
	
	

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up22"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Easy PieChart -->
	<script src="js/jquery.easypiechart.min.js"></script>
	<!-- Google Map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
	<script src="js/google_map.js"></script>
	
	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>

