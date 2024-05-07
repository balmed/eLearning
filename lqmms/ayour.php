<?php


$login = isset($_POST['login']) ? $_POST['login'] : '';
$pass = isset($_POST['pass']) ? $_POST['pass'] : '';

if($login == ""){
header('Location: ./index.php?login=1');
}elseif($pass == ""){
header('Location: ./index.php?login=2');
}

else{
			if(file_exists("./compts/".$login.".txt")){
							$fp = fopen ("./compts/".$login.".txt", "a+");
							$donnees=fgets ($fp);
							$don = explode("|",$donnees);
							if($pass == $don[1]){
								session_id($login);
								session_start();
								$_SESSION['login'] = $login;
								$_SESSION['nom'] = $don[0];
								$_SESSION['rel'] = $don[3];
								$_SESSION['logged'] = true;
								$_SESSION['ref'] = $don[6];
								fclose ($fp);
									if($don[6] == "root"){
										header('Location: ./admin.php');
									}else{
										header('Location: ./page.php?page=p');
									}
							
							}else{
								fclose ($fp);
								header('Location: index.php?login=3');
							}
				}else{
				header('Location: index.php?login=4');
				}
}
?>