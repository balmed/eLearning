<?php
$page = isset($_GET['page']) ? $_GET['page'] : '';
$s = isset($_GET['ref']) ? $_GET['ref'] : '';
				$fp = fopen ("./".$page."/cm".$s.".txt", "a+");
				$donnees=fgets ($fp);
				$donnees=stripslashes($donnees);
				$donnees = mb_eregi_replace("\|\@\|","",$donnees);
				echo $donnees;
				fclose ($fp);
?>