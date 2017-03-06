<?php
include("conexion.php");
if(isset($_POST['NOMBRE']) && !empty($_POST['NOMBRE']) &&
isset($_POST['EMAIL']) && !empty($_POST['EMAIL']) &&
isset($_POST['DNI']) && !empty($_POST['DNI']) &&
isset($_POST['USER']) && !empty($_POST['USER']) &&
isset($_POST['PW']) && !empty($_POST['PW']) &&
isset($_POST['PW2']) && !empty($_POST['PW2']) &&
isset($_POST['CURSO']) && !empty($_POST['CURSO']) &&
$_POST ['PW'] == $_POST ['PW2'])
{

	$con=mysql_connect($host,$user,$pw)
	or die (header('Location: errserverr.php'));

	mysql_select_db($db,$con)
	or die(header('Location: errdbr.php'));

	mysql_query("INSERT INTO registro (NOMBRE,EMAIL,DNI,USER,PW,USER)
VALUES ('$_POST[NOMBRE]', '$_POST[EMAIL]', '$_POST[DNI]', '$_POST[USER]', '$_POST[PW]', '$_POST[USER]')", $con);
	header('Location: reg-corr.html');

}else{
	header('Location: errcampr.php');
}

?>