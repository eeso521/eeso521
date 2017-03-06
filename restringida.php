<?php
session_start();
if(isset($_SESSION['username'])){
echo "puedes ver la página";
echo "<br><a href="destruir.php">Cerrar sesión</a>";
}else{
echo "Loguéate para ver esta página";
}
?>