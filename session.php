<?php	
	if(isset($_SESSION['login']) && isset($_SESSION['logout']) && isset($_SESSION['remember']))
	{
		// Session à détruire
		if($_SESSION['logout'] == TRUE)
		{			
			session_destroy();
		}
		else
		{
			// Session en cours
			if($_SESSION['login'] == TRUE && $_SESSION['logout'] == FALSE)
			{
				// Permanence ?
				if($_SESSION['remember'] == FALSE)
				{
					$_SESSION['logout'] = TRUE;				
				}
				else
				{
					$_SESSION['logout'] == FALSE;				
				}
				
				// Admin ?
				if($_SESSION['admin'] == TRUE)
				{
					// On récupère les informations admin
					include("mysql.php");				
										
					$req = $bdd->prepare('SELECT identifiant FROM ltdv WHERE id = :bdd_line');
					$req->execute(array(
						'bdd_line' => $_SESSION['bdd_line'],						
						));
					
					$data = $req->fetch();
					$verifID = $data['identifiant'];
					$req->closeCursor(); // Termine le traitement de la requête
					
					if(sha1($_SESSION['ID']) == $verifID)
					{
						$_SESSION['allowmodif'] = TRUE;
					}
					else
					{
						// Session corrompue !
						session_destroy();
						$_SESSION['login'] = FALSE;
						$_SESSION['logout'] = FALSE;
						$_SESSION['allowmodif'] = FALSE;
						$_SESSION['remember'] = FALSE;
						$_SESSION['admin'] = FALSE;
						$_SESSION['ID'] = '';
					}
				}
				// Si pas admin ?
				else
				{
					$_SESSION['logout'] == TRUE;
					$_SESSION['allowmodif'] = FALSE;
				}			
			}
			else
			{
				// Session corrompue !
				session_destroy();
				$_SESSION['login'] = FALSE;
				$_SESSION['logout'] = FALSE;
				$_SESSION['allowmodif'] = FALSE;
				$_SESSION['remember'] = FALSE;
				$_SESSION['admin'] = FALSE;
				$_SESSION['ID'] = '';
			}		
		}
	}
	else
	{
		// Session corrompue !
		session_destroy();
		$_SESSION['login'] = FALSE;		
		$_SESSION['logout'] = FALSE;		
		$_SESSION['allowmodif'] = FALSE;
		$_SESSION['remember'] = FALSE;
		$_SESSION['admin'] = FALSE;
		$_SESSION['ID'] = '';
	}
?>