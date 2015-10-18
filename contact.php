<?php
	if($current_page == "hotellerie")
	{
		?>
		<div class="footer-content col-sm-6 col-sm-offset-3">
		<?php
	}
	elseif($current_page == "restauration")
	{
		?>
		<div class="col-sm-6">
		<?php
	}
	else
	{
		echo "Error : No contact form for this page !";
	}
?>
	<div class="footer-content">
		<div>
			<?php if(array_key_exists('errors',$_SESSION)): ?>
				<div class="alert alert-danger">
					<?= implode('<br>', $_SESSION['errors']); ?>
				</div>
			<?php endif; ?>
			<?php if(array_key_exists('success',$_SESSION)): ?>
				<div class="alert alert-success">
					Votre email à bien été transmis !
				</div>
			<?php endif; ?>
		</div>
		<form action="sendto.php" method="post" id="footer-form">
			<input type="hidden" name="current_page" <?php
				if($current_page == "hotellerie")
				{	
					?>
					value="hotellerie" />
					<?php
				}
				elseif($current_page == "restauration")
				{
					?>
					value="restauration" />
					<?php
				}
				else
				{
					?>
					value="error" />
					<?php
				}
				?>			
			<div class="form-group has-feedback">
				<label class="sr-only" for="inputname">Votre nom</label>
				<input type="text" name="name" class="form-control" id="inputname" placeholder="Nom" value="<?php echo isset($_SESSION['inputs']['name'])? $_SESSION['inputs']['name'] : ''; ?>" required>
				<i class="fa fa-user form-control-feedback"></i>
			</div>
			<div class="form-group has-feedback">
				<label class="sr-only" for="inputemail">Votre email</label>
				<input required type="email" name="email" class="form-control" id="inputemail" placeholder="E-Mail" value="<?php echo isset($_SESSION['inputs']['email'])? $_SESSION['inputs']['email'] : ''; ?>" required>
				<i class="fa fa-envelope form-control-feedback"></i>
			</div>
			<div class="form-group has-feedback">
				<label class="sr-only" for="inputsubject">Votre sujet</label>
				<input required type="subject" name="subject" class="form-control" id="inputsubject" placeholder="Sujet" value="<?php echo isset($_SESSION['inputs']['subject'])? $_SESSION['inputs']['subject'] : ''; ?>" required>
				<i class="fa fa-pencil form-control-feedback"></i>
			</div>
			<div class="form-group has-feedback">
				<label class="sr-only" for="inputmessage">Votre message</label>
				<textarea required id="inputmessage" name="message" class="form-control" rows="8" placeholder="Message" required></textarea>
				<i class="fa fa-pencil form-control-feedback"></i>
			</div>
			<div class="checkbox">
				<label for="checkspam">
				<input type="checkbox" name="antispam" id="checkspam">Je suis un spammer et je l'assume !
				</label>
			</div>
			<input type="submit" value="Envoyer" class="btn btn-default">
		</form>
	</div>
</div>
<?php
	unset($_SESSION['inputs']); // on nettoie les données précédentes
	unset($_SESSION['success']);
	unset($_SESSION['errors']);
?>