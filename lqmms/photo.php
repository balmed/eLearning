<?php
session_start();
$login = isset($_SESSION['login']) ? $_SESSION['login'] : '';
move_uploaded_file($_FILES['image']['tmp_name'],"./img/".$login.".jpg");
?>