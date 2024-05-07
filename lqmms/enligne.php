<?php
				$fp = fopen ("./chat/enligne.txt", "a+");
				$donnees=fgets ($fp);fclose ($fp);
				$don = explode("|",$donnees);
				for ($i=0; $i < count($don) ; $i++) {
					if(file_exists("./tmp/sess_".$don[$i])){
						$f = fopen ("./tmp/sess_".$don[$i], "a+");
						$donn=fgets ($f);fclose ($f);
						if ($donn != "") {$d = explode('"',$donn);
echo '<div id="mimi" onclick="chatligne(\''.$d[3].'\',\''.$don[$i].'\')"><img class="sex" src="./img/'.$don[$i].'.jpg"/><span class="mimisex">'.$d[3].'</span><img class="msex" src="./icon/ligne.png"/></div>';
						}
					}
				}
?>