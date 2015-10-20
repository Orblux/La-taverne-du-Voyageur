<!-- Modale Account_add -->
<div class="modal fade" id="Account_add" tabindex="-1" role="dialog" aria-labelledby="account" aria-hidden="true">
    <div class="modal-dialog modal-height">
        <div class="modal-content">			
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-Mot de passe">Editeur de comptes</h4>
            </div>
			<form role="form" class="form-signin" action="<?php echo $_SERVER['PHP_SELF']?>" method="post" id="login-form">
				<input type="hidden" name="accountChange" value="add">
				<div class="modal-body">         
					<div class="form-group has-feedback">
						<label class="sr-only" for="inputidentifiant">Identifiant</label>
						<input type="text" name="identifiant" class="form-control" id="inputidentifiant" placeholder="Nom" value="" required>
						<i class="fa fa-user form-control-feedback"></i>
					</div>
					<div class="form-group has-feedback">
						<label class="sr-only" for="inputMdp">Mot de passe</label>
						<input required type="password" name="mdp" class="form-control" id="inputMdp" placeholder="Mot de passe" value="<?php echo isset($_SESSION['inputs']['mdp'])? $_SESSION['inputs']['mdp'] : ''; ?>" required>
						<i class="fa fa-key form-control-feedback"></i>
					</div>
					<div class="form-group has-feedback">
						<label class="sr-only" for="inputMdp2">Mot de passe</label>
						<input required type="password" name="mdp2" class="form-control" id="inputMdp" placeholder="Confirmation" value="<?php echo isset($_SESSION['inputs']['mdp2'])? $_SESSION['inputs']['mdp2'] : ''; ?>" required>
						<i class="fa fa-key form-control-feedback"></i>
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

<!-- Modale Account_edit -->
<div class="modal fade" id="Account_edit" tabindex="-1" role="dialog" aria-labelledby="account" aria-hidden="true">
    <div class="modal-dialog modal-height">
        <div class="modal-content">			
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-Mot de passe">Editeur de comptes</h4>
            </div>
			<form role="form" class="form-signin" action="<?php echo $_SERVER['PHP_SELF']?>" method="post" id="login-form">
				<input type="hidden" name="accountChange" value="edit">
				<div class="modal-body">					
					<div class="form-group has-feedback">
						<label class="sr-only" for="inputidentifiant">Identifiant</label>
						<input type="text" name="identifiant" class="form-control" id="inputidentifiant" placeholder="Nom" value="<?php echo isset($_SESSION['ID'])? $_SESSION['ID'] : ''; ?>" required>
						<i class="fa fa-user form-control-feedback"></i>
					</div>
					<div class="form-group has-feedback">
						<label class="sr-only" for="inputMdp">Mot de passe</label>
						<input required type="password" name="mdp" class="form-control" id="inputMdp" placeholder="Mot de passe" value="<?php echo isset($_SESSION['inputs']['mdp'])? $_SESSION['inputs']['mdp'] : ''; ?>" required>
						<i class="fa fa-key form-control-feedback"></i>
					</div>
					<div class="form-group has-feedback">
						<label class="sr-only" for="inputMdp2">Mot de passe</label>
						<input required type="password" name="mdp2" class="form-control" id="inputMdp" placeholder="Confirmation" value="<?php echo isset($_SESSION['inputs']['mdp2'])? $_SESSION['inputs']['mdp2'] : ''; ?>" required>
						<i class="fa fa-key form-control-feedback"></i>
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

<!-- Modale Account_del -->
<div class="modal fade" id="Account_del" tabindex="-1" role="dialog" aria-labelledby="account" aria-hidden="true">
    <div class="modal-dialog modal-height">
        <div class="modal-content">			
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-Mot de passe">Editeur de comptes</h4>
            </div>
			<form role="form" class="form-signin" action="<?php echo $_SERVER['PHP_SELF']?>" method="post" id="login-form">
				<p class="text-center">Rentrer l'identifiant du compte à supprimer :<br></p>
				<input type="hidden" name="accountChange" value="del">
				<div class="modal-body">
					<div class="form-group has-feedback">
						<label class="sr-only" for="inputIdentifiant">Identifiant</label>
						<input required type="text" name="identifiant" class="form-control" id="inputIdentifiant" placeholder="Identifiant" value="<?php echo isset($_SESSION['inputs']['identifiant'])? $_SESSION['inputs']['identifiant'] : ''; ?>" required>
						<i class="fa fa-user form-control-feedback"></i>
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

<?php
	if(isset($_SESSION['allowmodif']))
	{
		if($_SESSION['allowmodif'] == TRUE)
		{
			?>
			<div class="row">
				<div class="panel-heading">
					<p class="col-md-6">Bonjour <?php echo $_SESSION["ID"]; ?> ! Voici le menu d'administration des comptes:</p>
					<div class="btn-group col-md-6">
						<button type="button" data-toggle="modal" class="btn btn-default btn-lg" data-target="#Account_add"><i class="fa fa-plus-square icon-lg"></i> Ajouter</button>
						<button type="button" data-toggle="modal" class="btn btn-default btn-lg" data-target="#Account_edit"><i class="fa fa-pencil-square-o icon-lg"></i> Modifier</button>
						<button type="button" data-toggle="modal" class="btn btn-default btn-lg" data-target="#Account_del"><i class="fa fa-minus-square icon-lg"></i> Supprimer</button>	
					</div>
				</div>
			</div>
			<?php
			
			// $log_errors = [];
			$log_errors = array(); // on crée une vérif de champs
			
			// $log_success = [];
			$log_success = array(); // on crée une vérif de champs
				
			//Autorise modif si Admin
			if(array_key_exists('accountChange', $_POST) && isset($_SESSION['allowmodif']))
			{
				//-------------------------------------------------------------------------
				//Autorise l'ajout si tag add ET modif OK !
				if($_POST['accountChange'] == "add" && $_SESSION['allowmodif'] == TRUE)
				{
					if(!array_key_exists('identifiant', $_POST) || $_POST['identifiant'] == '')
					{
						$log_errors ['identifiant'] = "Vous n'avez pas saisi d'identifiant !";
					}
					
					if(!array_key_exists('mdp', $_POST) || $_POST['mdp'] == '') 
					{
						$log_errors ['mdp'] = "Vous n'avez pas saisi de mot de passe !";
					}
					
					if(!array_key_exists('mdp2', $_POST) || $_POST['mdp2'] == '') 
					{
						$log_errors ['mdp2'] = "Veuillez confirmer le mot de passe !";
					}
					
					//On check les infos transmises lors de la validation
					if(!empty($log_errors))
					{ // si erreur on renvoie vers la page précédente
						$_SESSION['log_errors'] = $log_errors;//on stocke les erreurs
						$_SESSION['inputs'] = $_POST;
					}
					else
					{	
						if($_POST['mdp'] != $_POST['mdp2'])
						{
							$log_errors['mdp'] = "Veuillez entrer deux fois le même mot de passe !";
							$_SESSION['log_errors'] = $log_errors;//on stocke les erreurs
							$_SESSION['inputs'] = $_POST;							
						}
						else
						{
							include("mysql.php");

							$identifiant = sha1(htmlspecialchars($_POST["identifiant"]));
							$password = password_hash(htmlspecialchars($_POST["mdp"]), PASSWORD_DEFAULT);
							$droits = 0;
							$tentative = 0;
							
							$req = $bdd->prepare('INSERT INTO ltdv(identifiant, password, droits, tentative) VALUES(:identifiant, :password, :droits, :tentative)');
							$req->execute(array(
								'identifiant' => $identifiant,
								'password' => $password,
								'droits' => $droits,
								'tentative' => $tentative));
								
							$log_success['account_add'] = "Le nouveau compte a été ajouté avec succès !";
							$_SESSION['log_success'] = $log_success;
							
							$req->closeCursor(); // Termine le traitement de la requête							
						}											
					}
				}
				
				//-------------------------------------------------------------------------
				//Autorise l'édition si tag edit ET modif OK !
				if($_POST['accountChange'] == "edit" && $_SESSION['allowmodif'] == TRUE)
				{
					if(!array_key_exists('identifiant', $_POST) || $_POST['identifiant'] == '')
					{
						$log_errors ['identifiant'] = "Vous n'avez pas saisi d'identifiant !";
					}
					
					if(!array_key_exists('mdp', $_POST) || $_POST['mdp'] == '') 
					{
						$log_errors ['mdp'] = "Vous n'avez pas saisi de mot de passe !";
					}
					
					if(!array_key_exists('mdp2', $_POST) || $_POST['mdp2'] == '') 
					{
						$log_errors ['mdp2'] = "Veuillez confirmer le mot de passe !";
					}
					
					//On check les infos transmises lors de la validation
					if(!empty($log_errors))
					{ // si erreur on renvoie vers la page précédente
						$_SESSION['log_errors'] = $log_errors;//on stocke les erreurs
						$_SESSION['inputs'] = $_POST;
					}
					else
					{	
						if($_POST['mdp'] != $_POST['mdp2'])
						{
							$log_errors['mdp'] = "Veuillez entrer deux fois le même mot de passe !";
							$_SESSION['log_errors'] = $log_errors;//on stocke les erreurs
							$_SESSION['inputs'] = $_POST;
						}
						else
						{
							include("mysql.php");

							$identifiant = sha1(htmlspecialchars($_POST["identifiant"]));
							$password = password_hash(htmlspecialchars($_POST["mdp"]), PASSWORD_DEFAULT);
							
							$req = $bdd->prepare('SELECT COUNT(*) FROM ltdv WHERE identifiant = :identifiant');
							$req->execute(array(
								'identifiant' => $identifiant));
																
							if($req ->fetchColumn() != 0)
							{							
								$req = $bdd->prepare('UPDATE ltdv SET password = :nvpwd WHERE identifiant = :identifiant');
								$req->execute(array(
									'identifiant' => $identifiant,
									'nvpwd' => $password));
									
								$log_success['account_edit'] = "Le compte a été modifié avec succès !";
								$_SESSION['log_success'] = $log_success;
								
								$req->closeCursor(); // Termine le traitement de la requête							
							}											
							else
							{
								$req->closeCursor(); // Termine le traitement de la requête
							
								$log_errors['account_edit'] = "L'identifiant n'est pas valide !";
								$_SESSION['log_errors'] = $log_errors;
							}
						}
					}		
				}
				
				//-------------------------------------------------------------------------
				//Autorise la suppression si tag del ET modif OK !
				if($_POST['accountChange'] == "del" && $_SESSION['allowmodif'] == TRUE)
				{
					if(!array_key_exists('identifiant', $_POST) || $_POST['identifiant'] == '')
					{
						$log_errors ['identifiant'] = "Vous n'avez pas saisi d'identifiant !";
					}
					
					//On check les infos transmises lors de la validation
					if(!empty($log_errors))
					{ // si erreur on renvoie vers la page précédente
						$_SESSION['log_errors'] = $log_errors;//on stocke les erreurs
						$_SESSION['inputs'] = $_POST;
					}
					else
					{	
						include("mysql.php");
						
						$identifiant = sha1(htmlspecialchars($_POST["identifiant"]));
						
						$req = $bdd->prepare('SELECT COUNT(*) FROM ltdv WHERE identifiant = :identifiant');
						$req->execute(array(
							'identifiant' => $identifiant));
																
						if($req ->fetchColumn() != 0)
						{
							//echo $ID;
							$req = $bdd->prepare('DELETE FROM ltdv WHERE identifiant = :identifiant');
							$req->execute(array(
								'identifiant' => $identifiant));
							
							$req->closeCursor(); // Termine le traitement de la requête

							$log_success['account_add'] = "Le compte a été supprimé avec succès !";
							$_SESSION['log_success'] = $log_success;
						}
						else
						{
							$req->closeCursor(); // Termine le traitement de la requête
							
							$log_errors['account_del'] = "L'identifiant n'est pas valide !";
							$_SESSION['log_errors'] = $log_errors;
						}		
					}
				}									
			}
		}
	}
?>