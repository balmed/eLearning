<?php
session_start();
$login = isset($_SESSION['login']) ? $_SESSION['login'] : '';
$nom = isset($_SESSION['nom']) ? $_SESSION['nom'] : '';
$page = isset($_POST['page']) ? $_POST['page'] : '' ;
$ref = isset($_POST['ref']) ? $_POST['ref'] : '' ;
$comment = isset($_POST['comment']) ? $_POST['comment'] : '' ;
					$fp = fopen ("./".$page."/cm".$ref.".txt", "a+");
					$comment = mb_eregi_replace("\r\n","<br/>",$comment);
					$comment = mb_eregi_replace("<","<'",$comment);
					$comment = "<img style='float:left;margin-top:2px;margin-right:6px' src='./img/".$login.".jpg' width='36px' height='30px' /><span style='font-family:'Comic Sans MS';margin-left:4px; font-size:18px;'>".$nom."</span><br><div class='commentc' ><div class='commentb'>".$comment."</div></div>|@|";
					fputs ($fp, $comment);
					fclose ($fp);																	 
?>