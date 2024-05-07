<?php
$ref = isset($_GET['mot']) ? $_GET['mot'] : '';

				$fp = fopen ("./chat/enligne.txt", "a+");
				$donnees=fgets ($fp);fclose ($fp);
				$don = explode("|",$donnees);
				for ($i=0; $i < count($don) ; $i++) {
					if(file_exists("./compts/".$don[$i].".txt")){
						$f = fopen ("./compts/".$don[$i].".txt", "a+");
						$donn=fgets ($f);fclose ($f);
						$d = explode('|',$donn);
						$nbr = mb_substr_count($d[0],$ref);
						if($nbr > 0){
echo '<div id="mimi" onclick="chatligne(\''.$d[0].'\',\''.$don[$i].'\')"><img class="sex" src="./img/'.$don[$i].'.jpg"/><span class="mimisex">'.$d[0].'</span></div>';
						}
				}}




?>