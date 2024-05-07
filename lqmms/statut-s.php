
<?php
$page = isset($_GET['page']) ? $_GET['page'] : '';
$s = isset($_GET['ref']) ? $_GET['ref'] : '';
	$fp = fopen ("./".$page."/s".$s.".txt", "a+");
	$donnees=fgets ($fp);
	$donnees=stripslashes($donnees);
	if(strlen($donnees) > 700){
	echo  substr($donnees,0,700);
	echo ' ...<a href="./page.php?page=m&ref='.$page.'&s='.$s.'">Read more</a>'; 
	}else{
	echo $donnees; 
	}
	fclose ($fp);
?>