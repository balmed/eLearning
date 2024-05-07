<?php
session_start();
if(isset($_SESSION['logged']) && $_SESSION['logged']) 
{header('Location: page.php?page=p');}
$er = isset($_GET['er']) ? $_GET['er'] : '' ;
?>

<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta charset="utf-8">
<style type="text/css">
bogy, h1, H2, H3, h4, h5, H6, p, div, ul, li {
   margin:0;
   padding:0;
 }
body {
 }
 #divMrapper {

		position:center;
		width:940px;
		margin:0px auto;
	}
#center {
	position:fixed;
	top:0;
}
.fbIndex {width:100%; background:-moz-linear-gradient(top, white, #D3D8E8)}
.loggedout_menubar_container{background-color:#26F;margin:0;height:62px;width:100%}
.rfloat{float:left;color:#FFF ;max-width:180px;border-radius: 16px; background:#26F;height:552px}
.lfloat{float:right}
.bx{color:#0e385f;font-size:20px;font-weight:bold;line-height:26px;margin-top:8px;width:650px;word-spacing:-1px;text-align:center}
.but {-moz-appearance:none;background:none;display:inline-block;font-size:18px;font-weight:bold;height:35px;line-height:28px;margin:0;overflow:visible;padding:0 9px;text-align:center;vertical-align:top;white-space:nowrap;color:#FFF;background-color:#4e69a2;width:100%;font-family:"Times New Roman", Times, serif; }
.txt { width:180px; height:20px}
.txt:hover{background:#EEF;border-color:#F88}
.txto {width:100%;height:20px;}
.txta {width:100%;height:20px;}
.con {font-size:14px;height:26px;text-align:center;color:#FFF;background-color:#00F;font-family:"Times New Roman";  }
</style>

</head>


<body>

<div id="divMrapper">
<div class="fbIndex">
<div class="loggedout_menubar_container">
<a href="#"><img style="width:260px;float:right; height:60px" src="./img/titre10.jpg" /></a>
<div class="clearfix loggedout_menubar">
<div class="menu_login_container">



<form action="ayour.php" method="post"/>
<table style="color:#FFF;font-family:'Times New Roman';font-size:16px" cellspacing="0"><tbody><tr><td class="html7magic">
<label>CIN/CNE </label>
</td><td class="html7magic">
<label for="pass">MOTE DE PASSE</label>
</td></tr><tr><td>

<input name="login" type="text">
</td><td>
<input name="pass" type="password">
</td><td>
<input class="con" value="Connexion" type="submit"></label></td></tr>
</table>
</form>

<div class="lfloat">
<table bordercolor="#CCCCC" width="750" height="100" border=0 cellpadding=0 
  bgcolor="">
<tr><td><?php include("sitemed.php");?>

</td>
</tr>
</table>


<div class="bx">
<img src="./img/header.jpg"  height="270" width="750"></div>




</div>

<div class="rfloat">
<span><h2  style="margin-left:8px"> Créer Compte</h2></span>

<form class="fx" method="post" action="./ajoute.php">
                <p>				</p>
                <img src="./icon/in.jpg" style="width:100%;height:150px;border:5px;border-color:26F" /><span style="font-size:16">
    <?php
	switch($er){
	case '1': echo '<span style="font-size:18;color:#F00">le nom<br></span>';break;
	case '2': echo '<span style="font-size:18;color:#F00">votre MAT/CNE <br></span>';break;
	case '3': echo '<span style="font-size:18;color:#F00">votre CIN/DN <br></span>';break;
	case '4': echo '<span style="font-size:18;color:#F00">Entrer E-mail<br></span>';break;
	case '5': echo '<span style="font-size:18;color:#F00">mot de passe<br></span>';break;
	case '6': echo '<span style="font-size:18;color:#F00">votre sex ?</span>';break;
	case '7': echo '<span style="font-size:18;color:#0F0">votre compte a été creer</span>';break;
	case '8': echo '<span style="font-size:18;color:#F00">vous avez dejat inscrit<br></span>';break;
	case '9': echo '<span style="font-size:18;color:#F00">désolé n pas le droit d inscrit<br></span>';break;
	case '10': echo '<span style="font-size:18;color:#F00"><br></span>';break;
	default: break;
	}
	
	?>
        <p>Prénom :<input class="txt" type="text" name="nom1" >
	<p>Nom de famille :<input class="txt" type="text" name="nom2" >
        <p>MAT/DN (jj-mm-aaaa) :<input class="txt" name="cne" type="text">
        <p>CIN/CNE:<input class="txt" name="cin" type="text">
        <p>E_mail :<input class="txt" name="mail" type="text"><br>
	<p>Mot de passe :<input class="txt" name="pass" type="password">                  
  	<input name="sex" value="1" type="radio"><label> Femme </label>
  	<input name="sex" value="2" type="radio"><label> Homme </label>
  	<input class="but" style="border: 1px solid #fff;" type="submit" value="Inscription"  >
    <input class="but" style="border: 1px solid #fff;" type="reset" value="Réinitialiser"  >
        
      </form>

</div>
  </div></div>
 
</body></html>
