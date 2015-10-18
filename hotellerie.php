<?php
	session_start();//on démarre la session
	$current_page = "hotellerie";
	
	include("session.php");
?>

<!DOCTYPE html>
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<title>Hôtellerie | La taverne du Voyageur | Chambre d'hôtes et restauration</title>
		<meta name="description" content="Worthy a Bootstrap-based, Responsive HTML5 Template">
		<meta name="author" content="htmlcoder.me">

		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- Favicon -->
		<link rel="shortcut icon" href="images/favicon.ico">

		<!-- Web Fonts -->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,400,700,300&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Raleway:700,400,300' rel='stylesheet' type='text/css'>

		<!-- Bootstrap core CSS -->
		<link href="bootstrap/css/bootstrap.css" rel="stylesheet">

		<!-- Font Awesome CSS -->
		<link href="fonts/font-awesome/css/font-awesome.css" rel="stylesheet">

		<!-- Plugins -->
		<link href="css/animations.css" rel="stylesheet">

		<!-- Worthy core CSS file -->
		<link href="css/style.css" rel="stylesheet">

		<!-- Custom css --> 
		<link href="css/custom.css" rel="stylesheet">
	</head>

	<body class="no-trans fixed-header-on">
		<!-- scrollToTop -->
		<!-- ================ -->
		<div class="scrollToTop"><i class="icon-up-open-big"></i></div>

		<!-- header start -->
		<!-- ================ --> 
		<?php			
			include("header.php");
		?>
		<!-- header end -->

		<!-- footer start -->
		<!-- ================ -->
		<footer id="hotellerie">

			<!-- .footer start -->
			<!-- ================ -->
			<div class="footer section">
				<div class="container">
					<h1 class="title text-center" id="infos">Contact <span>Hôtellerie</span></h1>
					<div class="space"></div>
					<div class="row">
						<div class="col-sm-6">
							<div class="footer-content">
								<p class="large">Venez aussi découvrir nos magnifiques chambres d'hôtes ! Elles acceuilleuront avec volupté les voyageurs fatigués comme les fins gourmets.</p>
								<ul class="list-icons">
									<li><i class="fa fa-map-marker pr-10"></i>6, Place de la mairie, 43210, Bas en Basset</li>
									<li><i class="fa fa-phone pr-10"></i>+334.71.66.72.30</li>									
									<li><i class="fa fa-envelope-o pr-10"></i>lataverneduvoyageur@ovh.org</li>
									<li><i class="fa fa-share pr-10"></i>www.ltdvchambresdhotes.fr</li>
								</ul>
							</div>
						</div>
						<div class="col-sm-6">
							<div id="map-container-chambres"></div>
						</div>			
					</div>
					<div class="row">
						<p><br></p>
					</div>
					<!-- Formulaire de contact -->
					<?php
						include("contact.php");
					?>
				</div>
			</div>
			<!-- .footer end -->

			<!-- .subfooter start -->
			<!-- ================ -->			
			<?php 
				include("footer.php");
			?>
			<!-- .subfooter end -->

		</footer>
		<!-- footer end -->

		<!-- JavaScript files placed at the end of the document so the pages load faster
		================================================== -->
		<!-- Jquery and Bootstap core js files -->
		<script type="text/javascript" src="plugins/jquery.min.js"></script>
		<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

		<!-- Modernizr javascript -->
		<script type="text/javascript" src="plugins/modernizr.js"></script>

		<!-- Isotope javascript -->
		<script type="text/javascript" src="plugins/isotope/isotope.pkgd.min.js"></script>
		
		<!-- Backstretch javascript -->
		<script type="text/javascript" src="plugins/jquery.backstretch.min.js"></script>

		<!-- Appear javascript -->
		<script type="text/javascript" src="plugins/jquery.appear.js"></script>

		<!-- Initialization of Plugins -->
		<script type="text/javascript" src="js/template.js"></script>

		<!-- Custom Scripts -->
		<script type="text/javascript" src="js/custom.js"></script>
		
		<!-- Google Map API -->
		<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
		<script>google.maps.event.addDomListener(window, 'load', init_map_chambres);</script>

	</body>
</html>
