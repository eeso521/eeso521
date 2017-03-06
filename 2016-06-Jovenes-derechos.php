<!doctype html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<meta name="description" content="La Escuela de Enseñanza Secundaria Orientada N° 521 es la única
		escuela secundaria de la localidad de López, en la provincia de Santa Fé">
		<meta name="keywords" content=" escuela, escuela secundaria, secundaria, escuela secundaria orientada,
		eeso, EESO N° 521, 521, escuela 521, escuela santa fe, santa fe, lopez, escuela de lopez, lopez santa fe">
		<title>Los jóvenes sujetos de derecho - E.E.S.O. N°521</title>
		<link rel="shortcut icon" type="image/x-icon" href="imagenes/favicon.ico">
		<link rel="stylesheet" type="text/css" href="css/index.css" /> 
		<link rel="stylesheet" type="text/css" href="icons.css">
		<link href='https://fonts.googleapis.com/css?family=Roboto:400,900,500,300' rel='stylesheet' type='text/css'>
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<?php session_start(); ?>
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-72556123-1', 'auto');
		  ga('send', 'pageview');

		</script>
	</head>

	<body>
		<div class="contenedor">
			<header>
				<div class="header">		
					<img src="imagenes/Imagen2.png" title="Escudo del establecimiento presentado en 2013 y diseñado por una alumna de la escuela" alt="Escudo de la escuela E.E.S.O. N°521"/>
					<div class="titulo">
						<h1>Escuela de Enseñanza Secundaria Orientada N°521</h1>
						<h2>López, Santa Fé</h2>
					</div>
				</div>
				<nav>
					<div class="menu_bar">
						<a href="#" class="bt-menu"><span class="icon-dots-three-horizontal"></span>Menu</a>
					</div>
					<ul class="menu">
						<li><a href="index.php"><span class="icon-home"></span>Inicio</a></li>
						<li><a href="#"><span class="icon-pin"></span>Útiles</a></li>
						<li><a href="#"><span class="icon-popup"></span>Actividades</a></li>
						<li><a href="#"><span class="icon-text"></span>Contacto</a></li>
						<li><a href="Perfil.php">
						<?php
						if(isset($_SESSION['username']) && !empty($_SESSION['username']))
						{
						echo "<span class=\"icon-users\"></span>" . "Bienvenido " . $_SESSION["username"] . " de " . $_SESSION["curso"];
						}else{
						echo "<span class=\"icon-users\"></span>Zona alumnos";
						}
						?>
						</a></li>
					</ul>
				</nav>
			</header>
			<div class="art-ent">
				<article>
					<h2>2° Año: Los jóvenes, sujetos de derecho</h2>
					<p>
						En Seminario de Ciencias sociales, con la profesora Cavallo Analia estamos trabajando el tema "Los jóvenes somos sujetos de derecho", con este vídeo queremos dejar a todos los jóvenes algunos de sus derechos, para que conozcan y los hagan valer. Esperamos que les guste alumnos de 2° año de la Escuela de Enseñanza Secundaria Orientada N°521.
					</p>
					<center><iframe src="https://www.youtube.com/embed/jmCjqOzWuaE?rel=0" frameborder="0" allowfullscreen></iframe></center>
				</article>
			</div>
		</div>
		<footer>Juan Blas Tschopp - JBT Producciones (03404) 498261</footer>
	</body>
</html>