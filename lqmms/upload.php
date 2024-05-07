<?php
session_start();
$login = isset($_SESSION['login']) ? $_SESSION['login'] : '';
$nom= isset($_SESSION['nom']) ? $_SESSION['nom'] : '';
$rel = isset($_SESSION['rel']) ? $_SESSION['rel'] : '';

$commentaire = isset($_GET['suj']) ? $_GET['suj'] : '' ; 	
$page = isset($_GET['page']) ? $_GET['page'] : '' ;
$ref = isset($_GET['ref']) ? $_GET['ref'] : '' ;              
$ex = isset($_GET['ex']) ? $_GET['ex'] : '' ;
$data = isset($_GET['data']) ? $_GET['data'] : '' ;  



$n = fopen ("./".$ref."/ss.txt", "a+");
$n=fgets($n);

	for($i=$n;$i>=1;$i--){//----------------------sujet   <div id='statut-text".$page."'>
								$ip=$i + 1;
								$fS2 = fopen ("./".$ref."/s".$ip.".txt", "a+");   	
								$fS1 = fopen ("./".$ref."/s".$i.".txt", "a+");
								ftruncate($fS2,0);
								$donnees=fgets ($fS1);
				$donnees = mb_eregi_replace($ref.",".$i,$ref.",".$ip,$donnees);
			
				$donnees = mb_eregi_replace("video_displayer".$i,"video_displayer".$ip,$donnees);
			
				$donnees = mb_eregi_replace($ref.$i.".jpg",$ref.$ip.".jpg",$donnees);
			
				$donnees = mb_eregi_replace($ref.$i.".docx",$ref.$ip.".docx",$donnees);
				$donnees = mb_eregi_replace($ref.$i.".pdf",$ref.$ip.".pdf",$donnees);
				$donnees = mb_eregi_replace("vid/".$ref.$i.".mp4","vid/".$ref.$ip.".mp4",$donnees);
			
				$donnees = mb_eregi_replace("statut-text".$page."-".$i,"statut-text".$page."-".$ip,$donnees);
								fputs ($fS2, $donnees);
								fclose ($fS2);
								ftruncate($fS1,0);
								fclose ($fS1);
}
	for($i=$n;$i>=1;$i--){//------------------------commentaire
						$ip=$i + 1;
						$f6 = fopen ("./".$ref."/cm".$ip.".txt", "a+");   	
						$f5 = fopen ("./".$ref."/cm".$i.".txt", "a+");
						ftruncate($f6,0);
						$donnees=fgets ($f5);
						fputs ($f6, $donnees);
						fclose ($f6);
						ftruncate($f5,0);	
						fclose ($f5);
}
   for($i=$n;$i>=1;$i--){//------------------------jaime
								$ip=$i + 1;
								$fS2 = fopen ("./".$ref."/a".$ip.".txt", "a+");   	
								$fS1 = fopen ("./".$ref."/a".$i.".txt", "a+");
								ftruncate($fS2,0);
								$donnees=fgets ($fS1);
								fputs ($fS2, $donnees);
								fclose ($fS2);
								ftruncate($fS1,0);
								fclose ($fS1);	
}
for($i=$n;$i>=1;$i--){//-------------------------------fuck
								$ip=$i + 1;
								$fS2 = fopen ("./".$ref."/c".$ip.".txt", "a+");   	
								$fS1 = fopen ("./".$ref."/c".$i.".txt", "a+");
								ftruncate($fS2,0);
								$donnees=fgets ($fS1);
								fputs ($fS2, $donnees);
								fclose ($fS2);
								ftruncate($fS1,0);
								fclose ($fS1);	
}
for($i=$n;$i>=1;$i--){//-----------------------les images
	$ip=$i + 1;
		if(file_exists("./img/".$ref."".$i.".jpg")){
			rename("./img/".$ref.$i.".jpg","./img/".$ref.$ip.".jpg");}
}
for($i=$n;$i>=1;$i--){//-----------------------les pdf
	$ip=$i + 1;
		if(file_exists("./pdf/".$ref."".$i.".pdf")){
			rename("./pdf/".$ref.$i.".pdf","./pdf/".$ref.$ip.".pdf");
		}
		if(file_exists("./img/".$ref."".$i.".docx")){
			rename("./img/".$ref.$i.".docx","./img/".$ref.$ip.".docx");
		}
}
for($i=$n;$i>=1;$i--){//-----------------------les vid
	$ip=$i + 1;
		if(file_exists("./vid/".$ref."".$i.".mp4")){
			rename("./vid/".$ref.$i.".mp4","./vid/".$ref.$ip.".mp4");
		}
}

		//-----------------------------nouveau sujet
					$heure = date("H");
					$minute = date("i");
					$jour = date("d");
					$mois = date("m");
					$annee = date("y");
					$date = $jour.'/'.$mois.'/20'.$annee.' ('.$heure.'H'.$minute.')';
							$f1 = fopen ("./".$ref."/s1.txt", "a+");
							$commentaire = mb_eregi_replace("<","<'",$commentaire);
							$commentaire = mb_eregi_replace("\r\n","<br/>",$commentaire);

if($data == "pdf"){
				$text = "<img style='float:left;margin-right:6px' src='./img/".$login.".jpg' width='40px' height='40px'/> ".$nom."</strong></h2></div><div class='dc'><abbr>".$date."</div><br><div class='db'><div id='statut-text".$page."-1'>".$commentaire."</div></div><br><img onclick='tel(\"".$page."1\",\"".$ex."\")' style='border-radius:15px;border: 0px solid #000; width:100px;height:80px;margin-left:180px;cursor:pointer' src='./img/".$ex.".jpg'><br>";
				}
elseif($data == "img"){
				$text = "<img style='float:left;margin-right:6px' src='./img/".$login.".jpg' width='40px' height='40px'/> ".$nom."</strong></h2></div><div class='dc'><abbr>".$date."</div><br><div class='db'><div id='statut-text".$page."-1'>".$commentaire."</div></div><br><img style='border-radius:15px;border: 8px solid #000; width:460px;height:280px' src='./img/".$ref."1.jpg'><br>";
				}
elseif($data == "vid"){
					$text = "<img style='float:left;margin-right:6px' src='./img/".$login.".jpg' width='40px' height='40px'/> ".$nom."</strong></h2></div><div class='dc'><abbr>".$date."</div><br><div class='db'><div id='statut-text".$page."-1'>".$commentaire."</div><br><script language='javascript' src='vid.js'></script></div><div id='video_displayer1' style='height: 250px; width: 482px;'></div><script language='javascript'>GlueVideoOn('video_displayer1','vid/".$ref."1.mp4', false);</script><br>";
}else{
					$text = "<img style='float:left;margin-right:6px' src='./img/".$login.".jpg' width='40px' height='40px'/> ".$nom."</strong></h2></div><div class='dc'><abbr>".$date."</div><br><div class='db'><div id='statut-text".$page."-1'>".$commentaire."</div></div><br>";
}
			
					fputs ($f1, $text);
							fclose ($f1);
	
						//------------------------------------ajouter nombre des statut
								$fss = fopen ("./".$ref."/ss.txt", "a+");
								$nbr=fgets($fss);
							if($nbr < 30){
								$nbr=$nbr + 1;
								ftruncate($fss,0);
								fputs ($fss, $nbr);
							}
								fclose ($fss);							
						//---------------------------------------upload
	if($data == "img"){
	move_uploaded_file($_FILES['img']['tmp_name'],"./img/".$ref."1.jpg");
		}elseif($data == "vid"){
	move_uploaded_file($_FILES['vid']['tmp_name'],"./vid/".$ref."1.mp4");
		}elseif($data == "pdf"){
	move_uploaded_file($_FILES['pdf']['tmp_name'],"./pdf/".$ref."1.".$ex);
		}
?>