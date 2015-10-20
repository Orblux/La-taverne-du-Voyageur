<div>
	<?php if(array_key_exists('log_errors',$_SESSION)): ?>
		<div class="alert alert-danger text-center alert-dismissable fade in">
			<button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
			<?= implode('<br>', $_SESSION['log_errors']); ?>
		</div>
	<?php endif; ?>
	<?php if(array_key_exists('log_success',$_SESSION)): ?>
		<div class="alert alert-success text-center alert-dismissable fade in">
			<button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
			<?= implode('<br>', $_SESSION['log_success']); ?>
		</div>
	<?php endif; ?>
</div>
<?php
/*echo fatal;
include("mysql.php");
$nvpwd = password_hash("123456", PASSWORD_DEFAULT);
$ID = sha1("Aerscylma");
				
$req = $bdd->prepare('UPDATE ltdv SET password = :nvpwd WHERE identifiant = :ID');
$req->execute(array('nvpwd' => $nvpwd,'ID' => $ID,));
$req->closeCursor(); // Termine le traitement de la requête*/
?>