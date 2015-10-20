<?php
	// On initialise les sessions
	session_start();

	// $log_errors = [];
	$log_errors = array(); // on cr�e une v�rif de champs
	
	// $log_success = [];
	$log_success = array(); // on cr�e une v�rif de champs
	
	if(!array_key_exists('current_page', $_POST) || $_POST['current_page'] == '') 
	{// on verifie l'int�grit� du formulaire
		echo "FATAL ERROR : no login modal for this page !";
		header('Location: index.php');
	}	
	else
	{	
		if(isset($_POST['logout']))
		{
			$log_success['logout'] = "Vous avez �t� d�connect� avec succ�s !";
			$_SESSION['logout'] = TRUE;
			$_SESSION['login'] = FALSE;
			$_SESSION['log_success'] = $log_success;
			session_destroy();
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
		elseif(isset($_POST['login']))
		{	
			if(!array_key_exists('inputID', $_POST) || $_POST['inputID'] == '')
			{// on verifie l'existence du champ identifiant
				$log_errors ['inputID'] = "Vous n'avez pas renseign� votre identifiant !";
			}	
			
			if(!array_key_exists('inputPassword', $_POST) || $_POST['inputPassword'] == '') 
			{// on verifie l'existence du mot de passe
				$log_errors ['inputPassword'] = "Vous n'avez pas saisi de mot de passe !";	
			}	
			
			//On check les infos transmises lors de la validation
			if(!empty($log_errors))
			{ // si erreur on renvoie vers la page pr�c�dente
				$_SESSION['login'] = FALSE;
				$_SESSION['logout'] = FALSE;
				$_SESSION['log_errors'] = $log_errors;//on stocke les erreurs
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
				// On r�cup�re le mot de passe et login
				include("mysql.php");				
				$reponse = $bdd->query('SELECT * FROM ltdv WHERE droits=0');
			
				// On r�cup�re le formulaire
				$inputID 		= isset($_POST['inputID'])? 		$_POST['inputID']:'';
				$inputPassword	= isset($_POST['inputPassword'])? 	$_POST['inputPassword']:'';
		
				// Si les variables ne sont pas vides...
				if(!empty($inputID) && !empty($inputPassword))
				{
					// On v�rifie si elle corresspondent aux constantes
					$USER = '';
					$PASS = '';
					$bdd_line = 0;
					$continue = TRUE;
					
					while($continue && $data = $reponse->fetch())
					{						
						$USER = $data['identifiant'];
						$PASS = $data['password'];
						$bdd_line = $data['id'];
						if(password_verify($inputPassword, $PASS) && $USER == sha1($inputID))
						{
							$continue = FALSE;
						}
					}
					
					$reponse->closeCursor(); // Termine le traitement de la requ�te
					
					if(password_verify($inputPassword, $PASS) && $USER == sha1($inputID))
					{
						// Si c'est ok, on d�finit la session ADMIN
						$_SESSION['admin'] = TRUE;
						$_SESSION['login'] = TRUE;
						$_SESSION['logout'] = FALSE;						
						$_SESSION['ID'] = $inputID;
						$_SESSION['bdd_line'] = $bdd_line;
						
						if(array_key_exists('remember', $_POST)) 
						{// on v�rifie si le client veut �tre loggu� sur toutes les pages (si remember existe alors la r�ponse est oui !)
							$_SESSION['remember'] = TRUE;
						}
						else
						{
							$_SESSION['remember'] = FALSE;
						}
						
						// Si c'est ok, on revient sur la page
						$log_success['login'] = "Bienvenue administrateur !";
						$_SESSION['log_success'] = $log_success;
						$_SESSION['inputs'] = $_POST;
						if($_POST['current_page'] == "hotellerie")
						{	
							header('Location: hotellerie.php', FALSE);
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
						// Autrement => message d'erreur
						$_SESSION['login'] = FALSE;
						$_SESSION['logout'] = FALSE;
						$log_errors['login'] = "Nom d'utilisateur ou mot de passe faux !";
						$_SESSION['log_errors'] = $log_errors;//on stocke les erreurs
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
				}
			}
		}
		else
		{
			echo "FATAL ERROR : no login-logout var for this page !";
			header('Location: index.php');
		}
	}	
?>