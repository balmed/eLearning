<?php
$page = isset($_GET['page']) ? $_GET['page'] : '';
$s = isset($_GET['ref']) ? $_GET['ref'] : '';
				$fp = fopen ("./".$page."/a".$s.".txt", "a+");
				$donnees=fgets ($fp);
				$donnees=stripslashes($donnees);
				echo "(".$donnees." <img src='./icon/4.png' />)"; 
				fclose ($fp);

?>