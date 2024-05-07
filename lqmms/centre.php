<?php
$id = isset($_POST['id']) ? $_POST['id'] : '' ;
$ref = isset($_POST['ref']) ? $_POST['ref'] : '' ;

$fp = fopen ("./".$ref."/c".$id.".txt", "a+");
$nbr=fgets($fp);
$nbr=$nbr + 1;
ftruncate($fp,0);
fputs ($fp, $nbr);
fclose ($fp);
// incrimenter nombre des dislik dans un statut										
?>