<?php
// On initialise les sessions
session_start();

// On définit le mot de pass et login
define( 'USER','username');
define( 'PASS','password');

// On récupère le formulaire
$inputID 		= isset($_POST['inputID'])? 		$_POST['inputID']: 	'';
$inputPassword	= isset($_POST['inputPassword'])? 	$_POST['inputPassword']:'';
$message = '';

// Si les variables ne sont pas vides...
if( !empty( $inputID ) && !empty( $inputPassword ) ){
	
	// On vérifie si elle corresspondent aux constantes
	if( $inputID == USER  && $inputPassword == PASS ){
		
		// Si c'est ok, on définit la session ADMIN
		$_SESSION['admin'] = $_SERVER['REMOTE_ADDR'];
		header('Location: index.php');
		
	} else {
		
		// Autrement => message d'erreur
		$message = '<div class="error">Nom d\'utilisateur ou mot de pass erroné !</div>';
		
	}
		
}

if(isset($_GET['logout']))
{
	echo '1';
	session_destroy();
	header('Location: login.php');	
}

// On déclare le mode admin
$sessionAdmin = isset($_SESSION['admin'])? '<div id="admin">Bienvenue Administrateur !</div>': '';
?>