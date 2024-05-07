<?php
session_start();
$nom = isset($_SESSION['login']) ? $_SESSION['login'] : '';
$ref = isset($_POST['ref']) ? $_POST['ref'] : '' ;

$id = isset($_POST['id']) ? $_POST['id'] : '' ;
$q = isset($_POST['q']) ? $_POST['q'] : '' ;
$nbr = isset($_POST['n']) ? $_POST['n'] : '' ;
$c1 = isset($_POST['c1']) ? $_POST['c1'] : '' ;
$c2 = isset($_POST['c2']) ? $_POST['c2'] : '' ;
$c3 = isset($_POST['c3']) ? $_POST['c3'] : '' ;
$c4 = isset($_POST['c4']) ? $_POST['c4'] : '' ;
$c5 = isset($_POST['c5']) ? $_POST['c5'] : '' ;

$fp = fopen ("./diver/qcm.txt", "a+");
if($id == "v"){
$d=fgets ($fp);
$don = explode("|@|",$d);
if($ref == 1){
$don[7]=$don[7]+1;
}elseif($ref == 2){
$don[8]=$don[8]+1;
}elseif($ref == 3){
$don[9]=$don[9]+1;
}elseif($ref == 4){
$don[10]=$don[10]+1;
}elseif($ref == 5){
$don[11]=$don[11]+1;
}
ftruncate($fp,0);
fputs ($fp,$don[0]."|@|".$don[1]."|@|".$don[2]."|@|".$don[3]."|@|".$don[4]."|@|".$don[5]."|@|".$don[6]."|@|".$don[7]."|@|".$don[8]."|@|".$don[9]."|@|".$don[10]."|@|".$don[11]."|@|".$don[12].$nom );

}else{
ftruncate($fp,0);
fputs ($fp,$q."|@|".$nbr."|@|".$c1."|@|".$c2."|@|".$c3."|@|".$c4."|@|".$c5."|@|0|@|0|@|0|@|0|@|0|@|");
}
fclose ($fp);
?>