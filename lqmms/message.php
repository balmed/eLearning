<?php
$nom = isset($_GET['n']) ? $_GET['n'] : '';
	$fp = fopen ("./message/message-".$nom.".txt", "a+");
	$donnees=fgets ($fp);
	$donnees=stripslashes($donnees);
	echo $donnees;
	fclose ($fp);
?>