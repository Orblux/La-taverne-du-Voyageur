<?php 
 
$contenu = stripslashes($_POST["commentaire"]);
 
$filename = 'caffros.html';
$ht = $_SERVER["HTTP_REFERER"];
 
if (is_writable($filename)) { // Le fichier est il inscriptible
 
	if (!$handle = fopen($filename, 'w+')) { // Je vous conseil de lire la fonction fopen($filename, 'a')
		echo "Impossible d'ouvrir le fichier ($filename)";
		exit;
	}
 
	if (fwrite($handle, $contenu) === FALSE) { // On écrit dans le fichier en testant les droits
		echo "Le fichier $filename n'est pas inscriptible";
		exit;
	}
 
	echo "L'écriture dans le fichier ($filename) a réussi";
	fclose($handle); // on ferme le fichier aprés avoir écrit dedans
 
} else {echo "Le fichier $filename n'est pas accessible en écriture.";}
 
 
//Et la tu rediriges vers ta page pour rafraichir la liste
header("Location:".$ht."" );
exit;
 
 
?>