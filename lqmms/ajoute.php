<?php
$nom1 = isset($_POST['nom1']) ? $_POST['nom1'] : '';
$nom2 = isset($_POST['nom2']) ? $_POST['nom2'] : '';
$pass = isset($_POST['pass']) ? $_POST['pass'] : '';
$cin = isset($_POST['cin']) ? $_POST['cin'] : '';
$cne = isset($_POST['cne']) ? $_POST['cne'] : '';
$mail = isset($_POST['mail']) ? $_POST['mail'] : '';
$sex = isset($_POST['sex']) ? $_POST['sex'] : '';



$fp1 = fopen ("./compts/etudiant.txt", "a+");
$d1=fgets ($fp1);
$d1=stripslashes($d1);
$fp2 = fopen ("./compts/formateur.txt", "a+");
$d2=fgets ($fp2);
$d2=stripslashes($d2);
$fp3 = fopen ("./compts/administrateur.txt", "a+");
$d3=fgets ($fp3);
$d3=stripslashes($d3);

if( $nom1  == "" or $nom2 == ""){
		 header('Location: index.php?er=1');
}elseif( $pass == "" ){
	header('Location: index.php?er=5');
}elseif( $mail == "" ){
	header('Location: index.php?er=4');
}elseif( $cne == "" ){
	header('Location: index.php?er=2');
}elseif( $cin == "" ){
	header('Location: index.php?er=3');
}elseif(!mb_ereg($cin.$cne,$d1) AND !mb_ereg($cin.$cne,$d2) AND !mb_ereg($cin.$cne,$d3)){
	fclose ($fp1);
	fclose ($fp2);
	header('Location: index.php?er=9');
}else{
	if(mb_ereg($cin.$cne,$d1)){$mat="Etudiant";}
	elseif(mb_ereg($cin.$cne,$d2)){$mat="Professeur";}
	else{$mat="root";}
	
fclose ($fp1);fclose ($fp2);fclose ($fp3);

				if(!file_exists("./compts/".$cin.".txt")){
					$fp = fopen ("./compts/".$cin.".txt", "a+");
					fputs ($fp,$nom1.' '.$nom2.'|'.$pass.'|'.$cne.'|'.$cin.'|'.$mail.'|'.$sex.'|'.$mat);
					fclose($fp);
					$fp = fopen ("./chat/enligne.txt", "a+");
					fputs ($fp,$cin.'|');
					fclose($fp);
					header('Location: index.php?er=7');
				}else{
				header('Location: index.php?er=8');
				}}

?>