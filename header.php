<!-- Modale -->
<div class="modal fade" id="Login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-20">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" aria-hidden="true" data-dismiss="modal">×</button>
                <h4 class="modal-title">Login</h4>
            </div>
			<form class="form-signin" action="login.php" method="post" id="login-form">
				<div class="modal-body">              
					<h2 class="form-signin-heading">Connexion</h2>
					<label for="inputID" class="sr-only">ID</label>
					<input type="ID" name="inputID" id="inputID" class="form-control" placeholder="Identifiant" required autofocus>
					<label for="inputPassword" class="sr-only">Mot de passe</label>
					<input type="password" name="inputPassword" id="inputPassword" class="form-control" placeholder="Mot de passe" required>
					<div class="checkbox">
						<label>
							<input name="checkbox" type="checkbox" value="remember-me"> Se souvenir de moi
						</label>
					</div>	
				</div>
				<div class="modal-footer">
					<button class="btn btn-default" type="submit"><i class="fa fa-check icon-lg"></i> Valider</button>
					<button class="btn btn-default btn-inverse" type="button" data-dismiss="modal"><i class="fa fa-times icon-lg"></i> Fermer</button>
				</div>
			</form>
        </div>
    </div>
</div>

<!-- header start -->
<!-- ================ --> 
<header class="header fixed clearfix navbar navbar-fixed-top">
	<div class="container">
		<div class="row">
			<div class="col-md-4">

				<!-- header-left start -->
				<!-- ================ -->
				<div class="header-left clearfix">

					<!-- logo -->
					<div class="logo smooth-scroll">
						<a href="index.php"><img id="logo" src="images/logo.png" alt="Worthy"></a>
					</div>

				</div>
				<!-- header-left end -->

			</div>
			<div class="col-md-8">

				<!-- header-right start -->
				<!-- ================ -->
				<div class="header-right clearfix">

					<!-- main-navigation start -->
					<!-- ================ -->
					<div class="main-navigation animated">

						<!-- navbar start -->
						<!-- ================ -->
						<nav class="navbar navbar-default" role="navigation">
							<div class="container-fluid">

								<!-- Toggle get grouped for better mobile display -->
								<div class="navbar-header">
									<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
								</div>

								<!-- Collect the nav links, forms, and other content for toggling -->
								<div class="collapse navbar-collapse scrollspy smooth-scroll" id="navbar-collapse-1">
									
									<ul class="nav navbar-nav navbar-right">
									<!-- Modification du menu suivant la page -->
									<?php
										if($current_page == "restauration")
										{
											?>											
											<li><a href="index.php">Présentation</a></li>
											<li class="active"><a href="#restauration">Restauration</a></li>
											<li><a href="hotellerie.php">Hôtellerie</a></li>
											
											<?php
										}
										elseif($current_page == "hotellerie")
										{
											?>
											<li><a href="index.php">Présentation</a></li>
											<li><a href="restauration.php">Restauration</a></li>
											<li class="active"><a href="#hotellerie">Hôtellerie</a></li>
											<?php
										}
										elseif($current_page == "index")
										{
											?>
											<li class="active"><a href="#banner">Présentation</a></li>
											<li><a href="restauration.php">Restauration</a></li>
											<li><a href="hotellerie.php">Hôtellerie</a></li>
											<?php
										}
										else
										{
											echo "Error : no navbar available for this page !";
										}
									?>
									
										<!-- Login boutton -->
										<!-- Lien de déclanchement de la modale -->									
										<li><a data-toggle="modal" data-target="#Login" class="btn btn-lg btn-link"><i class="fa fa-sign-in"></i> Login</a></li>
									</ul>								
																	
								</div>

							</div>
						</nav>
						<!-- navbar end -->

					</div>
					<!-- main-navigation end -->

				</div>
				<!-- header-right end -->
				
			</div>
		</div>
	</div>
</header>
<!-- header end -->