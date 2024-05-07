<script>alert("jat");</script>
<?php
$ref = isset($_POST['ref']) ? $_POST['ref'] : '' ;
$stat = isset($_POST['stat']) ? $_POST['stat'] : '' ;
$statut = isset($_POST['statut']) ? $_POST['statut'] : '' ;
$ensien = isset($_POST['ensien']) ? $_POST['ensien'] : '' ;

if($ensien == ''){
							$f1 = fopen ("./".$ref."/s".$stat.".txt", "a+");
							$donnees=fgets ($f1);
$donnees = mb_eregi_replace("<div id='statut-text".$ref."-".$stat."'></div>","<div id='statut-text".$ref."-".$stat."'>".$statut."</div>",$donnees);		
							ftruncate($f1,0);
							fputs ($f1,$donnees);
							fclose ($f1);							

}else{
							$f1 = fopen ("./".$ref."/s".$stat.".txt", "a+");
							$donnees=fgets ($f1);
							$donnees = mb_eregi_replace($ensien ,$statut,$donnees);
							ftruncate($f1,0);
							fputs ($f1,$donnees);
							fclose ($f1);
}
?>