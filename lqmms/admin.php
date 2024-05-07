<?php 
session_start();
$login = isset($_SESSION['nom']) ? $_SESSION['nom'] : '';
$ref = isset($_SESSION['ref']) ? $_SESSION['ref'] : '';
if($ref != "root") {header('Location: page.php?page=p');}
?>



<html><head>
<script language="javascript" src="./script/vid.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Ayour</title><link href="./script/my.css" rel="stylesheet" type="text/css" />
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
	echo '<div id="ed" style="width:295px" class="not"><div class="mes3" id="ed2">Adminstrateur de systeme :<br>BALLOUK MOHAMED<br>ELMGHANI BRAHIM                              </div></div>';
	echo '<a href="./out.php" style="float:right;color:#C66; font-family:Comic Sans MS">Deconnexion('.$login.')</a>';
	echo '</div>'; 

?>
<div  style="background:#dcdee3;width:99.60%;max-height:300px;min-height:300px;margin-left:4px;margin-top:2px">
	<div style="float:left;width:200px;height:300px;background-image : url(./img/takchout.jpg) ">
		<img style="background:#FFF;width:22px;height:20px;position:absolute;z-index:1;" src="./icon/111.png"/>
		<input onKeyPress="clist()" id="inputlist" type="text" style="margin-left:23px;font-size:12px;border:2px;border-color:#99F;max-width:177px;min-width:177px;height:20px;" />
			<span style="cursor:pointer"  class="menua">Gestion des profil</span><br>
<div id="listeutil"></div>

			<div style="bottom:0px;width:200px;height:30px;">
				<span style="cursor:pointer" onclick="alletude('etudiant')" class="menua">Gestion les élève</span><br>
				<span style="cursor:pointer" onclick="alletude('formateur')" class="menua">Gestion des Enseignants</span><br>
				<span style="cursor:pointer" onclick="alletude('administrateur')" class="menua">Gestion des Administrateur</span>
			</div>
	</div>	
	<div id="listdet" style="margin-left:198px;"></div>
</div></div>
<script type="text/javascript">
function selectutil(a){
	$('#listdet').load('cherchbiblio.php?mot='+a+'&ref=detail').fadeIn();
}
function alletude(a){
$('#listdet').load('cherchbiblio.php?mot='+a+'&ref=all').fadeIn();
}
function suprimall(a){
	var text =$("#listsuptr").text();
	var text1 =$("#listsuptr1").text();
			$.ajax({
				type: "POST",
				url: "cherchbiblio.php?mot="+text+"&ref=sup&nom="+a+"&cin="+text1,
				success: function(){setTimeout("alletude('"+a+"');",1200);}
			});
}
function selecttr(a,b){
	$("#"+a).toggle();
	var text =$("#listsuptr").text();
	var text1 =$("#listsuptr1").text();
	if (text != ""){$("#listsuptr").text(text+" | "+a);}else{$("#listsuptr").text(a);}
	if (text1 != ""){$("#listsuptr1").text(text1+" | "+a+b);}else{$("#listsuptr1").text(a+b);}
}
function clist(){
		if ($("#inputlist").val() != ""){
		var mot=$("#inputlist").val();
		$('#listeutil').val();
		$('#listeutil').load('cherchbiblio.php?mot='+mot+'&ref=list').fadeIn();
}}
function ajoutnovuti(a){
var cin =$("#inputcin").val();
var nom =$("#inputnom").val();var prenom =$("#inputprenom").val();var cne =$("#inputcne").val();
if (cin == "" || cne =="" || nom == "" || prenom == "") {alert("remplir les champs");}else{
			$.ajax({
				type: "POST",
				url: "cherchbiblio.php?cin="+cin+"&cne="+cne+"&nom="+nom+"&prenom="+prenom+"&ref=add&mot="+a,
				success: function(){setTimeout("alletude('"+a+"');",3000);}
			});
}}
</script>
<style type="text/css">
	.menua:hover {color:#FFF;background-color: #00D}
	.hovertr:hover{background-color: #FDD;cursor:pointer}
</style>
<?php include("form-chat.php"); ?>
</body></html>

