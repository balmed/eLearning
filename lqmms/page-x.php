<script  type="text/javascript" src="./script/ayour.js"></script>
<?php
$nom = isset($_SESSION['login']) ? $_SESSION['login'] : '';
$login = isset($_SESSION['nom']) ? $_SESSION['nom'] : '';
$page = isset($_GET['page']) ? $_GET['page'] : '';
$ref = isset($_SESSION['ref']) ? $_SESSION['ref'] : '';

echo '<div class="bf">';
echo '<div style="margin-top:6px;margin-bottom:8px;margin-left:6px;width:497px;background:#FFF ">';


?>

<div style="width:300px;height:20px;background:#FFF"><img style="margin-left:30px;height:19px" src="icon/add.png"  />
<?php
if($ref == "Professeur"){
	echo'<span  style="font-size:14px;color:#00F;font-family:Comic Sans MS"> Statut | Photo | Document | Vidéo </span>';
	}
	else
	{echo'<span  style="font-size:14px;color:#00F;font-family:Comic Sans MS"> Statut </span>';}
?>
</div><div>
<textarea id="textarea" style="min-width:497px;min-height:50px;max-width:497px;max-height:50px;border-color:#FFF;border:0px;"  id="textarea" name="sujet" rows="2"></textarea>
</div><div id="none" class="ck" style="border-color:#000;width:497px;height:30px;background:#FFF;display:none ">

<input id="file1" onchange="fselect(1)" accept="image/*" type="file" style="display:none"/>
<input id="file2" onchange="fselect(2)" accept="application/pdf" style="display:none"  type="file" />
<input id="file3" onchange="fselect(3)" accept="video/*" style="display:none"  type="file" />
<?php
if($ref == "Professeur"){
echo'<div onclick="openfile(1)" style="cursor:pointer;float:left;margin-left:28px;margin-right:8px; height:30px;width:45px ;margin-bottom:5px; background-image:url(icon/img.png)" ></div>';
echo'<div onclick="openfile(2)" style="cursor:pointer;float:left;margin-right:8px; height:30px;width:45px ;margin-bottom:5px; background-image:url(icon/objet.png)" ></div>';
echo'<div onclick="openfile(3)" style="cursor:pointer;float:left;margin-right:2px; height:30px;width:45px ;margin-bottom:5px; background-image:url(icon/vid.png)" ></div>';
}
?>

<input type="hidden" value="" id="statutnow">

<?php
echo '<button onclick="uploded('.$page.')" style="float:right;height:30px;width:60px ;background:#FFF" >Partager</button></div></div>';






echo '<div id="statuenew" style="display:none" class="cr"><div class="cs"><div class="ct"><div class="cu cv cw"><div class="bt cx cy"><img style="float:left;margin-right:6px" src="./img/'.$nom.'.jpg" width="30px" height="30px"/><strong>'.$login.'</strong></h2><div class="dc"></div><br><div class="db"><br/><div id="stitsaid" ></div><br/><br/><img style="margin-left:240px;height:20px" src="./icon/loading.gif"></div><br></div></div></div></div></div>';









$nbr = fopen ("./".$page."/ss.txt", "a+");$n=fgets($nbr);fclose ($nbr);
for($s=1;$s<=$n;$s++){
echo '<div id="hhh" class="cr"><div value="'.$s.'" id="'.$s.'"><div class="cs"><div class="ct"><div class="cu cv cw"><div class="bt cx cy"><div><h2 class="cz da"><strong>';


	$fp = fopen ("./".$page."/s".$s.".txt", "a+");
	$donnees=fgets ($fp);
	$donnees=stripslashes($donnees);
	echo $donnees; 
	fclose ($fp);
/*
echo '<span id="statut'.$page.$s.'"><script type="text/JavaScript">';
echo "var refresh = setInterval(function (){";
echo "$('#statut".$page.$s."').";
echo "load('statut-s.php?type=false&page=".$page."&ref=".$s."')";
echo '}, 4000);';
echo '</script></span>';
*/

echo '<span aria-hidden="true"><div class="n fcg"><span id="like'.$page.$s.'" class="n fcg">';
echo '<script type="text/JavaScript">';
echo "var refresh = setInterval(function (){";
echo "$('#like".$page.$s."').";
echo "load('avec-s.php?page=".$page."&ref=".$s."')";
echo '}, 6000);';
echo '</script>';
echo '</span><span aria-hidden="true"> · </span><span id="dislike'.$page.$s.'"></span>';
echo '<script type="text/JavaScript">';
echo "var refresh = setInterval(function (){";
echo "$('#dislike".$page.$s."').";
echo "load('centre-s.php?page=".$page."&ref=".$s."')";
echo '}, 6000);';
echo '</script>';
echo '</span><span id="option'.$s.'"> · ';
echo '<input type="button" value="Avec" class="like" onclick="like('.$s.','.$page.')" /> · ';
echo '<input type="button" value="Contre" class="like" onclick="dislike('.$s.','.$page.')" /></span>';
echo '<div id="cm'.$page.$s.'" class="ayour">';
echo '<script type="text/JavaScript">';
echo "var refresh = setInterval(function (){";
echo "$('#cm".$page.$s."').";
echo "load('comment-s.php?page=".$page."&ref=".$s."')";
echo '}, 1000);';
echo '</script></div>';
echo '<div class="bp"></div></label><table  style="border:0px;margin-top:9px;border-radius:10px;" class="ba bq"><tr><td class="bm"><div class="br bs"><table class="ba bt bu bv"><tr><td class="bm bw">';
echo '<img style="float:left" src="./img/'.$nom.'.jpg" width="30px" height="20px" />';
echo '<input class="ccom"  onKeyPress="if(event.keyCode == 13) comment('.$page.','.$s.')"  id="comment'.$page.$s.'" />';
echo '</td></tr></tbody></table></div></td></tr></table></div></form>';
echo '</span></div></div></div></div></div>';
}echo '<br>';
?>


 
