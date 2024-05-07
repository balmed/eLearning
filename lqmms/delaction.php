<?php
session_start();
$nom = isset($_SESSION['login']) ? $_SESSION['login'] : '';
$smia = isset($_SESSION['nom']) ? $_SESSION['nom'] : '';
$a = isset($_GET['a']) ? $_GET['a'] : '';
$b = isset($_GET['b']) ? $_GET['b'] : '';
$ref = isset($_GET['ref']) ? $_GET['ref'] : '';

if ($ref == "del") {
$fp = fopen ("./action/".$nom."-m.txt", "a+");
$donnees=fgets ($fp);
$donnees = mb_eregi_replace($a."\|".$b."\|","",$donnees);
ftruncate($fp,0);
fputs ($fp, $donnees);
fclose($fp);
}else{
$fp = fopen ("./action/".$a."-m.txt", "a+");
$donnees=fgets ($fp);
fputs ($fp,$donnees.$nom."|".$smia."|");
fclose($fp);
}

?>