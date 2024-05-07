<?php
include("ver.php");
$nom = isset($_SESSION['login']) ? $_SESSION['login'] : '';
$rel = isset($_SESSION['rel']) ? $_SESSION['rel'] : '';
$login = isset($_SESSION['nom']) ? $_SESSION['nom'] : '';
$ref = isset($_SESSION['ref']) ? $_SESSION['ref'] : '';
$page = isset($_GET['page']) ? $_GET['page'] : '';
echo '<input id="nom-l" type="hidden" value="'.$nom.'" />';
?> 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<script language="javascript" src="./script/vid.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>LQMES</title><link href="./script/my.css" rel="stylesheet" type="text/css" />
<link href="./script/chat.css" rel="stylesheet" type="text/css" />
<script  type="text/javascript" src="./script/ayour.js"></script>
<script  type="text/javascript" src="./script/chat.js"></script>
</head>
<body>
<div id="divMrapper"><div id="center">
<?php
	echo '<div class="lf">';
	
	echo '<img style="margin-left:10px;width:29px;height:24px;margin-top:2px;cursor:pointer" src="./icon/ic.png" /> ';
	echo '<img id="not1" class="eee3" onclick="not()" style="width:30px;height:22px;margin-top:0px;cursor:pointer" src="./icon/comment.png" /> ';
	echo '<img id="ed1" class="eee3" onclick="ed()" style="width:32px;height:26px;margin-top:2px;cursor:pointer" src="./icon/edi.png" /> ';
	echo '<img id="messages1" class="eee3" onclick="messages()" style="width:32px;height:26px;margin-top:2px;cursor:pointer" src="./icon/ms.png" /> '; 
	echo '<span style="margin-left:10px;font-size:20px;float:left;color:#00F; font-family:Comic Sans MS">plate-forme d&#233nseignement a distance</span>';
	echo '<div id="not" style="width:325px" class="not"><div class="mes3" id="not2"> Bienvenue sur la Plate-forme d&#233nseignement  a distance (EAD) de la Facult&#233 des Sciences et Technique Errachidia. Sur ce site vous trouverez des informations sur les fili&#233res,</div></div>';
	echo '<div id="messages" style="display:none;width:220px" class="not"><div class="mes3" id="messages2"></div></div>';
	echo '<div id="ed" style="width:295px" class="not"><div class="mes3" id="ed2">';if($ref == "root"){echo "<a href='admin.php'>Administration</a>";}else{echo "L'administrateur du systeme<br>est Mohamed Balouk"; }
	echo '</div></div>';echo '<a href="./out.php" style="float:right;color:#C66; font-family:Comic Sans MS">Deconnexion('.$login.')</a>';
	echo '</div>';
?>
<div  id="ecranaction1" style="display:none;border-radius:15px;margin-left:194px;background-color :#F00;width:20px;height:20px;position:fixed;top:0px;color:#FF0"><span id="numaction" style="margin-left:5px;font-size:15;font-size:16px;font-family:arial"></span></div>

<table border="0">
<tr><td style="max-width:210px">	
  
  
  
  
  
  
<div class="amis">
<?php  if(file_exists("./img/".$nom.".jpg")){
	echo '<img src="./img/'.$nom.'.jpg" class="image" />';
}else{
	echo '<img src="./img/default.jpg" class="image" />';
	}
echo '<div style="color:#FFF;margin-top:4px; margin-left:34px;font-family:Comic Sans MS"><a style="color:#FFF;margin-top:8px;" href="./page.php?page=p">'.$login.'</a><br></div> (^_^)<br>';
echo '<br><div style="background:#FFF;display:block;max-height:520px;overflow-x:hidden;width:260px">';
echo '<div class="grp">Math&#233matique</a></div>';
echo '<div id="menu"><a class="menua" href="page.php?page=1">Analyse</a></div>';
echo '<div id="menu"><a class="menua" href="page.php?page=2">Alg&#233bre</a></div>';
echo '<div id="menu"><a class="menua" href="page.php?page=3">Statistiques</a></div>';
echo '<div class="grp">Informatique</div>';
echo '<div id="menu"><a class="menua" href="page.php?page=4">Systeme d&#233xplotation</a></div>';
echo '<div id="menu"><a class="menua" href="page.php?page=5">Programmation C</a></div>';
echo '<div id="menu"><a class="menua" href="page.php?page=6">POO C++</a></div>';
echo '<div id="menu"><a class="menua" href="page.php?page=7">J2EE</a></div>';
echo '<div id="menu"><a class="menua" href="page.php?page=8">VBasic</a></div>';
echo '<div id="menu"><a class="menua" href="page.php?page=9">C#</a></div>';
echo '<div class="grp">Physique</div>';
echo '<div id="menu"><a class="menua" href="page.php?page=10">M&#233canique</a></div>';
echo '<div id="menu"><a class="menua" href="page.php?page=11">Electricite</a></div>';
echo '<div id="menu"><a class="menua" href="page.php?page=12">Electronique</a></div>';
echo '<div class="grp">Sciences de vie et de la terre</div>';
echo '<div id="menu"><a class="menua" href="page.php?page=13">Microbiologie des sols</a></div>';
echo '<div id="menu"><a class="menua" href="page.php?page=14">protection des v&#233getaux</a></div>';
echo '<div id="menu"><a class="menua" href="page.php?page=15">Chimie des substances naturelles</a></div>';
echo '<div id="menu"><a class="menua" href="page.php?page=16">Nutrition</a></div>';
echo '<div id="menu"><a class="menua" href="page.php?page=17">alimentation</a></div>';
echo '<div id="menu"><a class="menua" href="page.php?page=18">French Ligue</a></div>';
echo '<div class="grp">Education physique</div>';
echo '<div id="menu"><a class="menua" href="page.php?page=19">Cosmetology</a></div>';
echo '<div id="menu"><a class="menua" href="page.php?page=20">Clothes</a></div>';
echo '<div id="menu"><a class="menua" href="page.php?page=21">Cooking</a></div>';
echo '<div class="grp"> Langue francais</div>';
echo '<div id="menu"><a class="menua" href="page.php?page=22">Hydrogeologie</a></div>';
echo '<div id="menu"><a class="menua" href="page.php?page=23">Sismologie</a></div>';
echo '<div id="menu"><a class="menua" href="page.php?page=24">Geodesie</a></div>';
echo '<div id="menu"><a class="menua" href="page.php?page=25">Teledetection</a></div>';
echo '<div class="grp"> Langue anglais</div>';
echo '<div id="menu"><a class="menua" href="page.php?page=26">Hydrogeologie</a></div>';
echo '<div id="menu"><a class="menua" href="page.php?page=27">Sismologie</a></div>';
echo '<div id="menu"><a class="menua" href="page.php?page=28">Geodesie</a></div>';
echo '<div id="menu"><a class="menua" href="page.php?page=29">Teledetection</a></div>';
echo '<div class="grp">Langue arabe </div>';
echo '<div id="menu"><a class="menua" href="page.php?page=30">Hydrogeologie</a></div>';
echo '<div id="menu"><a class="menua" href="page.php?page=31">Sismologie</a></div>';
echo '<div id="menu"><a class="menua" href="page.php?page=32">Geodesie</a></div>';
echo '<div id="menu"><a class="menua" href="page.php?page=33">Teledetection</a></div>';
echo '<div class="grp"> Tafsir wa hadith</div>';
echo '<div id="menu"><a class="menua" href="page.php?page=34">Hydrogeologie</a></div>';
echo '<div id="menu"><a class="menua" href="page.php?page=35">Sismologie</a></div>';
echo '<div id="menu"><a class="menua" href="page.php?page=36">Geodesie</a></div>';
echo '<div id="menu"><a class="menua" href="page.php?page=37">Teledetection</a></div>';
echo '<div class="grp"> Fiqh wa ossoul</div>';
echo '<div id="menu"><a class="menua" href="page.php?page=38">Hydrogeologie</a></div>';
echo '<div id="menu"><a class="menua" href="page.php?page=39">Sismologie</a></div>';
echo '<div id="menu"><a class="menua" href="page.php?page=40">Geodesie</a></div>';
echo '<div id="menu"><a class="menua" href="page.php?page=41">Teledetection</a></div>';
echo '<div class="grp"> Tawtik</div>';
echo '<div id="menu"><a class="menua" href="page.php?page=42">Hydrogeologie</a></div>';
echo '<div id="menu"><a class="menua" href="page.php?page=43">Sismologie</a></div>';
echo '<div id="menu"><a class="menua" href="page.php?page=44">Geodesie</a></div>';
echo '<div id="menu"><a class="menua" href="page.php?page=45">Teledetection</a></div>';
echo '<div class="grp"> Philosophie</div>';
echo '<div id="menu"><a class="menua" href="page.php?page=46">Hydrogeologie</a></div>';
echo '<div id="menu"><a class="menua" href="page.php?page=47">Sismologie</a></div>';
echo '<div id="menu"><a class="menua" href="page.php?page=48">Geodesie</a></div>';
echo '<div id="menu"><a class="menua" href="page.php?page=49">Teledetection</a></div>';
echo '<div class="grp"> Histoire et géographie</div>';
echo '<div id="menu"><a class="menua" href="page.php?page=50">Hydrogeologie</a></div>';
echo '<div id="menu"><a class="menua" href="page.php?page=51">Sismologie</a></div>';
echo '<div id="menu"><a class="menua" href="page.php?page=52">Geodesie</a></div>';
echo '<div id="menu"><a class="menua" href="page.php?page=53">Teledetection</a></div>';
echo '</div></div>';
		?>
</div></td><td style="max-width:510px">

<div class="stat">
<?php 
if($page == "p"){
include('page-p.php');
}elseif($page == "m"){
$page = isset($_GET['ref']) ? $_GET['ref'] : '';
$s = isset($_GET['s']) ? $_GET['s'] : '';	
//--------------------------------------------------------------------read more---------------------------------------------------------------------			

echo '<div class="cr"><div><div class="cs"><div class="ct"><div class="cu cv cw"><div class="bt cx cy"><div><h2 class="cz da"><strong>';
	$fp = fopen ("./".$page."/s".$s.".txt", "a+");
	$donnees=fgets ($fp);
	if(!file_exists('./img/'.$page.$s.'.jpg')){
			$donnees = mb_eregi_replace("<img style='border-radius:15px;border: 8px solid #000; width:460px;height:280px' src='./img/".$page.$s.".jpg'>","",$donnees);
	}
	$donnees=stripslashes($donnees);
	echo $donnees; 
	fclose ($fp);
echo '<span aria-hidden="true"><div class="n fcg"><span id="like'.$page.$s.'" class="n fcg">';
				echo '<script type="text/JavaScript">';
				echo "var refresh = setInterval(function (){";
				echo "$('#like".$page.$s."').";
				echo "load('avec-s.php?page=".$page."&ref=".$s."').";
				echo 'fadeIn("slow");}, 500);';
				echo '</script>';
echo '</span><span aria-hidden="true">  </span><span id="dislike'.$page.$s.'"></span>';
				echo '<script type="text/JavaScript">';
				echo "var refresh = setInterval(function (){";
				echo "$('#dislike".$page.$s."').";
				echo "load('centre-s.php?page=".$page."&ref=".$s."').";
				echo 'fadeIn("slow");}, 500);';
				echo '</script>';
echo '</span><span id="option'.$s.'">  ';
echo '<input type="button" value="like" class="like" onclick="like('.$s.','.$page.')" />  ';
echo '<input type="button" value="Dislike" class="like" onclick="dislike('.$s.','.$page.')" /></span>';
echo '<div id="cm'.$page.$s.'" class="ayour">';
				echo '<script type="text/JavaScript">';
				echo "var refresh = setInterval(function (){";
				echo "$('#cm".$page.$s."').";
				echo "load('comment-more.php?page=".$page."&ref=".$s."').";
				echo 'fadeIn("slow");}, 500);';
				echo '</script></div>';
echo '</div><div class="bp"></div></label><table class="ba bq"><tr><td class="bm"><div class="br bs"><table class="ba bt bu bv"><tr><td class="bm bw">';
echo '<img style="float:left" src="./img/'.$nom.'.jpg" width="30px" height="20px" />';
echo '<input class="ccom" onKeyPress="if(event.keyCode == 13) comment('.$page.','.$s.')" id="comment'.$s.'" />';
echo '</td></tr></tbody></table></div></td></tr></table></div>';
echo '</span></div></div></div></div></div><br>';	
//-----------------------------------------------------------------------------------------------------------------------------------------------------
			
}else{
include('page-x.php');
}
?></div>
</td><td>

<div class="islam">




<script src="./script/ayour1.js" type="text/javascript"></script>
<link href="./script/ayour1.css" rel="stylesheet" type="text/css" />
<div id="CollapsiblePanel1" class="CollapsiblePanel">
<div class="CollapsiblePanelTab" tabindex="1"><span class="menua1"> Questionnaire QCM</span></div>
<div class="CollapsiblePanelContent">
<div class="qcm"><div id="toutqcmvote"><div style="margin-top:2px;min-height:180px;max-height:270px;hmargin-left:10px;margin-bottom:10px">
<?php
//---------------------------------------------------------------------qcm
$fp = fopen ("./diver/qcm.txt", "a+");
$donnees=fgets ($fp);
if(mb_ereg($nom,$donnees)){$k=true;}else{$k=false;}
fclose ($fp);
$don = explode("|@|",$donnees);

echo '<span style="font-family:Trebuchet MS, Arial;font-size:14px">'.$don[0].'</span><br />';


if($don[1] == "2"){	
$s=$don[7]+$don[8];if($s == 0){$s=1;}
			echo '<div style="border:double;width:190px;height:18px;margin-top:5px">';

if(!$k){echo '<input type="checkbox" onChange="selection(1)" id="qcmcase1" />';}

			echo '<span id="qcmrep1" class="case">1) '.$don[2].'</span></div>';
			echo '<div style="border:double;width:190px;height:18px;margin-top:5px">';
if(!$k){echo '<input type="checkbox" onChange="selection(2)" id="qcmcase2" />';}
			echo '<span id="qcmrep2"  class="case">2)'.$don[3].'</span></div>';
			echo '</div><table width="212" border="0"><tr><td width="8">1</td><td width="200">';
			echo '<div style="width:'.(($don[7]*190)+4)/$s.'px;height:20px;background-color:#D0D"></div></td></tr><tr><td>2</td><td>';
			echo '<div style="width:'.(($don[8]*190)+4)/$s.'px;height:20px;background-color:#AFA"></div></td></tr><tr>';


}elseif($don[1] == "3"){
$s=$don[7]+$don[8]+$don[9];if($s == 0){$s=1;}
			echo '<div style="border:double;width:190px;height:18px;margin-top:5px">';
if(!$k){echo '<input type="checkbox" onChange="selection(1)" id="qcmcase1" />';}
			echo '<span id="qcmrep1" class="case">1) '.$don[2].'</span></div>';
			echo '<div style="border:double;width:190px;height:18px;margin-top:5px">';
if(!$k){echo '<input type="checkbox" onChange="selection(2)" id="qcmcase2" />';}
			echo '<span id="qcmrep2"  class="case">2) '.$don[3].'</span></div>';
			echo '<div style="border:double;width:190px;height:18px;margin-top:5px">';
if(!$k){echo '<input type="checkbox" onChange="selection(3)" id="qcmcase3" />';}
			echo '<span id="qcmrep3"  class="case">3) '.$don[4].'</span></div>';
			echo '</div><table width="212" border="0"><tr><td width="8">1</td><td width="200">';
echo '<div style="width:'.(($don[7]*194)+4)/$s.'px;height:20px;background-color:#D0D"></div></td></tr><tr><td>2</td><td>';
echo '<div style="width:'.(($don[8]*194)+4)/$s.'px;height:20px;background-color:#AFA"></div></td></tr><tr>';
echo '<td>3</td><td id="qcm3"><div style="width:'.(($don[9]*194)+4)/$s.'px;height:20px;background-color:#F00"></div></td></tr><tr>';


}elseif($don[1] == "4"){
$s=$don[7]+$don[8]+$don[9]+$don[10];if($s == 0){$s=1;}
			echo '<div style="border:double;width:190px;height:18px;margin-top:5px">';
if(!$k){echo '<input type="checkbox" onChange="selection(1)" id="qcmcase1" />';}
			echo '<span id="qcmrep1" class="case">1) '.$don[2].'</span></div>';
			echo '<div style="border:double;width:190px;height:18px;margin-top:5px">';
if(!$k){echo '<input type="checkbox" onChange="selection(2)" id="qcmcase2" />';}
			echo '<span id="qcmrep2"  class="case">2) '.$don[3].'</span></div>';
			echo '<div style="border:double;width:190px;height:18px;margin-top:5px">';
if(!$k){echo '<input type="checkbox" onChange="selection(3)" id="qcmcase3" />';}
			echo '<span id="qcmrep3"  class="case">3) '.$don[4].'</span></div>';
			echo '<div style="border:double;width:190px;height:18px;margin-top:5px">';
if(!$k){echo '<input type="checkbox" onChange="selection(4)" id="qcmcase4" />';}
			echo '<span id="qcmrep4"  class="case">4) '.$don[5].'</span></div>';
			echo '</div><table width="212" border="0"><tr><td width="8">1</td><td width="200">';
echo '<div style="width:'.(($don[7]*190)+4)/$s.'px;height:20px;background-color:#D0D"></div></td></tr><tr><td>2</td><td>';
echo '<div style="width:'.(($don[8]*190)+4)/$s.'px;height:20px;background-color:#AFA"></div></td></tr><tr>';
echo '<td>3</td><td id="qcm3"><div style="width:'.(($don[9]*190)+4)/$s.'px;height:20px;background-color:#F00"></div></td></tr><tr>';
echo '<td>4</td><td id="qcm4"><div style="width:'.(($don[10]*190)+4)/$s.'px;height:20px;background-color:#88F"></div></td></tr><tr>';


}elseif($don[1] == "5"){
$s=$don[7]+$don[8]+$don[9]+$don[10]+$don[11];if($s == 0){$s=1;}
			echo '<div style="border:double;width:190px;height:18px;margin-top:5px">';
if(!$k){echo '<input type="checkbox" onChange="selection(1)" id="qcmcase1" />';}
			echo '<span id="qcmrep1" class="case">1) '.$don[2].'</span></div>';
			echo '<div style="border:double;width:190px;height:18px;margin-top:5px">';
if(!$k){echo '<input type="checkbox" onChange="selection(2)" id="qcmcase2" />';}
			echo '<span id="qcmrep2"  class="case">2) '.$don[3].'</span></div>';
			echo '<div style="border:double;width:190px;height:18px;margin-top:5px">';
if(!$k){echo '<input type="checkbox" onChange="selection(3)" id="qcmcase3" />';}
			echo '<span id="qcmrep3"  class="case">3) '.$don[4].'</span></div>';
			echo '<div style="border:double;width:190px;height:18px;margin-top:5px">';
if(!$k){echo '<input type="checkbox" onChange="selection(4)" id="qcmcase4" />';}
			echo '<span id="qcmrep4"  class="case">4) '.$don[5].'</span></div>';
			echo '<div style="border:double;width:190px;height:18px;margin-top:5px">';
if(!$k){echo '<input type="checkbox" onChange="selection(5)" id="qcmcase5" />';}
			echo '<span id="qcmrep5" class="case">5) '.$don[6].'</span></div>';
			echo '</div><table width="212" border="0"><tr><td width="8">1</td><td width="200">';
echo '<div style="width:'.(($don[7]*190)+4)/$s.'px;height:20px;background-color:#D0D"></div></td></tr><tr><td>2</td><td>';
echo '<div style="width:'.(($don[8]*190)+4)/$s.'px;height:20px;background-color:#AFA"></div></td></tr><tr>';
echo '<td>3</td><td id="qcm3"><div style="width:'.(($don[9]*190)+4)/$s.'px;height:20px;background-color:#F00"></div></td></tr><tr>';
echo '<td>4</td><td id="qcm4"><div style="width:'.(($don[10]*190)+4)/$s.'px;height:20px;background-color:#88F"></div></td></tr><tr>';
echo '<td>5</td><td id="qcm5"><div style="width:'.(($don[11]*190)+4)/$s.'px;height:20px;background-color:#BBB"></div></td>';
}

echo '</tr></table>';
if($ref == "Professeur" OR $ref == "root"){echo '<button style="border:0px;border-color:#FFF;color:#000;margin-left:30px;margin-top:15px; background-color:#dcdee3;font-size:12px;" onclick="nqcm()" >Nouveau Questionnaire </button>';}

?>
</div></div></div></div>
<div id="CollapsiblePanel2" class="CollapsiblePanel">
<div class="CollapsiblePanelTab" tabindex="0"><span class="menua1"> biblioteque </span></div><div class="CollapsiblePanelContent">
<div class="qcm">
<img style="width:20px;height:18px;position:absolute;z-index:1;" src="./icon/111.png"/>
<?php if($ref == "Professeur"  OR $ref == "root"){echo '<input onKeyPress="cbeblio()" id="inputbiblio" type="text" style="margin-left:20px;font-size:12px;border:2px;border-color:#99F;width:168px;height:20px;" />';}else{echo '<input onKeyPress="cbeblio()" id="inputbiblio" type="text" style="margin-left:20px;font-size:12px;border:2px;border-color:#99F;width:190px;height:20px;" />';} ?>
<?php if($ref == "Professeur"  OR $ref == "root"){echo '<img onclick="uplbib()" style="cursor:pointer;width:20px;height:18px;position:absolute;z-index:10;" src="./icon/hhhh.png"/>';} ?>
<input type="file" onchange="uploadbiblioteque()" style="display:none" id="bibliofile"/>
<div id="rbeblio"></div>
</div></div></div>

<div id="CollapsiblePanel3" class="CollapsiblePanel">
<div class="CollapsiblePanelTab" tabindex="0"><span class="menua1">personnalite de jours</span></div><div class="CollapsiblePanelContent">
<div class="qcm">


</div></div></div>
<div id="CollapsiblePanel4" class="CollapsiblePanel">
<div class="CollapsiblePanelTab" tabindex="0"><span class="menua1">temps des controles</span></div><div class="CollapsiblePanelContent">
<div class="qcm"></div>
</div></div>






<div id="CollapsiblePanel5" class="CollapsiblePanel">
<div class="CollapsiblePanelTab" tabindex="0"><span class="menua1"><?php  if($ref != "root"){echo "Contacter Administrateur";}else{echo "Statistique";} ?></span></div><div class="CollapsiblePanelContent">
<div class="qcm">

<div style="font-family:Trebuchet MS, Arial;font-size:12px;" id="motepersonne">
	
</div>
<?php if($ref != "root"){echo '<img id="imgpersonne" style="height:160px;width:200px;border-radius:15px;margin-left:5px" src="./diver/mote.jpg" />';} ?>
<div id="commentmote"></div>

<?php
if($ref != "root"){
$fp=fopen("./diver/mote.txt","a+");$data = fgets($fp);fclose($fp);
$mote = explode("|",$data);echo $mote[0];
echo '<textarea id="motetext" style="font-family:Trebuchet MS, Arial;font-size:12px;min-width:200px;min-height:40px;max-width:200px;margin-left:5px;max-height:40px;"></textarea><input type="button" value="Envoye" class="like" onclick="like('.$s.','.$page.')" />';
}else{

}
?>

</div>
</div></div>
<script type="text/javascript">
var CollapsiblePanel1 = new Spry.Widget.CollapsiblePanel("CollapsiblePanel1");
var CollapsiblePanel2 = new Spry.Widget.CollapsiblePanel("CollapsiblePanel2");
var CollapsiblePanel3 = new Spry.Widget.CollapsiblePanel("CollapsiblePanel3");
var CollapsiblePanel4 = new Spry.Widget.CollapsiblePanel("CollapsiblePanel4");
var CollapsiblePanel5 = new Spry.Widget.CollapsiblePanel("CollapsiblePanel5");
</script>


<div id="oubannou1" style="bottom:20px;display:none;background-color:#00F;border-radius:5px;position:fixed;z-index:10;height:200px;width:160px"><div style="margin:5px;background-color:#FFF">
<table width="150" border="0">
  <tr style="width:19px">
    <td style="width:19px"><img onclick="smayli(':)')"  style="width:19px;height:20px" src="./smileys/1.png"/></td>
    <td style="width:19px"><img onclick="smayli(':D')"  style="width:19px;height:20px" src="./smileys/D.png"/></td>
    <td style="width:19px"><img onclick="smayli('')"  style="width:19px;height:20px" src="./smileys/a2.png"/></td>
    <td style="width:19px"><img onclick="smayli('')"  style="width:19px;height:20px" src="./smileys/sm_wink.gif"/></td>
    <td style="width:19px"><img onclick="smayli('')"  style="width:19px;height:20px" src="./smileys/love.gif"/></td>
  </tr>
  <tr style="width:19px">
    <td style="width:19px"><img onclick="smayli('')"  style="width:19px;height:20px" src="./smileys/p.gif"/></td>
    <td style="width:19px"><img onclick="smayli('')"  style="width:19px;height:20px" src="./smileys/sm.gif"/></td>
    <td style="width:19px"><img onclick="smayli('')"  style="width:19px;height:20px" src="./smileys/1.png"/></td>
    <td style="width:19px"><img onclick="smayli('')"  style="width:19px;height:20px" src="./smileys/1.png"/></td>
    <td style="width:19px"><img onclick="smayli('')"  style="width:19px;height:20px" src="./smileys/1.png"/></td>
  </tr>
  <tr style="width:19px">
    <td style="width:19px"><img onclick="smayli('')"  style="width:19px;height:20px" src="./smileys/1.png"/></td>
    <td style="width:19px"><img onclick="smayli('')"  style="width:19px;height:20px" src="./smileys/1.png"/></td>
    <td style="width:19px"><img onclick="smayli('')"  style="width:19px;height:20px" src="./smileys/1.png"/></td>
    <td style="width:19px"><img onclick="smayli('')"  style="width:19px;height:20px" src="./smileys/1.png"/></td>
    <td style="width:19px"><img onclick="smayli('')"  style="width:19px;height:20px" src="./smileys/1.png"/></td>
  </tr>
  <tr style="width:19px">
    <td style="width:19px"><img onclick="smayli('')"  style="width:19px;height:20px" src="./smileys/1.png"/></td>
    <td style="width:19px"><img onclick="smayli('')"  style="width:19px;height:20px" src="./smileys/1.png"/></td>
    <td style="width:19px"><img onclick="smayli('')"  style="width:19px;height:20px" src="./smileys/1.png"/></td>
    <td style="width:19px"><img onclick="smayli(')"  style="width:19px;height:20px" src="./smileys/1.png"/></td>
    <td style="width:19px"><img onclick="smayli('')"  style="width:19px;height:20px" src="./smileys/1.png"/></td>
  </tr>
    <tr style="width:19px">
    <td style="width:19px"><img onclick="smayli()"  style="width:19px;height:20px" src="./smileys/1.png"/></td>
    <td style="width:19px"><img onclick="smayli()"  style="width:19px;height:20px" src="./smileys/1.png"/></td>
    <td style="width:19px"><img onclick="smayli()"  style="width:19px;height:20px" src="./smileys/1.png"/></td>
    <td style="width:19px"><img onclick="smayli()"  style="width:19px;height:20px" src="./smileys/1.png"/></td>
    <td style="width:19px"><img onclick="smayli()"  style="width:19px;height:20px" src="./smileys/1.png"/></td>
  </tr>
  <tr style="width:19px">
    <td style="width:19px"><img onclick="smayli()"  style="width:19px;height:20px" src="./smileys/1.png"/></td>
    <td style="width:19px"><img onclick="smayli()"  style="width:19px;height:20px" src="./smileys/1.png"/></td>
    <td style="width:19px"><img onclick="smayli()"  style="width:19px;height:20px" src="./smileys/1.png"/></td>
    <td style="width:19px"><img onclick="smayli()"  style="width:19px;height:20px" src="./smileys/1.png"/></td>
    <td style="width:19px"><img onclick="smayli()"  style="width:19px;height:20px" src="./smileys/1.png"/></td>
  </tr>
  <tr style="width:19px">
    <td style="width:19px"><img onclick="smayli()"  style="width:19px;height:20px" src="./smileys/1.png"/></td>
    <td style="width:19px"><img onclick="smayli()"  style="width:19px;height:20px" src="./smileys/1.png"/></td>
    <td style="width:19px"><img onclick="smayli()"  style="width:19px;height:20px" src="./smileys/1.png"/></td>
    <td style="width:19px"><img onclick="smayli()"  style="width:19px;height:20px" src="./smileys/1.png"/></td>
    <td style="width:19px"><img onclick="smayli()"  style="width:19px;height:20px" src="./smileys/1.png"/></td>
  </tr>
  <tr style="width:19px">
    <td style="width:19px"><img onclick="smayli()"  style="width:19px;height:20px" src="./smileys/1.png"/></td>
    <td style="width:19px"><img onclick="smayli()"  style="width:19px;height:20px" src="./smileys/1.png"/></td>
    <td style="width:19px"><img onclick="smayli()"  style="width:19px;height:20px" src="./smileys/1.png"/></td>
    <td style="width:19px"><img onclick="smayli()"  style="width:19px;height:20px" src="./smileys/1.png"/></td>
    <td style="width:19px"><img onclick="smayli()"  style="width:19px;height:20px" src="./smileys/1.png"/></td>
  </tr>
</table>



</div></div>






<div class="chat-a"><input type="checkbox" /><label id="discutionstantane"><img style="margin-top:2px;width:20px;height:20px;" src="./icon/chat.png" /><img id="editechat" style="display:none;margin-top:2px;width:20px;height:20px;right:2px;position:absolute;z-index:8;" src="./icon/111.png" /></label><div class="chat-content">

<div id="desactivechat" style="display:none;">
<input onKeyPress="cherchbox()" id="inputcherch" type="text" style="font-size:12px;border:0px;border-color:#FFF;width:209px;height:16px;" />
<div id="showrecherch" style="width:100%;background-color:#FFF;border:2px;border-color:#000;">
	
</div></div>
<div style="margin-top:2px" id="msg" class="msg"></div>
<?php
if($page != "p"){
echo '<div style="background-color:#FFF;min-width:208px;max-width:208px;max-height:20px;min-height:20px;"><input type="text" onKeyPress="if(event.keyCode == 13) validerForm('.$page.');" class="balouk" ><img onclick="smailmessage(1)" id="oubannou" style="margin-top:2px;min-width:15px;max-width:15px;max-height:12px;min-height:12px;cursor:pointer;" src="./smileys/sm.png"><img  onclick="smailmessage(2)" style="cursor:pointer;min-width:15px;max-width:15px;margin-left:5px;max-height:12px;min-height:12px;" src="./smileys/sp.png"></div></form><input onchange="baloukchatimg('.$page.')" id="sortpicture" accept="image/*" type="file" style="display:none" /></div>';
echo '</div></div>';
}else{
echo '</div></div>';
echo '<input id="moi" type="hidden" value="'.$nom.'" />';
include("form-chat.php");
}
echo '<input id="page" type="hidden" value="'.$page.'" />';
?>


<div style="display:none" id="actionmobile"></div>

<script type="text/JavaScript">
var p = $("#page").val();
var moi = $("#moi").val();
if( p == "p" ){
	$('#editechat').show();
	var refresh = setInterval(function (){$('#msg').load('enligne.php').fadeIn();}, 2000);
	var refresh = setInterval(function(){$('#actionmobile').load('./script/action.php?moi='+moi).fadeIn();}, 5000);
}else{
	var refresh = setInterval(function (){load('a-chat.php?ref='+p).fadeIn();}, 3000);
}
function downloadbiblio(a){
	document.location = "biblio/"+a;
}
</script>
</div></td></tr></table></div></div>

</body></html>