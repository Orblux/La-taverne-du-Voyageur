<!-- Modale Elements_add -->
<div class="modal fade" id="Elements_add" tabindex="-1" role="dialog" aria-labelledby="Elements" aria-hidden="true">
    <div class="modal-dialog modal-height">
        <div class="modal-content">			
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Editeur d'éléments</h4>
            </div>
			<form role="form" class="form-signin" action="<?php echo $_SERVER['PHP_SELF']?>" method="post" id="login-form">
				<input type="hidden" name="elementsChange" value="add">
				<div class="modal-body">
					<div class="form-group">
						<select name="elements_type" class="form-control">
							<option value="salades">Salades</option>
							<option value="ravioles">Ravioles</option>
							<option value="poissons">Poissons</option>
							<option value="viandes">Viandes</option>
							<option value="fromages">Fromages</option>
							<option value="douceurs">Douceurs</option>
							<option value="burgers">Burgers</option>
							<option value="menu">Menu</option>
						</select>
					</div>
					<div class="form-group has-feedback">
						<label class="sr-only" for="inputtitle">Titre</label>
						<input required type="title" name="title" class="form-control" id="inputtitle" placeholder="Titre" value="<?php echo isset($_SESSION['inputs']['title'])? $_SESSION['inputs']['title'] : ''; ?>" required>
						<i class="fa fa-sticky-note-o form-control-feedback"></i>
					</div>
					<div class="form-group has-feedback">
						<label class="sr-only" for="inputprix">Prix</label>
						<input required type="title" name="prix" class="form-control" id="inputprix" placeholder="Prix" value="<?php echo isset($_SESSION['inputs']['prix'])? $_SESSION['inputs']['prix'] : ''; ?>" required>
						<i class="fa fa-money form-control-feedback"></i>
					</div>
					<div class="form-group has-feedback">
						<label class="sr-only" for="inputcontent">Elements</label>
						<textarea type="content" name="content" rows="8" class="form-control" id="inputcontent" placeholder="Description" value="<?php echo isset($_SESSION['inputs']['content'])? $_SESSION['inputs']['content'] : ''; ?>"></textarea>
						<i class="fa fa-comment-o form-control-feedback"></i>
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

<!-- Modale Elements_edit -->
<div class="modal fade" id="Elements_edit" tabindex="-1" role="dialog" aria-labelledby="Elements" aria-hidden="true">
    <div class="modal-dialog modal-height">
        <div class="modal-content">			
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Editeur d'éléments</h4>
            </div>
			<form role="form" class="form-signin" action="<?php echo $_SERVER['PHP_SELF']?>" method="post" id="login-form">
				<p class="text-center">Quel elements voulez-vous éditer ? <br></p>
				<input type="hidden" name="elementsChange" value="edit">
				<div class="modal-body">
					<div class="form-group">
						<select name="elements_to_edit" class="form-control">
							<?php
								include("mysql.php");
								$req = $bdd->prepare('SELECT id, titre FROM menu');
								$req->execute();
								
								while($data = $req->fetch())
								{
									?>
									<option value=<?php echo $data['id']; ?>>
										<?php echo $data['titre']; ?>
									</option>
									<?php
								}
							
								$req->closeCursor(); // Termine le traitement de la requête
								?>							
						</select>
					</div>
					<div class="form-group has-feedback">
						<label class="sr-only" for="inputtitle">Titre</label>
						<input required type="title" name="title" class="form-control" id="inputtitle" placeholder="Titre" value="<?php echo isset($_SESSION['inputs']['title'])? $_SESSION['inputs']['title'] : ''; ?>" required>
						<i class="fa fa-sticky-note-o form-control-feedback"></i>
					</div>
					<div class="form-group has-feedback">
						<label class="sr-only" for="inputprix">Prix</label>
						<input required type="title" name="prix" class="form-control" id="inputprix" placeholder="Prix" value="<?php echo isset($_SESSION['inputs']['prix'])? $_SESSION['inputs']['prix'] : ''; ?>" required>
						<i class="fa fa-money form-control-feedback"></i>
					</div>
					<div class="form-group has-feedback">
						<label class="sr-only" for="inputcontent">Elements</label>
						<textarea type="content" name="content" rows="8" class="form-control" id="inputcontent" placeholder="Description" value="<?php echo isset($_SESSION['inputs']['content'])? $_SESSION['inputs']['content'] : ''; ?>"></textarea>
						<i class="fa fa-comment-o form-control-feedback"></i>
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

<!-- Modale Elements_del -->
<div class="modal fade" id="Elements_del" tabindex="-1" role="dialog" aria-labelledby="Elements" aria-hidden="true">
    <div class="modal-dialog modal-height">
        <div class="modal-content">			
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Editeur d'éléments</h4>
            </div>
			<form role="form" class="form-signin" action="<?php echo $_SERVER['PHP_SELF']?>" method="post" id="login-form">
				<p class="text-center">Quel(s) elements voulez-vous supprimer ? <br>
				Maintenez CTRL pour sélectionner plusieurs elements.
				<br><br></p>
				<input type="hidden" name="elementsChange" value="del">
				<div class="modal-body">
					<div class="form-group">
						<select multiple name="elements_to_del[]" class="form-control">
							<?php
								include("mysql.php");
								$req = $bdd->prepare('SELECT id, titre FROM menu');
								$req->execute();
								
								while($data = $req->fetch())
								{
									?>
									<option value=<?php echo $data['id']; ?>>
										<?php echo $data['titre']; ?>
									</option>
									<?php
								}
							
								$req->closeCursor(); // Termine le traitement de la requête
								?>							
						</select>
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
				<div class="btn-group block-center pull-right">
					<button type="button" data-toggle="modal" class="btn btn-default btn-lg" data-target="#Elements_add"><i class="fa fa-plus-square icon-lg"></i> Ajouter</button>
					<button type="button" data-toggle="modal" class="btn btn-default btn-lg" data-target="#Elements_edit"><i class="fa fa-pencil-square-o icon-lg"></i> Modifier</button>
					<button type="button" data-toggle="modal" class="btn btn-default btn-lg" data-target="#Elements_del"><i class="fa fa-minus-square icon-lg"></i> Supprimer</button>			
				</div>
			<?php
			
			// $log_errors = [];
			$log_errors = array(); // on crée une vérif de champs
			
			// $log_success = [];
			$log_success = array(); // on crée une vérif de champs
				
			//Autorise modif si Admin
			if(array_key_exists('elementsChange', $_POST) && isset($_SESSION['allowmodif']))
			{
				//-------------------------------------------------------------------------
				//Autorise l'ajout si tag add ET modif OK !
				if($_POST['elementsChange'] == "add" && $_SESSION['allowmodif'] == TRUE)
				{
					if(!array_key_exists('elements_type', $_POST) || $_POST['elements_type'] == '')
					{
						$log_errors ['elements_type'] = "Vous n'avez pas choisi de catégorie pour votre élément !";
					}
					if(!array_key_exists('prix', $_POST) || $_POST['prix'] == '')
					{
						$log_errors ['prix'] = "Vous n'avez pas saisi de prix !";
					}
					
					if(!array_key_exists('title', $_POST) || $_POST['title'] == '') 
					{
						$log_errors ['title'] = "Vous n'avez pas saisi de titre !";
					}
					
					if(!array_key_exists('content', $_POST)) //|| $_POST['content'] == '') 
					{
						$log_errors ['content'] = "Vous n'avez pas saisi de contenu pour l'élément !";
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
						
						$type = htmlentities($_POST["elements_type"]);
						$prix = htmlentities($_POST["prix"]);
						$title = strip_tags($_POST["title"], '<br><strong><small>');
						$content = strip_tags($_POST["content"], '<br><strong><small>');
						
						$req = $bdd->prepare('INSERT INTO menu(type, titre, description, prix) VALUES(:type, :titre, :description, :prix)');
						$req->execute(array(
							'type' => $type,
							'titre' => $title,
							'description' => $content,
							'prix' => $prix));
						
						$log_success['elements_add'] = "Votre elements a été ajoutée avec succès !";
						$_SESSION['log_success'] = $log_success;
						
						$req->closeCursor(); // Termine le traitement de la requête						
					}
				}
				
				//-------------------------------------------------------------------------
				//Autorise l'édition si tag edit ET modif OK !
				if($_POST['elementsChange'] == "edit" && $_SESSION['allowmodif'] == TRUE)
				{
					if(!array_key_exists('elements_to_edit', $_POST) || $_POST['elements_to_edit'] == '') 
					{
						$log_errors ['elements_to_edit'] = "Vous n'avez pas choisi de elements à éditer !";
					}
					
					if(!array_key_exists('prix', $_POST) || $_POST['prix'] == '')
					{
						$log_errors ['name'] = "Vous n'avez pas saisi de prix !";
					}
					
					if(!array_key_exists('title', $_POST) || $_POST['title'] == '') 
					{
						$log_errors ['title'] = "Vous n'avez pas saisi de titre !";
					}
					
					if(!array_key_exists('content', $_POST))// || $_POST['content'] == '') 
					{
						$log_errors ['content'] = "Vous n'avez pas saisi de contenu pour l'élément !";
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
						
						$ID = $_POST["elements_to_edit"];						
						$prix = htmlentities($_POST["prix"]);						
						$title = strip_tags($_POST["title"], '<br><strong><small>');
						$content = strip_tags($_POST["content"], '<br><strong><small>');					
						
						$req = $bdd->prepare('UPDATE menu SET prix = :prix, titre = :title, description = :content WHERE id = :ID');
						$req->execute(array(
							'prix' => $prix,
							'title' => $title,
							'content' => $content,
							'ID' => $ID));
						
						$log_success['elements_edit'] = "Votre élément a été édité avec succès !";
						$_SESSION['log_success'] = $log_success;
						
						$req->closeCursor(); // Termine le traitement de la requête						
					}					
				}
				
				//-------------------------------------------------------------------------
				//Autorise la suppression si tag del ET modif OK !
				if($_POST['elementsChange'] == "del" && $_SESSION['allowmodif'] == TRUE)
				{
					if(!array_key_exists('elements_to_del', $_POST) || $_POST['elements_to_del'] == '') 
					{
						$log_errors ['elements_to_del'] = "Vous n'avez pas choisi d'éléments à supprimer !";
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
						
						$elements_to_del_array = $_POST['elements_to_del'];
						//print_r($elements_to_del_array);
						
						foreach ($elements_to_del_array as $selectValue)
						{
							$ID = $selectValue;
							//echo $ID;
							$req = $bdd->prepare('DELETE FROM menu WHERE id = :ID');
							$req->execute(array(
								'ID' => $ID));
						}

						$req->closeCursor(); // Termine le traitement de la requête
												
						$log_success['elements_del'] = "Votre élément a été supprimé avec succès !";
						$_SESSION['log_success'] = $log_success;

						$req->closeCursor(); // Termine le traitement de la requête
					}
				}									
			}
		}
	}
?>