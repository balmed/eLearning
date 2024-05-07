<?php
$page = isset($_GET['page']) ? $_GET['page'] : '';
$s = isset($_GET['ref']) ? $_GET['ref'] : '';
				$fp = fopen ("./".$page."/cm".$s.".txt", "a+");
				$donnees=fgets ($fp);
				$donnees=stripslashes($donnees);
				$site = explode("|@|",$donnees);
				if(count($site) > 6){
					echo '<span style="font-size:12px"><a href="./page.php?page=m&ref='.$page.'&s='.$s.'">-------------------------------------------Afficher les commentaire------------------------------------------</a></span><p>';$donnees="";
						for($i=count($site)-6;$i < count($site);$i++){
							echo $site[$i];
						}
				}
				$donnees = mb_eregi_replace("\|\@\|","",$donnees);
				echo $donnees;
				fclose ($fp);
?>