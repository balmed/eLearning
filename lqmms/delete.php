<?php
$ref = isset($_POST['ref']) ? $_POST['ref'] : '' ;
$stat = isset($_POST['stat']) ? $_POST['stat'] : '' ;

$nbr = fopen ("./".$ref."/ss.txt", "a+");
$n=fgets($nbr);
fclose($nbr);
if(file_exists("./".$ref."/s".$stat.".txt")){
				unlink("./".$ref."/s".$stat.".txt");
				unlink("./".$ref."/cm".$stat.".txt");
				unlink("./".$ref."/a".$stat.".txt");
				unlink("./".$ref."/c".$stat.".txt");
			if(file_exists("./img/".$ref.$stat.".jpg")){
				unlink("./img/".$ref.$stat.".jpg");
				sleep(1);}
			if(file_exists("./pdf/".$ref.$stat.".pdf")){
				unlink("./pdf/".$ref.$stat.".pdf");sleep(1);}
for($i=$stat;$i<=$n;$i++){//----------------------sujet
			$ip=$i + 1;
	if(file_exists("./".$ref."/s".$ip.".txt")){
				
							$fS = fopen ("./".$ref."/s".$ip.".txt", "a+");
							$donnees=fgets ($fS);
							$donnees = mb_eregi_replace($ref.",".$ip,$ref.",".$i,$donnees);
							$donnees = mb_eregi_replace($ref.$ip.".jpg",$ref.$i.".jpg",$donnees);
							$donnees = mb_eregi_replace("statut-text".$ref."-".$ip,"statut-text".$ref."-".$i,$donnees);
							ftruncate($fS,0);
							fputs ($fS, $donnees);
							fclose ($fS);	
					rename("./".$ref."/s".$ip.".txt","./".$ref."/s".$i.".txt");
	}
	}
for($i=$stat;$i<=$n;$i++){//----------------------sujet
			$ip=$i + 1;
				if(file_exists("./".$ref."/cm".$ip.".txt")){		
					rename("./".$ref."/cm".$ip.".txt","./".$ref."/cm".$i.".txt");
				}usleep(500);
}
for($i=$stat;$i<=$n;$i++){//----------------------sujet
			$ip=$i + 1;
				if(file_exists("./".$ref."/a".$ip.".txt")){
					rename("./".$ref."/a".$ip.".txt","./".$ref."/a".$i.".txt");
				}usleep(500);
}
for($i=$stat;$i<=$n;$i++){//----------------------sujet
			$ip=$i + 1;
				if(file_exists("./".$ref."/c".$ip.".txt")){
					rename("./".$ref."/c".$ip.".txt","./".$ref."/c".$i.".txt");
				}usleep(500);
	}
for($i=$stat;$i<=$n;$i++){//-----------------------les images
	$ip=$i + 1;
		if(file_exists("./img/".$ref.$ip.".jpg")){
			rename("./img/".$ref.$ip.".jpg","./img/".$ref.$i.".jpg");
		}
		if(file_exists("./pdf/".$ref.$ip.".pdf")){
			rename("./pdf/".$ref.$ip.".pdf","./pdf/".$ref.$i.".pdf");
		}usleep(500);
}
								$fss = fopen ("./".$ref."/ss.txt", "a+");
								$nbr=fgets($fss);
								$nbr=$nbr - 1;
								ftruncate($fss,0);
								fputs ($fss, $nbr);
								fclose ($fss);
}	
?>