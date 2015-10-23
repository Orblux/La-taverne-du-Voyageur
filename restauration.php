<?php
	session_start();//on démarre la session
	$current_page = "restauration";
	
	include("session.php");
?>

<!DOCTYPE html>
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<title>Restauration | La Taverne du Voyageur | Chambre d'hôtes et restauration</title>
		<meta name="description" content="Partie Restaurant de la Taverne du Voyageur">
		
		<?php
			include("metadata.php");
		?>

		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- Favicon -->
		<link rel="shortcut icon" href="images/favicon.ico">

		<!-- Web Fonts -->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,400,700,300&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Raleway:700,400,300' rel='stylesheet' type='text/css'>

		<!-- Bootstrap core CSS -->
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

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
				<?php
					include("edit.php");
					include("error.php");
				?>
				<h1 id="services"  class="text-center title">Carte été 2015</h1>
				<div class="space"></div>
				<!-- Separator -->
				<div class="row">
					<div class="media text-center">
						<p><hr><p>
					</div>
				</div>
				
				<?php
					include("mysql.php");
					$req = $bdd->prepare('SELECT * FROM menu WHERE type = :type');
				?>
				
				<!-- Les entrées -->
				<div class="row">					
					<h2 class="text-center title">Les entrées</h2>
					<div class="col-sm-6">
						<h3 class="text-left title">Les salades</h3>
						<?php							
							$req->execute(array('type' => 'salades'));
							
							while($data = $req->fetch())
							{
								?>
									<div class="media">
										<div class="media-right">
											<i class="fa fa-cutlery"></i>
										</div>
										<div class="media-body text-left">
											<h4 class="media-heading"><?php echo htmlentities($data['titre'])." : ".htmlentities($data['prix'])."€"; ?></h4>
											<p><?php echo strip_tags($data['description'], '<br><strong><small>'); ?><p>								
										</div>							
									</div>								
								<?php
							}
							$req->closeCursor(); // Termine le traitement de la requête
						?>						
					</div>
					
					<div class="space visible-xs"></div>
					<div class="col-sm-6">
						<h3 class="text-right title">Les ravioles</h3>
						<?php							
							$req->execute(array('type' => 'ravioles'));
							
							while($data = $req->fetch())
							{
								?>
									<div class="media">
										<div class="media-right pull-right">
											<i class="fa fa-cutlery"></i>
										</div>
										<div class="media-body pull-right text-right">
											<h4 class="media-heading"><?php echo htmlentities($data['titre']); ?></h4>
											<p><?php echo strip_tags($data['description'], '<br><strong><small>')." ".htmlentities($data['prix'])."€"; ?><p>								
										</div>							
									</div>
									<div class="clearfix"></div>									
								<?php
							}
							$req->closeCursor(); // Termine le traitement de la requête
						?>
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
						<h3 class="text-left title">Les viandes</h3>
						<?php							
							$req->execute(array('type' => 'viandes'));
							
							while($data = $req->fetch())
							{
								?>
									<div class="media">
										<div class="media-right">
											<i class="fa fa-cutlery"></i>
										</div>
										<div class="media-body text-left">
											<h4 class="media-heading"><?php echo htmlentities($data['titre']); ?></h4>
											<p><?php echo strip_tags($data['description'], '<br><strong><small>')." ".htmlentities($data['prix'])."€"; ?><p>								
										</div>							
									</div>								
								<?php
							}
							$req->closeCursor(); // Termine le traitement de la requête
						?>											
					</div>
					
					<div class="space visible-xs"></div>
					<div class="col-sm-6">
						<h3 class="text-right title">Les poissons</h3>
						<?php							
							$req->execute(array('type' => 'poissons'));
							
							while($data = $req->fetch())
							{
								?>
									<div class="media">
										<div class="media-right pull-right">
											<i class="fa fa-cutlery"></i>
										</div>
										<div class="media-body pull-right text-right">
											<h4 class="media-heading"><?php echo htmlentities($data['titre']); ?></h4>
											<p><?php echo strip_tags($data['description'], '<br><strong><small>')." ".htmlentities($data['prix'])."€"; ?><p>								
										</div>							
									</div>
									<div class="clearfix"></div>									
								<?php
							}
							$req->closeCursor(); // Termine le traitement de la requête
						?>																	
					</div>
				</div>
				
				<div class="row">
					<p><br><p>
				</div>
				
				<div class="row">				
					<h3 class="text-center title">Les burgers</h3>
					<?php							
						$req->execute(array('type' => 'burgers'));
							
						while($data = $req->fetch())
						{
							?>
								<div class="col-sm-4">
									<div class="media">						
										<div class="media-body text-center">
											<h4 class="media-heading"><?php echo htmlentities($data['titre'])." ".htmlentities($data['prix'])."€"; ?></h4>
											<p><?php echo strip_tags($data['description'], '<br><strong><small>'); ?><p>
										</div>							
									</div>
								</div>									
							<?php
						}
						$req->closeCursor(); // Termine le traitement de la requête
					?>
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
						<h3 class="text-left title">Les fromages</h3>
						<?php							
							$req->execute(array('type' => 'fromages'));
							
							while($data = $req->fetch())
							{
								?>
									<div class="media">
										<div class="media-right">
											<i class="fa fa-cutlery"></i>
										</div>
										<div class="media-body text-left">
											<h4 class="media-heading"><?php echo htmlentities($data['titre']); ?></h4>
											<p><?php echo strip_tags($data['description'], '<br><strong><small>')." ".htmlentities($data['prix']."€"); ?><p>								
										</div>							
									</div>								
								<?php
							}
							$req->closeCursor(); // Termine le traitement de la requête
						?>												
					</div>
					
					<div class="space visible-xs"></div>
					<div class="col-sm-6">
						<h3 class="text-right title">Les douceurs</h3>
						<?php							
							$req->execute(array('type' => 'douceurs'));
							
							while($data = $req->fetch())
							{
								?>
									<div class="media">
										<div class="media-right pull-right">
											<i class="fa fa-cutlery"></i>
										</div>
										<div class="media-body pull-right text-right">
											<h4 class="media-heading"><?php echo htmlentities($data['titre']); ?></h4>
											<p><?php echo strip_tags($data['description'], '<br><strong><small>')." ".htmlentities($data['prix']."€"); ?><p>								
										</div>							
									</div>
									<div class="clearfix"></div>									
								<?php
							}
							$req->closeCursor(); // Termine le traitement de la requête
						?>											
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
					
					<?php							
						$req->execute(array('type' => 'menus'));
						
						$i = 0;
						while($data = $req->fetch())
						{	
							$i=$i+1;
							?>
								<div class="col-sm-4">
									<div class="media">						
										<div class="media-body text-center center-block">
											<h4 class="media-heading"><?php echo htmlentities($data['titre'])." ".htmlentities($data['prix']."€"); ?></h4>
											<p><?php echo strip_tags($data['description'], '<br><strong><small>'); ?><p>								
										</div>							
									</div>
								</div>									
							<?php
							if($i == 3)
							{
								$i = 0;
								?>
									</div>
										<div class="row">
											<p><br><p>
										</div>
									<div class="row">										
								<?php
							}							
						}
						$req->closeCursor(); // Termine le traitement de la requête
					?>					
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
