<?php
	session_start();//on démarre la session
	$current_page = "index";
	
	include("session.php");
?>

<!DOCTYPE html>
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<title>La Taverne du Voyageur | Chambre d'hôtes et restauration</title>
		<meta name="description" content="Présentation de l'établissement de Chambres d'Hôtes et Restaurant, La Taverne du Voyageur">
		
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

	<body class="no-trans">
		<!-- scrollToTop -->
		<!-- ================ -->
		<div class="scrollToTop"><i class="icon-up-open-big"></i></div>

		<!-- header start -->
		<!-- ================ --> 
		<?php			
			include("header.php");
		?>		
		<!-- header end -->

		<!-- banner start -->
		<!-- ================ -->
		<div id="banner" class="banner">
			<div class="banner-image"></div>
			<div class="banner-caption">
				<div class="container">
					<div class="row">
						<div class="col-md-12 center-block text-center object-non-visible" data-animation-effect="fadeIn">
							<h0 class="text-center"><i><span>La Taverne du Voyageur</i></span></h0>
							<h2 class="text-center">Une restauration typique de la région Auvergnate</h2>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- banner end -->

		<!-- section start -->
		<!-- ================ -->
		<div class="section clearfix object-non-visible" data-animation-effect="fadeIn">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1 id="about" class="title text-center">La <span>Taverne</span> du voyageur, un lieu de détente offrant un bon repas et du repos aux voyageurs</h1>
						<div class="space"></div>
						<h2 class="lead text-center">C'est dans la campagne auvergnate que vous trouverez notre chaleureux restaurant, cuisine de terroir et douceur de vivre vous accompagneront lors de votre venue chez nous!</h2>
						<div class="space"></div>
						<div class="row">
							<div class="col-md-6">
								<img src="images/section-image-1.png" alt="La taverne du voyageur">
								<div class="space"></div>
							</div>
							<div class="col-md-6">
								<p>Nous vous accueillons dans notre restaurant : <i>La Taverne du Voyageur</i>, toute la semaine du lundi au samedi de 11h à 23h dans une ambiance conviviale! Restaurant typique de la région, nous vous proposerons différents mets du terroir local avec une carte variant au fil des saisons. Par ailleurs, nous mettons un point d'honneur à valoriser les produits frais des producteurs locaux! Vous y trouverez donc :</p>
								<ul class="list-unstyled">
									<li><i class="fa fa-caret-right pr-10 text-colored"></i> Des mets de qualité</li>
									<li><i class="fa fa-caret-right pr-10 text-colored"></i> Un service rapide et efficace</li>
									<li><i class="fa fa-caret-right pr-10 text-colored"></i> Une grande convivialité</li>
									<li><i class="fa fa-caret-right pr-10 text-colored"></i> Et surtout, de quoi apaiser votre faim !</li>
								</ul>

								<p>Vous trouverez donc chez nous de quoi vous régaler et prendre plaisir à notre table. Que ce soit en famille ou en solitaire, pour le travail ou les vacances vous ne serez pas déçu d'être passé par <i>La Taverne du Voyageur</i> !</p>								
							</div>
						</div>
						<h2><center>Un restaurant, une région, La Taverne du Voyageur !</center></h2>
						<div class="space"></div>
						<div class="row">
							<div class="col-md-6">
								<p>	C'est au coeur de la région auvergnate que se situe notre savoir-faire et nos produits. C'est avec une ambiance originale et de caractère que nous serons heureux de vous présenter notre culture !</p>
								<p>C'est dans le village de Bas-en-Basset que se trouve l'étape de la taverne du voyageur dans la région de la Haute Loire. Notre région est forte de caractère et de vie, située au pied du massif central. Non loin de Lyon nous jouissons du calme de la campagne et de l'histoire de la région avec la proximité du chateau de Rochebaron. Vous pouvez de ce fait venir de tout bord à notre rencontre : venant de la capitale ou des provinces, de la mer ou de la montagne notre taverne vous attendra !</p>
								<p>Convivialité étant le maître mot du restaurant nous vous proposons de nombreux événements tout au cours de l'année, n'hésitez pas à regarder les différents changements de carte et les grands moments de l'année sur notre site.</p>
							</div>
							<div class="col-md-6">
								<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
									
									<!-- News system -->
									<?php
										include("mysql.php");
										$req = $bdd->prepare('SELECT * FROM news ORDER BY id DESC LIMIT 5');
										$req->execute();

										while($data = $req->fetch())
										{
											?>
											<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="heading<?php echo $data['id']; ?>">
													<h4 class="panel-title">
														<a data-toggle="collapse" data-parent="#accordion" href="#<?php echo $data['id']; ?>" aria-expanded="true" aria-controls="<?php echo $data['id']; ?>">
															<?php echo $data['titre']; ?>
														</a>
													</h4>
												</div>
												<div id="<?php echo $data['id']; ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading<?php echo $data['id']; ?>">
													<div class="panel-body">
														<?php echo $data['contenu']; ?>
													</div>
												</div>
											</div>
											<?php
										}
										$req->closeCursor(); // Termine le traitement de la requête
									?>
									
									<!-- Autorise l'édition si Admin -->
									<!-- ----------------------------------------------------------------------- -->
									<?php
										if(isset($_SESSION['allowmodif']))
										{
											if($_SESSION['allowmodif'] == TRUE)
											{
												include("news.php");
												include("error.php");
												unset($_SESSION['inputs']); // on nettoie les données précédentes
												unset($_SESSION['log_success']);
												unset($_SESSION['log_errors']);
											}
										}
									?>
									<!-- ----------------------------------------------------------------------- -->
								</div>
							</div>
					    </div>
					</div>	
				</div>
			</div>
		</div>
		<!-- section end -->		
		<!-- 2nd section start -->
		<div class="footer section">
				<div class="container">
					<h1 class="title text-center" id="infos">Où nous trouver ?</h1>
					<div class="space"></div>
					<div class="row">
						<div class="col-sm-6">
							<div class="footer-content">
								<center>
								<p class="large">Notre restaurant se trouve dans le village de Bas-en-Basset au coeur de la Haute Loire.</p>
								<ul class="list-icons">
									<li><i class="fa fa-phone pr-10"></i>(+33) 04.71.66.72.30</li>
									<li><i class="fa fa-envelope-o pr-10"></i>lataverneduvoyageur@ovh.org</li>
									<li><i class="fa fa-map-marker pr-10"></i>6 Place de la mairie, 43210 Bas en Basset</li>
								</ul>
								</center>
							</div>
						</div>
						<div class="col-sm-6">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d179585.3272951477!2d4.0292517846040194!3d45.30800667711442!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f5c741057d9f75%3A0x4093cafcbe802f0!2sBas-en-Basset!5e0!3m2!1sfr!2sfr!4v1444564671362" width="600" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
						</div>
					</div>
				</div>
			</div>
		<!-- 2nd section end -->
		<!-- footer start -->
		<!-- ================ -->
		<footer id="footer">

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
		<script type="text/javascript" src="js/header.js"></script>

		<!-- Custom Scripts -->
		<script type="text/javascript" src="js/custom.js"></script>
		
	</body>
</html>
