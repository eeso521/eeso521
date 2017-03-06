<?
session_start();
if (isset($_SESSION['username'])) {
	if ($_SESSION['curso'] == "1°") {
		header('Location: prim.php');
	}
	if ($_SESSION['curso'] == "2°") {
	header('Location: segu.php');
	}
	if ($_SESSION['curso'] == "3°") {
		header('Location: terc.php');
	}
	if ($_SESSION['curso'] == "4°") {
	header('Location: cuar.php');
	}
	if ($_SESSION['curso'] == "5°") {
		header('Location: quin.php');
	}
	if ($_SESSION['curso'] == "Cursado Finalizado") {
	header('Location: curf.php');
	}
} else {
	header('Location: login.html');
}

?>