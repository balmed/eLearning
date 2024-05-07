<?php
session_start();
$login = isset($_SESSION['login']) ? $_SESSION['login'] : '';
$nom = isset($_SESSION['nom']) ? $_SESSION['nom'] : '';
$ref = isset($_GET['ref']) ? $_GET['ref'] : '';
$id = isset($_GET['id']) ? $_GET['id'] : '';
$msg = isset($_GET['msg']) ? $_GET['msg'] : '';
$nam = isset($_GET['nam']) ? $_GET['nam'] : '';
$moi = isset($_GET['moi']) ? $_GET['moi'] : '';
$autre = isset($_GET['autre']) ? $_GET['autre'] : '';


if ($id == "chat") {
		unlink("./message/".$moi.$autre."1.txt");
		unlink("./message/".$autre.$moi."1.txt");
		for($i=1;$i<=5;$i++){
			$ip=$i + 1;
			rename("./message/".$moi.$autre.$ip.".txt","./message/".$moi.$autre.$i.".txt");
			rename("./message/".$autre.$moi.$ip.".txt","./message/".$autre.$moi.$i.".txt");
		}
			$fp = fopen ("./message/".$moi.$autre."6.txt", "a+");
			$msg = mb_eregi_replace("\r\n","<br/>",$msg);
			$msg = "<img style='float:left;margin-right:6px' src='./img/".$login.".jpg' width='30px' height='24px' /><span style='font-family:'Comic Sans MS', cursive;margin-left:4px; font-size:18px;'>".$nom."</span><br><div class='chatc' ><div class='chatb'>".$msg."</div></div>";
			fputs ($fp, $msg);
			fclose ($fp);	
			$fp1 = fopen ("./message/".$autre.$moi."6.txt", "a+");	
			fputs ($fp1, $msg);
			fclose ($fp1);								
}


if($id == "box"){	
		unlink("./message/".$moi.$autre."1.txt");
		unlink("./message/".$autre.$moi."1.txt");
		for($i=1;$i<=5;$i++){
			$ip=$i + 1;
			rename("./message/".$moi.$autre.$ip.".txt","./message/".$moi.$autre.$i.".txt");
			rename("./message/".$autre.$moi.$ip.".txt","./message/".$autre.$moi.$i.".txt");
		}				
move_uploaded_file($_FILES['file']['tmp_name'],"./message/".$nam);
					$fp = fopen ("./message/".$moi.$autre."6.txt", "a+");
					$message = "<img style='float:left;margin-right:6px' src='./img/".$login.".jpg' width='30px' height='24px' /><span style='font-family:'Comic Sans MS', cursive;margin-left:4px; font-size:18px;'>".$nom."</span><br><img class='myimg' src='./message/".$nam."' /><br>";
					fputs ($fp, $message);
					fclose ($fp);
					$fp1 = fopen ("./message/".$autre.$moi."6.txt", "a+");	
					fputs ($fp1, $message);
					fclose ($fp1);						
}



if($id == "img"){	
		unlink("./".$ref."/".$ref."-m-1.txt");
		for($i=1;$i<=8;$i++){
			$ip=$i + 1;
			rename("./chat/".$ref."-m-".$ip.".txt","./chat/".$ref."-m-".$i.".txt");
		}				
move_uploaded_file($_FILES['file']['tmp_name'],"./chat/".$nam);
					$fp = fopen ("./chat/".$ref."-m-9.txt", "a+");
					$message = "<img style='float:left;margin-right:6px' src='./img/".$login.".jpg' width='30px' height='24px' /><span style='font-family:'Comic Sans MS', cursive;margin-left:4px; font-size:18px;'>".$nom."</span><br><img class='myimg' src='./chat/".$nam."' /><br>";
					fputs ($fp, $message);
					fclose ($fp);							
}


if ($id == "page") {
			unlink("./".$ref."/".$ref."-m-1.txt");
			for($i=1;$i<=8;$i++){
			$ip=$i + 1;
			rename("./chat/".$ref."-m-".$ip.".txt","./chat/".$ref."-m-".$i.".txt");
			}
			$fp = fopen ("./chat/".$ref."-m-9.txt", "a+");
			$msg = mb_eregi_replace("\r\n","<br/>",$msg);
			$msg = "<img style='float:left;margin-right:6px' src='./img/".$login.".jpg' width='30px' height='24px' /><span style='font-family:'Comic Sans MS', cursive;margin-left:4px; font-size:18px;'>".$nom."</span><br><div class='chatc' ><div class='chatb'>".$msg."</div></div>";
			fputs ($fp, $msg);
			fclose ($fp);										
}

?>
