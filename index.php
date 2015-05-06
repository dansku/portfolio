<?php

	// Porfolio //
	$file = "folio.json";
	$json = json_decode(file_get_contents($file));

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Daniel Andrade</title>

	<!--styles-->
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<link href='//fonts.googleapis.com/css?family=Lato:100,300,400,700,100italic,300italic,400italic,700italic' rel='stylesheet' type='text/css'>
	<link href="css/style.css?v=1" rel="stylesheet">
</head>
<body>

	<!-- header -->
	<header>
		<div class="container">
			<div class="row">
				<div class="pullcontainer visible-xs">
					<a href="#" id="pull" class="pull"><i class="fa fa-bars fa-2x"></i></a>
					<img src="img/main-logo.png" alt="" class="logo_mobile">
				</div>
			</div>
			<div class="row hidden-xs text-center">
				<nav>
					<ul class="clearfix">
						<li><a href="#about" data-scroll>ABOUT ME</a></li>
						<li class="dot">.</li>
						<li><a href="#work" data-scroll>WORK</a></li>
						<li><a href="http://www.danielandrade.net"><img id="logo-img" src="img/main-logo.png" alt=""></a></li>
						<li><a href="#skills" target="_blank" data-scroll>SKILLS</a></li>
						<li class="dot">.</li>
						<li><a href="#contact" data-scroll>CONTACT</a></li>
					</ul>
				</nav>
			</div>
			<div class="row" id="mobile_menu">
				<nav>
					<ul class="clearfix mobile text-center">
						<li><a href="#about" data-scroll>ABOUT ME</a></li>
						<li><a href="#work" data-scroll>WORK</a></li>
						<li><a href="#skills" target="_blank" data-scroll>SKILLS</a></li>
						<li><a href="#contact" data-scroll>CONTACT</a></li>
					</ul>
				</nav>
			</div>
		</div>
		<div class="hero"></div>
	</header>

	<!-- about -->
	<section class="about" id="about">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<i class="fa fa-user bounce" style="font-size:42px; color: #282f35"></i>
					<h2>Hi!</h2>
					<p>I'm Daniel Andrade, an electronics engineer that fell in love with the web. For the past <span style="font-size:30px;">∞</span> years I have worked on many cool projects, as a full stack web developer as well as an embedded systems engineer.</p>
					</div>
			</div>
		</div>
	</section>

	<!-- work -->
	<section class="work" id="work">

			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<i class="fa fa-diamond bounce" style="font-size:42px; color: #282f35; margin-top:25px;"></i>
					<h1>Work</h1>
				</div>
			</div>

			<ul id="filters" class="clearfix">
				<li><span class="filter active" data-filter="web eng photo">All</span></li>
				<li><span class="filter" data-filter="web">Web</span></li>
				<li><span class="filter" data-filter="eng">Engineering</span></li>
				<li><span class="filter" data-filter="photo">Photography</span></li>
			</ul>

			<div id="portfoliolist">
				<ul class="ch-grid">
					<?php
					$i = 0;
					foreach ($json as $folio) {
						$i++;
					?>
						<!-- <?php echo $folio->name; ?> -->
						<li>
							<div class="ch-item" style="background-image: url(<?php echo $folio->image->thumb; ?>);">
								<div class="ch-info">
									<h3><?php echo $folio->name; ?></h3>
									<p>by Angela Duncan <a href="http://drbl.in/eOPF">View on Dribbble</a></p>
								</div>
							</div>
						</li>
								
					<?php } ?>
				</ul>
			</div>

	</section>

	<?php
	$i = 0;
	foreach ($json as $folio) {
 		$i++;
	?>
	<!-- modal-<?php echo $i?> -->
	<div class="modal fade" id="myModal-<?php echo $i; ?>" tabindex="-1" role="dialog" aria-labelledby="modal-<?php echo $i; ?>" aria-hidden="true">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title" id="myModalLabel"><?php echo $folio->name; ?></h4>
	      </div>
	      <div class="modal-body">
	        more information coming soon...
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	      </div>
	    </div>
	  </div>
	</div>

	<?php } ?>

	<!-- skills -->
	<section class="skills" id="skills">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<i class="fa fa-connectdevelop bounce" style="font-size:42px; color: #282f35; margin-top:25px;"></i>
					<h1>Skills</h1>
					<p>The crossover between design, programming and electronics has always been of interest to me. <br/><br/>I have a wide range of skills that include front-end development (HTML5, CSS3, SASS, Javascript, Responsive, UX), back-end development using open source technologies (PHP, Wordpress, Python, MySQL, mongoDB), Linux server system administration, deployment and performance tuning (Apache, MySQL and NGinx). <br/><br/>As an Engineer, my skill set is focused on Embedded Systems (Electronics, Matlab, Circuit Simulation, Robotics, Microcontrollers...). Well, you can check my resume for a more detailed information <a href="http://www.danielandrade.net/Daniel_Spillere_Andrade-CV.pdf" target="_blank"><b>HERE</b></a>. </p>
				</div>
			</div>
		</div>

	</section>


	<!-- contact -->
	<section class="contact" id="contact">
		<div class="container">
			<div class="row">
				<div class="sign-up">
					<div class="text-center">
						<img src="img/dan.png" class="logo-contact" width="150" height="150" alt="">
					</div>
					<h2 class="contact_txt text-center">Get in touch!</h2>
					<p class="contact_txt text-center">I'm available for freelance projects: <br/>
						<SCRIPT TYPE="text/javascript">
							emailE=('daniel@' + 'danielandrade.net')
							document.write('<a style="color:#fff;" href="mailto:' + emailE + '">' + emailE + '</a>')
						</SCRIPT></p>
				</div>
			</div>
		</div>
	</section>

	<!-- footer -->
	<footer id="footer">
		<div class="container">
			<div class="row text-center">
				<div class="col-md-12 text-center">
					<ul class="footer-icons">
						<li><a href="https://github.com/dansku" target="_blank"><i class="fa fa-github-square fa-3 bounce" style="font-size:42px;"></i></a></li>
						<li><a href="https://www.linkedin.com/in/dansku" target="_blank"><i class="fa fa-linkedin-square fa-3 bounce" style="font-size:42px;"></i></a></li>
						<li><a href="https://instagram.com/danskubr" target="_blank"><i class="fa fa-instagram fa-3 bounce" style="font-size:42px;"></i></a></li>
						<li><a href="https://www.youtube.com/danskubr" target="_blank"><i class="fa fa-youtube-square fa-3 bounce" style="font-size:42px;"></i></a></li>
						<li><a href="https://twitter.com/dspillere" target="_blank"><i class="fa fa-twitter-square fa-3 bounce" style="font-size:42px;"></i></a></li>
						<li><a href="https://www.flickr.com/photos/spillere/" target="_blank"><i class="fa fa-flickr fa-3 bounce" style="font-size:42px;"></i></a></li>
					</ul>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</footer>

	<!-- javascript -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery.transit/0.9.12/jquery.transit.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/mixitup/1.5.6/jquery.mixitup.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
	<script src="js/script.js"></script>
	<script src="js/smooth-scroll.min.js"></script>
	<script>

		smoothScroll.init();

	</script>


<?php /*
<!-- Start of StatCounter Code for Default Guide -->
	<script type="text/javascript">
	var sc_project=10377871;
	var sc_invisible=1;
	var sc_security="ee977784";
	var scJsHost = (("https:" == document.location.protocol) ?
	"https://secure." : "http://www.");
	document.write("<sc"+"ript type='text/javascript' src='" +
	scJsHost+
	"statcounter.com/counter/counter.js'></"+"script>");
	</script>
	<noscript><div class="statcounter"><a title="web analytics"
	href="http://statcounter.com/" target="_blank"><img
	class="statcounter"
	src="http://c.statcounter.com/10377871/0/ee977784/1/"
	alt="web analytics"></a></div></noscript>
<!-- End of StatCounter Code for Default Guide -->

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-156944-15', 'auto');
  ga('send', 'pageview');
</script>
*/ ?>
</body>
</html>
