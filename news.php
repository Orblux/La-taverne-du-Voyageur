<!-- Modale News -->
<div class="modal fade" id="News" tabindex="-1" role="dialog" aria-labelledby="News" aria-hidden="true">
    <div class="modal-dialog modal-height">
        <div class="modal-content">			
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Editeur de news</h4>
            </div>
			<form class="form-signin" action="<?php echo $_SERVER['PHP_SELF']?>" method="post" id="login-form">
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

<?php
	if(isset($_SESSION['allowmodif']))
	{
		if($_SESSION['allowmodif'] == TRUE)
		{
			?>
			<button type="button" data-toggle="modal" class="btn btn-default btn-lg" data-target="#News"><i class="fa fa-pencil-square-o icon-lg"></i> Editer</button>
			
			<?php
			// $log_errors = [];
			$log_errors = array(); // on crée une vérif de champs
			
			// $log_success = [];
			$log_success = array(); // on crée une vérif de champs
			
			?>
			
			
			
			<?php
		}
	}
?>