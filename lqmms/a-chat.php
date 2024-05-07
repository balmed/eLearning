<script  type="text/javascript" src="./script/chat.js"></script>
<?php
$ref = isset($_GET['ref']) ? $_GET['ref'] : '';
if($ref != "p"){
for($i=1;$i<=9;$i++){    
				$fp = fopen ("./chat/".$ref."-m-".$i.".txt", "a+");
				$donnees=fgets ($fp);
				$donnees=stripslashes($donnees);
				$donnees = Smiley($donnees);
				echo $donnees; 
				fclose ($fp);
					}
}					
function Smiley ($donnees){
	$code=array(":\)",":\(",":p",":D","<3",";\)","\(y\)",":o");
	$smileys_url=array("1.png","a2.png","p.gif","D.png","love.gif","sm_wink.gif","4.png","sm.gif");
	for ($i=0; $i<8; ++$i)
		{
		if(mb_ereg($code[$i],$donnees)){
		$emoticones="<img src='./smileys/".$smileys_url[$i]."'/>";
		$donnees=mb_eregi_replace($code[$i],$emoticones, $donnees);
		}}
	return $donnees;
}



?>