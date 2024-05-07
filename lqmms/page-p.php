<script  type="text/javascript" src="chat.js"></script>
<style  type="text/css" src="my.css"></style>
<div style="margin-left:3px;background:#fff;margin-right:5px">
<?php
$fp = fopen ("./compts/".$nom.".txt", "a+");
$donnees=fgets ($fp);
$don = explode("|",$donnees);
if($don[2] == "1"){$sex="Female";}else{$sex="Male";}
if(file_exists("./img/".$nom.".jpg")){
	echo '<img onclick="pectur(1)" style="cursor:pointer;margin-left:6px;margin-top:4px;height:30px;width:30px;float:left;position : absolute; z-index: 2" src="./icon/edi.png" /><img src="./img/'.$nom.'.jpg" style="float:left;min-height:166px; max-height:166px;min-width:200px;max-width:200px;border-radius:15px;*moz-border-radius:15px;border:3px solid #FFF;position : absolute ; z-index: 1" />';                                                                       
}else{
	echo '<img onclick="pectur(1)" style="cursor:pointer;margin-left:6px;margin-top:4px;height:30px;width:30px;float:left;position : absolute; z-index: 2" src="./icon/edi.png" /><img src="./img/default.jpg" style="float:left;min-height:166px; max-height:166px;min-width:200px;max-width:200px;border-radius:15px;*moz-border-radius:15px;border:3px solid #FFF;position : absolute; z-index: 1" />';
}
$fss = fopen ("./compts/".$nom."-s.txt", "a+");
$nbr=fgets($fss);
fclose ($fss);
if($nbr <= 20){$active="1";}
elseif($nbr > 20 && $nbr <= 40){$active="2";}
elseif($nbr > 40 && $nbr <= 60){$active="3";}
elseif($nbr > 60 && $nbr <= 80){$active="4";}
elseif($nbr > 80 && $nbr <= 100){$active="5";}
elseif($nbr > 100 && $nbr <= 120){$active="6";}
elseif($nbr > 120 && $nbr <= 140){$active="7";}
elseif($nbr > 140 && $nbr <= 160){$active="8";}
elseif($nbr > 160 && $nbr <= 180){$active="9";}
elseif($nbr > 180 && $nbr <= 200){$active="10";}
echo '<div style="margin-left:205px"><span style="margin-top:30px;color:#000; float:top; margin-left:2px; font-family:Comic Sans MS;font-size:20px">Espace '.$don[6].' :</span><br>';
echo '<span style="margin-top:0px;color:#000; float:top; margin-left:2px; font-family:Comic Sans MS;font-size:20px">Nom: '.$login.'</span><br>';
echo '<span style="margin-top:30px;color:#000; float:top; margin-left:2px; font-family:Comic Sans MS;font-size:20px">CIN: '.$don[3].'</span><br>';
echo '<span style="margin-top:30px;color:#000; float:top; margin-left:2px; font-family:Comic Sans MS;font-size:20px">Email: '.$don[4].'</span><br>';
echo '<span style="margin-top:30px;color:#000; float:top; margin-left:2px; font-family:Comic Sans MS;font-size:20px">Sex: '.$sex.'</span><br>';
echo '<span style="margin-top:30px;color:#000; float:top; margin-left:2px; font-family:Comic Sans MS;font-size:20px">Active: '.$active.'/10 <img src="./icon/1'.$active.'.png" width="30px" height="20px"></span><br>';
echo '<form id="pectur" method="post" enctype="multipart/form-data" action="photo.php" target="Ifr"><br>
<input type="file"  onchange="pectur(2)" id="pecture1" style="display:none;"/>';
echo '</form></div></div>';
//------------------------------------------------------------------------------------------------entete

for($i=1;$i<=65;$i++){
$nbr = fopen ("./".$i."/ss.txt", "a+");
$n=fgets($nbr);
fclose($nbr);
for($s=1;$s<=$n;$s++){
$fp = fopen ("./$i/s".$s.".txt", "a+");
$donnees=fgets ($fp);
if(mb_ereg($nom,substr($donnees,0,110))){$k=true;
echo '<div id="statut-tout'.$i.'ass'.$s.'" class="bf bg bh"><div class="cr"><div class="cs"><div class="ct"><div class="cu cv cw"><div class="bt cx cy"><div id="statut-tout'.$i.'-'.$s.'"><div><h3 class="cz da"><strong>';




	if(!file_exists('./img/'.$i.$s.'.jpg')){
	$donnees = mb_eregi_replace("<img style='border-radius:15px;border: 8px solid #000; width:460px;height:280px' src='./img/".$i.$s.".jpg'>","",$donnees);
	}
$donnees=stripslashes($donnees);
echo $donnees; 
}else{$k=false;}
fclose ($fp);

if($k == true){
echo '<span aria-hidden="true"><div class="n fcg"><span id="like'.$i.$s.'" class="n fcg">';
	    //-------------- 6 avec -------------------------------------
echo '<script type="text/JavaScript">';
echo "var refresh = setInterval(function (){";
echo "$('#like".$i.$s."').";
echo "load('avec-s.php?page=".$i."&ref=".$s."')";
echo '}, 5000);';
echo '</script>';
		//----------------------------------------------------
echo '</span><span aria-hidden="true"> · </span><span id="dislike'.$i.$s.'"></span>';

echo '<script type="text/JavaScript">';
echo "var refresh = setInterval(function (){";
echo "$('#dislike".$i.$s."').";
echo "load('centre-s.php?page=".$i."&ref=".$s."')";
echo '}, 5000);';
echo '</script>';

echo '</span><span aria-hidden="true"> · ';
	
echo '<input type="button" value="Modifier" class="like" onclick="edite('.$i.','.$s.')" /> · ';
echo '<input type="button" value="Supprimer" class="like" onclick="delet('.$i.','.$s.')" /></span></div>';
echo '<div id="cm'.$i.$s.'" class="ayour">';

echo '<script type="text/JavaScript">';
echo "var refresh = setInterval(function (){";
echo "$('#cm".$i.$s."').";
echo "load('comment-s.php?page=".$i."&ref=".$s."')}, 1000);";
echo '';
echo '</script></div>';

echo '<div class="bp"></div></label><table style="border:0px;margin-top:9px;border-radius:10px;" class="ba bq"><tr><td class="bm"><div class="br bs"><table style="border:0px;" class="ba bt bu bv"><tr><td class="bm bw">';
echo '<img style="float:left" src="./img/'.$nom.'.jpg" width="30px" height="20px" />';
echo '<input class="ccom" onKeyPress="if(event.keyCode == 13) comment('.$i.','.$s.')" id="comment'.$i.$s.'" />';
echo '</td></tr></tbody></table></div></td></tr></table></div>';
echo '</span></div></div></div></div></div></div>';
}}}
echo "<br><span style='margin-left:180px;border-color:#FFF;border:0px;'>FIN D'ACTUALITE</span>";
echo "<textarea style='display:none' id='rechange'></textarea> ";
?>

