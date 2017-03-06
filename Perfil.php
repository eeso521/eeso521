<?php
session_start();
if (isset($_SESSION['username'])) {
	header('Location: logueado.php');
}else{
	header('Location: login.html');
}

?>