<?php
$ref = isset($_GET['mot']) ? $_GET['mot'] : '';
$idx = isset($_GET['ref']) ? $_GET['ref'] : '';
$nom = isset($_GET['nom']) ? $_GET['nom'] : '';
$cin = isset($_GET['cin']) ? $_GET['cin'] : '';
$cne = isset($_GET['cne']) ? $_GET['cne'] : '';
$prenom = isset($_GET['prenom']) ? $_GET['prenom'] : '';


if($idx == "1"){
if($ref != "" AND $ref != " "){
if($dir=@opendir('./biblio')){$i=10;
	while($file=readdir($dir)){
		if(mb_substr_count($file,$ref)>0){
			if(($i%2) == 0){
		echo "<div id='menu'><span style='margin-top:2px;cursor:pointer' class='menua' onclick=\"downloadbiblio('".$file."')\" >".$file."</span><br></div>";
		}else{
		echo "<div id='menu'><span style='margin-top:2px;cursor:pointer' class='menua' onclick=\"downloadbiblio('".$file."')\" >".$file."</span><br></div>";
		}
	}}
}}
}elseif ($idx == "add") {

			$con=mysqli_connect("localhost","root","","e_learning");
			mysqli_query($con,"INSERT INTO ".$ref."(CIN,CNE_MAT,nom,prenom) VALUES('".$cin."','".$cne."','".$nom."','".$prenom."')");
			mysqli_close($con);
$fp = fopen ("./compts/".$ref.".txt", "a+");
fputs($fp,$cin.$cne);
fclose($fp);
}elseif ($idx == "all") {
try {
			$conexion = Mysql_pconnect("localhost","root","") or die("Probleme de connexion");
            mysql_select_db("e_learning",$conexion) or die("Probleme dans selection base");
			$requet=mysql_query("SELECT * FROM ".$ref."",$conexion) or die(mysql_error());
			echo "<div style='display:block;max-height:275px;overflow-x:hidden'><table style='margin-left:5px;border-color:#000;background-color:#FFF'><tr style='background-color:#DDF'><td style='width:178px'>NOM</td><td style='width:178px'>PRENOM</td><td style='width:178px'>CIN</td><td style='width:178px'>CNE_MAT</td></tr>";
		


		echo "<tr><td>
		<input id='inputnom' style='width: 160px;height: 20px' type='text' /></td><td style='width:178px'>
		<input id='inputprenom' style='width: 160px;height: 20px' type='text' /></td><td style='width:178px'>
		<input id='inputcin' style='width: 160px;height: 20px' type='text' /></td><td style='width:178px'>
		<input id='inputcne' style='width: 160px;height: 20px' type='text' /></td></tr>";




		while ($don = mysql_fetch_array($requet) ) {
			echo "<tr onclick='selecttr(\"".$don['CIN']."\",\"".$don['CNE_MAT']."\")' class='hovertr'><td><img style='display:none' src='icon/110.png' id='".$don['CIN']."'>".$don['nom']."</td><td style='width:178px'>".$don['prenom']."</td><td style='width:178px'>".$don['CIN']."</td><td style='width:178px'>".$don['CNE_MAT']."</td></tr>";
		}
	echo "</table></div>";
echo '<input  onclick="ajoutnovuti(\''.$ref.'\')" style="margin-top:5px;margin-left:5px" type="button" value="Ajouter" class="like" />';
echo '<input onclick="suprimall(\''.$ref.'\')" style="margin-top:5px" type="button" value="suprimer" class="like" />
<span style="margin-top:8px;border:1px;border-color:#FFF;color:#000;background-color:#D99;font-size:12px;" value"" id="listsuptr"></span>
<span style="display:none" id="listsuptr1"></span>';
} catch (Exception $e) {
	echo "Erreur base de donnée";
}
}elseif ($idx == "sup") {
$il = explode("|",$ref);
$con=mysqli_connect("localhost","root","","e_learning");
for ($i=0; $i < count($il); $i++) { 
$idl=trim($il[$i]);
mysqli_query($con,"DELETE FROM `".$nom."` WHERE `CIN`='".$idl."'");
}
mysqli_close($con);

$fS = fopen ("./compts/".$nom.".txt", "a+");
$donnees=fgets ($fS);
$il = explode("|",$cin);
for ($i=0; $i < count($il); $i++) { 
$idl=trim($il[$i]);
$donnees = mb_eregi_replace($idl,"",$donnees);
ftruncate($fS,0);
fputs ($fS, $donnees);
}
fclose($fS);
}elseif ($idx == "list") {
	$dir=@opendir('./compts');
	while($file=readdir($dir)){
		if(mb_substr_count($file,$ref)>0){
			if(mb_substr_count($file,"-s.txt") == 0 AND mb_substr_count($file,"etudiant") == 0 AND mb_substr_count($file,"administrateur") == 0 AND mb_substr_count($file,"formateur") == 0 ){
    			echo "<span style='margin-top:2px;cursor:pointer' class='menua' onclick=\"selectutil('".mb_eregi_replace(".txt","",$file)."')\" >".mb_eregi_replace(".txt","",$file)."</span><br>";
    			}
		}
	}

}elseif($idx == "detail"){

$fp = fopen ("./compts/".$ref.".txt", "a+");
$donnees=fgets ($fp);fclose($fp);
$don = explode("|",$donnees);
if($don[5] == "1"){$sex="Female";}else{$sex="Male";}
$ref = mb_eregi_replace(".txt",".jpg",$ref);
if(file_exists("./img/".$ref.".jpg")){
	echo '<img onclick="pectur(1)" style="cursor:pointer;height:20px;width:20px;top:36px;margin-left:85px;float:left;position : absolute; z-index: 5" src="./icon/edi.png" /><img src="./img/'.$ref.'.jpg" style="margin-left:5px;float:left;min-height:100px; max-height:100px;min-width:100px;max-width:100px;border-radius:15px;*moz-border-radius:15px;top:35px;border:3px solid #FFF;position : absolute ; z-index: 4" />';                                                                       
}else{
	echo '<img onclick="pectur(1)" style="cursor:pointer;margin-top:4px;height:20px;margin-left:85px;top:36px;width:20px;float:left;position : absolute; z-index: 5" src="./icon/edi.png" /><img src="./img/default.jpg" style="margin-left:5px;float:left;min-height:100px; max-height:100px;min-width:100px;max-width:100px;border-radius:15px;*moz-border-radius:15px;top:35px;border:3px solid #FFF;position : absolute; z-index: 4" />';
}
echo '<img src="./icon/aide.png" style="float:left;min-height:100px;margin-left:142px; max-height:100px;min-width:96px;max-width:96px;top:35px;position : absolute ; z-index: 4" />';
echo '<img src="./icon/aide1.png" style="float:left;min-height:196px;margin-left:218px; max-height:196px;min-width:20px;max-width:20px;top:135px;position : absolute ; z-index: 4" />';
echo "<br>";
echo "<span style='margin-top:90px;margin-left:35px;position : absolute; z-index: 6' class='menua'>".$don[6]."</span><br>";
echo "<span style='margin-top:90px;margin-left:5px;position : absolute; z-index: 6' class='menua'>Nom </span><span style='margin-top:90px;margin-left:85px;position : absolute; z-index: 6' class='menua'>".$don[0]."</span>";
echo "<span style='margin-top:110px;margin-left:5px;position : absolute; z-index: 6' class='menua'>Cin </span><span style='margin-top:110px;margin-left:85px;position : absolute; z-index: 6' class='menua'>".$don[3]."</span>";
echo "<span style='margin-top:130px;margin-left:5px;position : absolute; z-index: 6' class='menua'>Cne/Mat </span><span style='margin-top:130px;margin-left:85px;position : absolute; z-index: 6' class='menua'>".$don[2]."</span>";
echo "<span style='margin-top:150px;margin-left:5px;position : absolute; z-index: 6' class='menua'>Passe </span><span style='margin-top:150px;margin-left:85px;position : absolute; z-index: 6' class='menua'>".$don[1]."</span>";
echo "<span style='margin-top:170px;margin-left:5px;position : absolute; z-index: 6' class='menua'>Email </span><span style='margin-top:170px;margin-left:85px;position : absolute; z-index: 6' class='menua'>".$don[4]."</span>";
echo "<span style='margin-top:190px;margin-left:5px;position : absolute; z-index: 6' class='menua'>Sex </span><span style='margin-top:190px;margin-left:85px;position : absolute; z-index: 6' class='menua'>".$sex."</span>";
echo '<input  onclick="chatligne(\''.$don[0].'\',\''.$don[3].'\')" style="margin-top:242px" type="button" value="Message" class="like" />';
echo '<input style="margin-top:242px" type="button" value="Avertissement" class="like" />';
echo '<input style="margin-top:242px" type="button" value="suprimer" class="like" />';

echo '<div style="margin-left:228px;display:block;max-height: 298px;overflow-x:hidden;position : absolute; z-index: 6;top:30px">';
for($i=1;$i<=65;$i++){
			$nbr = fopen ("./".$i."/ss.txt", "a+");
			$n=fgets($nbr);fclose($nbr);
				for($s=1;$s<=$n;$s++){
					$k=false;
					$fp = fopen ("./$i/s".$s.".txt", "a+");
					$donnees=fgets ($fp);
						if(mb_ereg($ref,substr($donnees,0,110))){$k=true;
							echo '<div id="statut-tout'.$i.'ass'.$s.'" class="bf bg bh"><div class="cr"><div class="cs"><div class="ct"><div class="cu cv cw"><div class="bt cx cy"><div id="statut-tout'.$i.'-'.$s.'"><div><h3 class="cz da"><strong>';
								if(!file_exists('./img/'.$i.$s.'.jpg')){
									$donnees = mb_eregi_replace("<img style='border-radius:15px;border: 8px solid #000; width:460px;height:280px' src='./img/".$i.$s.".jpg'>","",$donnees);
								}
							$donnees=stripslashes($donnees);
							echo $donnees; 
						}
fclose ($fp);
if ($k) {

echo '<input type="button" value="Modifier" class="like" onclick="edite('.$i.','.$s.')" /> · ';
echo '<input type="button" value="Supprimer" class="like" onclick="delet('.$i.','.$s.')" /></span></div>';
echo '</span></div></div></div></div></div></div>';
}}}
echo "<br><span style='margin-left:180px;border-color:#FFF;border:0px;'>FIN D'ACTUALITE</span>";
echo "<textarea style='display:none' id='rechange'></textarea> </div></div>";
}else{
	move_uploaded_file($_FILES['filebiblio']['tmp_name'],'./biblio/'.$nom);
}
?>
