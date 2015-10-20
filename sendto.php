<?php
	session_start();//on démarre la session

	// $errors = [];
	$errors = array(); // on crée une vérif de champs
	
	if(!array_key_exists('current_page', $_POST) || $_POST['current_page'] == '') 
	{// on verifie l'intégrité du formulaire
		echo "FATAL ERROR !";
		header('Location: index.php');
	}	
	
	if(!array_key_exists('name', $_POST) || $_POST['name'] == '') 
	{// on verifie l'existence du champ et d'un contenu
		$errors ['name'] = "Vous n'avez pas renseigné votre nom !";
	}

	if(!array_key_exists('email', $_POST) || $_POST['email'] == '' || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) 
	{// on verifie existence de la clé
		$errors ['mail'] = "Vous n'avez pas renseigné votre email !";
	}
	
	if(!array_key_exists('subject', $_POST) || $_POST['subject'] == '') 
	{// on verifie l'existence du champ sujet
		$errors ['subject'] = "Vous n'avez pas saisi de sujet !";
	}

	if(!array_key_exists('message', $_POST) || $_POST['message'] == '') 
	{// on verifie l'existence du message
		$errors ['message'] = "Vous n'avez pas renseigné votre message !";
	}

	if(array_key_exists('antispam', $_POST)) 
	{// on place un petit filet anti robots spammers
		$errors ['antispam'] = "Vous êtes un robots spammer !";
	}

	//On check les infos transmises lors de la validation
	if(!empty($errors))
	{ // si erreur on renvoie vers la page précédente
		$_SESSION['errors'] = $errors;//on stocke les erreurs
		$_SESSION['inputs'] = $_POST;
		if($_POST['current_page'] == "hotellerie")
		{	
			header('Location: hotellerie.php');
		}
		elseif($_POST['current_page'] == "restauration")
		{		
			header('Location: restauration.php');
		}
		else
		{
			header('Location: index.php');
		}
	}
	else
	{		
		//=====================================================
		//=====Création du mail.
		$mail = 'a.kevin1@aliceadsl.fr'; // Déclaration de l'adresse de destination.
		if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#", $mail)) // On filtre les serveurs qui rencontrent des bogues.
		{
			$passage_ligne = "\r\n";
		}
		else
		{
			$passage_ligne = "\n";
		}
		//=====Déclaration des messages au format texte et au format HTML.
		$message_html = htmlspecialchars($_POST['message']);
		//==========
		
		//=====Création de la boundary
		$boundary = "-----=".md5(rand());
		//==========
		
		//=====Définition du sujet.
		$sujet = htmlspecialchars($_POST['subject']);
		//=========
		
		//=====Création du header de l'e-mail.
		$header = "From: " . htmlspecialchars($_POST['name']).$passage_ligne;
		$header.= "Reply-to: "  . htmlspecialchars($_POST['email']).$passage_ligne;
		$header.= "MIME-Version: 1.0".$passage_ligne;
		$header.= "Content-type: text/html; charset=utf-8".$passage_ligne." boundary=\"$boundary\"".$passage_ligne;
		//==========
		
		//=====Création du message.
		$message = $passage_ligne."--".$boundary.$passage_ligne;
		//=====Ajout du message au format HTML
		$message.= "Content-Type: text/html; charset=\"ISO-8859-1\"".$passage_ligne;
		$message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
		$message.= $passage_ligne.$message_html.$passage_ligne;
		//==========
		$message.= $passage_ligne."--".$boundary."--".$passage_ligne;
		//==========
		
		//=====Envoi de l'e-mail.
		if(mail($mail,$sujet,$message,$header))
		{
			$_SESSION['success'] = 1;
		}
		else
		{
			$errors ['envoi'] = "Un problème est survenu durant l'envoi !";
			$_SESSION['errors'] = $errors;//on stocke les erreurs
			$_SESSION['inputs'] = $_POST;
		}
		//==========
		
		if($_POST['current_page'] == "hotellerie")
		{	
			header('Location: hotellerie.php');
		}
		elseif($_POST['current_page'] == "restauration")
		{		
			header('Location: restauration.php');
		}
		else
		{
			header('Location: index.php');
		}
    }
?>