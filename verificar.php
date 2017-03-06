<?php
session_start();
include("conexion.php");
if(isset($_POST['USER']) && !empty($_POST['USER']) &&
isset($_POST['PW']) && !empty($_POST['PW']))
{
$con=mysql_connect($host,$user,$pw) or die (header('Location: errserverl.php'));
	mysql_select_db($db,$con) or die (header('Location: errdbl.php'));
	
$sel=mysql_query("SELECT USER,PW,CURSO FROM registro WHERE USER='$_POST[USER]'",$con);

$sesion=mysql_fetch_array($sel);

if($_POST['PW'] == $sesion['PW']){
	$_SESSION['username'] = $_POST['USER'];
	$_SESSION['curso'] = $sesion['CURSO'];
	header('Location: log-corr.html');
}else{
	header('Location: errcombl.php');
}

}else{
	header('Location: errcampl.php');
}
?>