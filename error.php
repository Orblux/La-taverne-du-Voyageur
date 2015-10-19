<?php
//echo fatal;
include("mysql.php");
$nvpwd = password_hash("123456", PASSWORD_DEFAULT);
$ID = sha1("Aerscylma");
				
$req = $bdd->prepare('UPDATE ltdv SET password = :nvpwd WHERE identifiant = :ID');
$req->execute(array('nvpwd' => $nvpwd,'ID' => $ID,));
?>