<?php
	session_start();//on démarre la session
	$current_page = "restauration";
?>

<!DOCTYPE html>
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<title>Restauration | La taverne du Voyageur | Chambre d'hôtes et restauration</title>
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

		<!-- section start -->
		<!-- ================ -->
		<div class="section clearfix object-non-visible" data-animation-effect="fadeIn">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1 id="restauration" class="title text-center">La <span>Taverne</span> du voyageur, un lieu de détente offrant un bon repas et du repos aux voyageurs</h1>
						<div class="space"></div>
						<h2 class="lead text-center">C'est dans la campagne auvergnate que vous trouverez notre chaleureux restaurant, cuisine de terroir et douceur de vivre vous accompagnerons lors de votre venue chez nous !</h2>
						<div class="space"></div>
						<div class="row">
							<div class="col-md-6">
								<img src="images/section-image-1.png" alt="La taverne du voyageur">
								<div class="space"></div>
							</div>
							<div class="col-md-6">
								<p>Nous vous accueuillons dans notre restaurant : <i>La Taverne du Voyageur</i>, toute la semaine du lundi au samedi de 11h à 23h dans une ambiance conviviale ! Restaurant typique de la région, nous vous proposerons différents mets du terroir local avec une carte variant au fil des saisons. Par ailleurs, nous mettons un point d'honneur à valoriser les produits frais des producteurs locaux ! Vous y trouverez donc :</p>
								<ul class="list-unstyled">
									<li><i class="fa fa-caret-right pr-10 text-colored"></i> Des mets d'une grande qualité</li>
									<li><i class="fa fa-caret-right pr-10 text-colored"></i> Un service rapide et efficace</li>
									<li><i class="fa fa-caret-right pr-10 text-colored"></i> Une grande convivialité</li>
									<li><i class="fa fa-caret-right pr-10 text-colored"></i> Et surtout, de quoi apaiser votre faim !</li>
								</ul>
								<p>Vous trouverez donc chez nous de quoi vous régaler et prendre plaisir à notre table. Que ce soit en famille ou en solitaire, pour le travail ou les vacances vous ne serez pas déçu d'être passé par <i>La Taverne du Voyageur</i> !</p>								
							</div>
						</div>					
					</div>
				</div>
			</div>
		</div>
		<!-- section end -->

		<!-- section start -->		
		<!-- ================ -->
		<div class="section translucent-bg bg-image-1 red">
			<div class="container object-non-visible" data-animation-effect="fadeIn">
				<h1 id="services"  class="text-center title">Carte été 2015</h1>
				<div class="space"></div>
				<!-- Separator -->
				<div class="row">
					<div class="media text-center">
						<p><hr><p>
					</div>
				</div>
				<!-- Les entrées -->
				<div class="row">					
					<h2 class="text-center title">Les entrées</h2>
					<div class="col-sm-6">
						<div class="media">
						<h3 class="text-left title">Les salades</h3>
							<div class="media-right">
								<i class="fa fa-cutlery"></i>
							</div>
							<div class="media-body text-left">
								<h4 class="media-heading">Salade Italienne : 9.50€</h4>
								<p>Salade verte, jambon cru, coppa, mozzarelle, tomate<p>
							</div>							
						</div>
						<div class="media">
							<div class="media-right">
								<i class="fa fa-cutlery"></i>
							</div>
							<div class="media-body text-left">
								<h4 class="media-heading">Salade Océane : 9.50€</h4>
								<p>Salade verte, fruits de mer marinés, filet de rouget poché</p>
							</div>							
						</div>
						<div class="media">
							<div class="media-right">
								<i class="fa fa-cutlery"></i>
							</div>
							<div class="media-body text-left">
								<h4 class="media-heading">Salade Auvergnate : 9.50€</h4>
								<p>Salade verte, toast de fourme chaude, lardons rôtis</p>
							</div>							
						</div>
						<div class="media">
							<div class="media-right">
								<i class="fa fa-cutlery"></i>
							</div>
							<div class="media-body text-left">
								<h4 class="media-heading">Salade de Foie de Volailles : 9.50€</h4>
								<p>Salade verte, foie de volaille rôtis, tomates, œuf poêlé</p>
							</div>							
						</div>
						<div class="media">
							<div class="media-right">
								<i class="fa fa-cutlery"></i>
							</div>
							<div class="media-body text-left">
								<h4 class="media-heading">Ou en XL : 13.90€</h4>
								<p>Salade composée, frites & dessert </p>
							</div>							
						</div>
					</div>
					<div class="space visible-xs"></div>
					<div class="col-sm-6">
						<h3 class="text-right title">Les ravioles</h3>
						<div class="media">
							<div class="media-right pull-right">
								<i class="fa fa-cutlery"></i>
							</div>
							<div class="media-body pull-right text-right">
								<h4 class="media-heading">Au Foie Gras</h4>
								<p>11.90€ & XL 14.90€</p>
							</div>
						</div>
						<div class="clearfix"></div>
						<div class="media">	
							<div class="media-right pull-right">
								<i class="fa fa-cutlery"></i>
							</div>
							<div class="media-body pull-right text-right">
								<h4 class="media-heading">Au Fruits de Mer</h4>
								<p>11.90€ & XL 14.90€</p>
							</div>
						</div>
						<div class="clearfix"></div>
						<div class="media">	
						<div class="media-right pull-right">
								<i class="fa fa-cutlery"></i>
							</div>
							<div class="media-body pull-right text-right">
								<h4 class="media-heading">Au Poivre Vert</h4>
								<p>11.90€ & XL 14.90€</p>
							</div>
						</div>
						<div class="clearfix"></div>
						<div class="media">	
							<div class="media-right pull-right">
								<i class="fa fa-cutlery"></i>
							</div>
							<div class="media-body pull-right text-right">
								<h4 class="media-heading">Aux Morilles</h4>
								<p>11.90€ & XL 14.90€</p>
							</div>							
						</div>						
					</div>
				</div>
				<!-- Separator -->
				<div class="row">
					<div class="media text-center">
						<p><hr><p>
					</div>
				</div>
				<!-- Les plats -->
				<div class="row">					
					<h2 class="text-center title">Les plats</h2>
					<div class="col-sm-6">
						<div class="media">
						<h3 class="text-left title">Les viandes</h3>
							<div class="media-right">
								<i class="fa fa-cutlery"></i>
							</div>
							<div class="media-body text-left">
								<h4 class="media-heading">Sauté de canard du Chef</h4>
								<p>12.50€<p>
							</div>							
						</div>
						<div class="media">
							<div class="media-right">
								<i class="fa fa-cutlery"></i>
							</div>
							<div class="media-body text-left">
								<h4 class="media-heading">Pièce du boucher</h4>
								<p>Bavette, entrecôte,... 13.80€</p>
							</div>							
						</div>
						<div class="media">
							<div class="media-right">
								<i class="fa fa-cutlery"></i>
							</div>
							<div class="media-body text-left">
								<h4 class="media-heading">Filet Mignon sauce morilles</h4>
								<p>12.50€</p>
							</div>							
						</div>
						<div class="media">
							<div class="media-right">
								<i class="fa fa-cutlery"></i>
							</div>
							<div class="media-body text-left">
								<h4 class="media-heading">Gâteau de foie maison sauce écrevisses</h4>
								<p>12.50€</p>
							</div>							
						</div>						
					</div>
					<div class="space visible-xs"></div>
					<div class="col-sm-6">
						<h3 class="text-right title">Les poissons</h3>
						<div class="media">	
							<div class="media-right pull-right">
								<i class="fa fa-cutlery"></i>
							</div>
							<div class="media-body pull-right text-right">
								<h4 class="media-heading text-right">Le gratin de poisson aux ravioles</h4>
								<p>11.90€</p>
							</div>
						</div>
						<div class="clearfix"></div>
						<div class="media">
							<div class="media-right pull-right">
								<i class="fa fa-cutlery"></i>
							</div>						
							<div class="media-body pull-right text-right">
								<h4 class="media-heading">La cocotte du pécheur</h4>
								<p>Différents poissons selon arrivage 11.90€</p>
							</div>
						</div>
						<div class="clearfix"></div>
						<div class="media">	
							<div class="media-right pull-right">
								<i class="fa fa-cutlery"></i>
							</div>
							<div class="media-body pull-right text-right">
								<h4 class="media-heading">Les cuisses de grenouille</h4>
								<p>13.90€</p>
							</div>							
						</div>												
					</div>
				</div>
				<div class="row">
					<p><br><p>
				</div>
				<div class="row">				
					<h3 class="text-center title">Les burgers</h3>
					<div class="col-sm-4">
						<div class="media">						
							<div class="media-body text-center">
								<h4 class="media-heading">Le classic : 11.50€</h4>
								<p>Bun’s, steak haché 180g, salade verte, tomate, oignon frites, cheddar, frites<p>
							</div>							
						</div>
					</div>
					<div class="col-sm-4">
						<div class="media">
							<div class="media-body text-center">
								<h4 class="media-heading">L'Auvergnat : 11.50€</h4>
								<p>Bun’s, steak haché 180 gr, salade verte, tomate, fourme, frites</p>
							</div>							
						</div>
					</div>
					<div class="col-sm-4">
						<div class="media">
							<div class="media-body text-center">
								<h4 class="media-heading">L'Italien : 12.50€</h4>
								<p>Bun’s, steack haché 180 gr, salade verte, jambon cru, pesto, frites</p>
							</div>							
						</div>											
					</div>
				</div>
				<!-- Separator -->
				<div class="row">
					<div class="media text-center">
						<p><hr><p>
					</div>
				</div>
				<!-- Les desserts -->
				<div class="row">					
					<h2 class="text-center title">Les desserts</h2>
					<div class="col-sm-6">
						<div class="media">
						<h3 class="text-left title">Les fromages</h3>
							<div class="media-right">
								<i class="fa fa-cutlery"></i>
							</div>
							<div class="media-body text-left">
								<h4 class="media-heading">Assiette de fromage</h4>
								<p>3.90€<p>
							</div>							
						</div>
						<div class="media">
							<div class="media-right">
								<i class="fa fa-cutlery"></i>
							</div>
							<div class="media-body text-left">
								<h4 class="media-heading">Fromage blanc Faisselle</h4>
								<p>2.90€</p>
							</div>
						</div>						
					</div>
					<div class="space visible-xs"></div>
					<div class="col-sm-6">
						<h3 class="text-right title">Les douceurs</h3>
						<div class="media">
							<div class="media-right pull-right">
								<i class="fa fa-cutlery"></i>
							</div>
							<div class="media-body pull-right text-right">
								<h4 class="media-heading">Vacherin</h4>
								<p class="text-right">Glace-meringuée 5.50€</p>
							</div>														
						</div>
						<div class="clearfix"></div>
						<div class="media">		
							<div class="media-right pull-right">
								<i class="fa fa-cutlery"></i>
							</div>
							<div class="media-body pull-right text-right">
								<h4 class="media-heading">Crème brulée</h4>
								<p>5.50€</p>
							</div>
						</div>
						<div class="clearfix"></div>
						<div class="media">	
							<div class="media-right pull-right">
								<i class="fa fa-cutlery"></i>
							</div>
							<div class="media-body pull-right text-right">
								<h4 class="media-heading">Mouse au chocolat</h4>
								<p>4.50€</p>
							</div>
						</div>
						<div class="clearfix"></div>
						<div class="media">
							<div class="media-right pull-right">
								<i class="fa fa-cutlery"></i>
							</div>
							<div class="media-body pull-right text-right">
								<h4 class="media-heading">Ile flottante</h4>
								<p>4.50€</p>
							</div>
						</div>						
					</div>
				</div>
				<!-- Separator -->
				<div class="row">
					<div class="media text-center">
						<p><hr><p>
					</div>
				</div>
				<!-- Les menus -->
				<div class="row">					
					<h2 class="text-center title">Les menus</h2>
					<div class="col-sm-4">
						<div class="media">						
							<div class="media-body text-center center-block">
								<h4 class="media-heading">Menu du jour : 12.90€</h4>
								<p>Entrée du jour & Plat du jour<br>Fromage<br>Dessert<br><small>Quart de vin & Café</small></p>
							</div>							
						</div>
					</div>
					<div class="col-sm-4">
						<div class="media">
							<div class="media-body text-center center-block">
								<h4 class="media-heading">Menu Rapée : 13.90€€</h4>
								<p>Charcuterie & Rapée<br>Fromage OU Dessert<p>
							</div>							
						</div>
					</div>
					<div class="col-sm-4">
						<div class="media">
							<div class="media-body text-center center-block">
								<h4 class="media-heading">Menu du Week-end : 15.50€</h4>
								<p>Entrée<br>Plat du week-end<br>Fromage OU Dessert<br><small>Verre de vin OU Café</small></p>
							</div>							
						</div>										
					</div>
				</div>
				<div class="row">
					<p><br><p>
				</div>
				<div class="row">
					<div class="col-sm-4">
						<div class="media">
							<div class="media-body text-center center-block">
								<h4 class="media-heading">Menu Grenouilles : 18.90€</h4>
								<p>Assiette de charcuterie<br>Cuisse de grenouilles - Rapée<br>Fromage OU Dessert</p>
							</div>							
						</div>											
					</div>
					<div class="col-sm-4">
						<div class="media">
							<div class="media-body text-center center-block">
								<h4 class="media-heading">Menu Taverne : 26.50€</h4>
								<p>Entrée à la carte<br>Plat à la carte<br>Fromage blanc ou sec<br>Dessert</p>
							</div>							
						</div>											
					</div>
					<div class="col-sm-4">
						<div class="media">
							<div class="media-body text-center center-block">
								<h4 class="media-heading">Menu Petit Voyageur : 7.90€</h4>
								<p>Steak ou Nuggets<br>Frites ou Légumes<br>Dessert<br><small>Petit sirop</small><br><strong>Réservé au - de 12 ans</strong></p>
							</div>							
						</div>											
					</div>
				</div>
			</div>
		</div>
		<!-- section end -->		
		<!-- footer start -->
		<!-- ================ -->
		<footer id="footer">
			<!-- .footer start -->
			<!-- ================ -->
			<div class="footer section">
				<div class="container">
					<h1 class="title text-center" id="infos">Informations Pratiques</h1>
					<div class="space"></div>
					<div class="row">
						<div class="col-sm-6">
							<div class="footer-content">
								<ul class="list-icons">
									<li><i class="fa fa-map-marker pr-10"></i>6, Place de la mairie, 43210, Bas en Basset</li>
									<li><i class="fa fa-phone pr-10"></i>+334.71.66.72.30</li>									
									<li><i class="fa fa-envelope-o pr-10"></i>lataverneduvoyageur@ovh.org</li>
								</ul>
								<div id="map-container-restaurant"></div>
								<!--ul class="social-links">
									<li class="facebook"><a target="_blank" href="https://www.facebook.com/pages/HtmlCoder/714570988650168"><i class="fa fa-facebook"></i></a></li>
									<li class="twitter"><a target="_blank" href="https://twitter.com/HtmlcoderMe"><i class="fa fa-twitter"></i></a></li>
									<li class="googleplus"><a target="_blank" href="http://plus.google.com"><i class="fa fa-google-plus"></i></a></li>
									<li class="skype"><a target="_blank" href="http://www.skype.com"><i class="fa fa-skype"></i></a></li>
									<li class="linkedin"><a target="_blank" href="http://www.linkedin.com"><i class="fa fa-linkedin"></i></a></li>
									<li class="youtube"><a target="_blank" href="http://www.youtube.com"><i class="fa fa-youtube"></i></a></li>
									<li class="flickr"><a target="_blank" href="http://www.flickr.com"><i class="fa fa-flickr"></i></a></li>
									<li class="pinterest"><a target="_blank" href="http://www.pinterest.com"><i class="fa fa-pinterest"></i></a></li>
								</ul-->
							</div>							
						</div>
						<!-- Formulaire de contact -->
						<?php
							include("contact.php");
						?>
					</div>
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
		<script>google.maps.event.addDomListener(window, 'load', init_map_restaurant);</script>
		
	</body>
</html>