<!-- Modale News_add -->
<div class="modal fade" id="News_add" tabindex="-1" role="dialog" aria-labelledby="News" aria-hidden="true">
    <div class="modal-dialog modal-height">
        <div class="modal-content">			
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Editeur de news</h4>
            </div>
			<form role="form" class="form-signin" action="<?php echo $_SERVER['PHP_SELF']?>" method="post" id="login-form">
				<input type="hidden" name="newsChange" value="add">
				<div class="modal-body">         
					<div class="form-group has-feedback">
						<label class="sr-only" for="inputname">Auteur</label>
						<input type="text" name="name" class="form-control" id="inputname" placeholder="Nom" value="<?php echo isset($_SESSION['ID'])? $_SESSION['ID'] : ''; ?>" required>
						<i class="fa fa-user form-control-feedback"></i>
					</div>
					<div class="form-group has-feedback">
						<label class="sr-only" for="inputtitle">Titre</label>
						<input required type="title" name="title" class="form-control" id="inputtitle" placeholder="Titre" value="<?php echo isset($_SESSION['inputs']['title'])? $_SESSION['inputs']['title'] : ''; ?>" required>
						<i class="fa fa-sticky-note-o form-control-feedback"></i>
					</div>
					<div class="form-group has-feedback">
						<label class="sr-only" for="inputcontent">News</label>
						<textarea required type="content" name="content" rows="8" class="form-control" id="inputcontent" placeholder="News" value="<?php echo isset($_SESSION['inputs']['content'])? $_SESSION['inputs']['content'] : ''; ?>" required></textarea>
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

<!-- Modale News_edit -->
<div class="modal fade" id="News_edit" tabindex="-1" role="dialog" aria-labelledby="News" aria-hidden="true">
    <div class="modal-dialog modal-height">
        <div class="modal-content">			
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Editeur de news</h4>
            </div>
			<form role="form" class="form-signin" action="<?php echo $_SERVER['PHP_SELF']?>" method="post" id="login-form">
				<p class="text-center">Quel news voulez-vous éditer ? <br></p>
				<input type="hidden" name="newsChange" value="edit">
				<div class="modal-body">
					<div class="form-group">
						<select name="news_to_edit" class="form-control">
							<?php
								include("mysql.php");
								$req = $bdd->prepare('SELECT id, titre FROM news');
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
						<label class="sr-only" for="inputname">Auteur</label>
						<input type="text" name="name" class="form-control" id="inputname" placeholder="Nom" value="<?php echo isset($_SESSION['ID'])? $_SESSION['ID'] : ''; ?>" required>
						<i class="fa fa-user form-control-feedback"></i>
					</div>
					<div class="form-group has-feedback">
						<label class="sr-only" for="inputtitle">Titre</label>
						<input required type="title" name="title" class="form-control" id="inputtitle" placeholder="Titre" value="<?php echo isset($_SESSION['inputs']['title'])? $_SESSION['inputs']['title'] : ''; ?>" required>
						<i class="fa fa-sticky-note-o form-control-feedback"></i>
					</div>
					<div class="form-group has-feedback">
						<label class="sr-only" for="inputcontent">News</label>
						<textarea required type="content" name="content" rows="8" class="form-control" id="inputcontent" placeholder="News" value="<?php echo isset($_SESSION['inputs']['content'])? $_SESSION['inputs']['content'] : ''; ?>" required></textarea>
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

<!-- Modale News_del -->
<div class="modal fade" id="News_del" tabindex="-1" role="dialog" aria-labelledby="News" aria-hidden="true">
    <div class="modal-dialog modal-height">
        <div class="modal-content">			
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Editeur de news</h4>
            </div>
			<form role="form" class="form-signin" action="<?php echo $_SERVER['PHP_SELF']?>" method="post" id="login-form">
				<p class="text-center">Quel(les) news voulez-vous supprimer ? <br>
				Maintenez CTRL pour sélectionner plusieurs news.
				<br><br></p>
				<input type="hidden" name="newsChange" value="del">
				<div class="modal-body">
					<div class="form-group">
						<select multiple name="news_to_del[]" class="form-control">
							<?php
								include("mysql.php");
								$req = $bdd->prepare('SELECT id, titre FROM news');
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
				<div class="btn-group block-center">
					<button type="button" data-toggle="modal" class="btn btn-default btn-lg" data-target="#News_add"><i class="fa fa-plus-square icon-lg"></i> Ajouter</button>
					<button type="button" data-toggle="modal" class="btn btn-default btn-lg" data-target="#News_edit"><i class="fa fa-pencil-square-o icon-lg"></i> Modifier</button>
					<button type="button" data-toggle="modal" class="btn btn-default btn-lg" data-target="#News_del"><i class="fa fa-minus-square icon-lg"></i> Supprimer</button>			
				</div>
			<?php
			
			// $log_errors = [];
			$log_errors = array(); // on crée une vérif de champs
			
			// $log_success = [];
			$log_success = array(); // on crée une vérif de champs
				
			//Autorise modif si Admin
			if(array_key_exists('newsChange', $_POST) && isset($_SESSION['allowmodif']))
			{
				//-------------------------------------------------------------------------
				//Autorise l'ajout si tag add ET modif OK !
				if($_POST['newsChange'] == "add" && $_SESSION['allowmodif'] == TRUE)
				{
					if(!array_key_exists('name', $_POST) || $_POST['name'] == '')
					{
						$log_errors ['name'] = "Vous n'avez pas saisi de nom d'auteur !";
					}
					
					if(!array_key_exists('title', $_POST) || $_POST['title'] == '') 
					{
						$log_errors ['title'] = "Vous n'avez pas saisi de titre !";
					}
					
					if(!array_key_exists('content', $_POST) || $_POST['content'] == '') 
					{
						$log_errors ['content'] = "Vous n'avez pas saisi de contenu pour la news !";
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
						
						$name = sha1(htmlentities($_POST["name"]));
						$title = strip_tags($_POST["title"], '<br><strong><small>');
						$content = strip_tags($_POST["content"], '<br><strong><small>');
						
						$req = $bdd->prepare('INSERT INTO news(auteur, titre, contenu) VALUES(:name, :title, :content)');
						$req->execute(array(
							'name' => $name,
							'title' => $title,
							'content' => $content));
						
						$log_success['news_add'] = "Votre news a été ajoutée avec succès !";
						$_SESSION['log_success'] = $log_success;
						
						$req->closeCursor(); // Termine le traitement de la requête						
					}
				}
				
				//-------------------------------------------------------------------------
				//Autorise l'édition si tag edit ET modif OK !
				if($_POST['newsChange'] == "edit" && $_SESSION['allowmodif'] == TRUE)
				{
					if(!array_key_exists('news_to_edit', $_POST) || $_POST['news_to_edit'] == '') 
					{
						$log_errors ['news_to_edit'] = "Vous n'avez pas choisi de news à éditer !";
					}
					
					if(!array_key_exists('name', $_POST) || $_POST['name'] == '')
					{
						$log_errors ['name'] = "Vous n'avez pas saisi de nom d'auteur !";
					}
					
					if(!array_key_exists('title', $_POST) || $_POST['title'] == '') 
					{
						$log_errors ['title'] = "Vous n'avez pas saisi de titre !";
					}
					
					if(!array_key_exists('content', $_POST) || $_POST['content'] == '') 
					{
						$log_errors ['content'] = "Vous n'avez pas saisi de contenu pour la news !";
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
						
						$ID = $_POST["news_to_edit"];						
						$name = sha1(htmlentities($_POST["name"]));						
						$title = strip_tags($_POST["title"], '<br><strong><small>');
						$content = strip_tags($_POST["content"], '<br><strong><small>');					
						
						$req = $bdd->prepare('UPDATE news SET auteur = :name, titre = :title, contenu = :content WHERE id = :ID');
						$req->execute(array(
							'name' => $name,
							'title' => $title,
							'content' => $content,
							'ID' => $ID));
						
						$log_success['news_edit'] = "Votre news a été éditée avec succès !";
						$_SESSION['log_success'] = $log_success;
						
						$req->closeCursor(); // Termine le traitement de la requête						
					}					
				}
				
				//-------------------------------------------------------------------------
				//Autorise la suppression si tag del ET modif OK !
				if($_POST['newsChange'] == "del" && $_SESSION['allowmodif'] == TRUE)
				{
					if(!array_key_exists('news_to_del', $_POST) || $_POST['news_to_del'] == '') 
					{
						$log_errors ['news_to_del'] = "Vous n'avez pas choisi de news à supprimer !";
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
						
						$news_to_del_array = $_POST['news_to_del'];
						//print_r($news_to_del_array);
						
						foreach ($news_to_del_array as $selectValue)
						{
							$ID = $selectValue;
							//echo $ID;
							$req = $bdd->prepare('DELETE FROM news WHERE id = :ID');
							$req->execute(array(
								'ID' => $ID));
						}

						$req->closeCursor(); // Termine le traitement de la requête
												
						$log_success['news_del'] = "Votre news a été supprimée avec succès !";
						$_SESSION['log_success'] = $log_success;

						$req->closeCursor(); // Termine le traitement de la requête
					}
				}									
			}
		}
	}
?>