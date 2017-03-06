<!doctype html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<meta name="description" content="La Escuela de Enseñanza Secundaria Orientada N° 521 es la única
		escuela secundaria de la localidad de López, en la provincia de Santa Fé">
		<meta name="keywords" content=" escuela, escuela secundaria, secundaria, escuela secundaria orientada,
		eeso, EESO N° 521, 521, escuela 521, escuela santa fe, santa fe, lopez, escuela de lopez, lopez santa fe">
		<title>Cortos sobre violencia - E.E.S.O. N°521</title>
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
					<h2>4° Año: Cortos sobre violencia</h2>
					<p>
						Estos trabajos son el resultado de los conceptos trabajados en el tercer trimestre en la asignatura de Lengua y Literatura por los alumnos de 4° año cuyo tema principal fue violencia de género. Las actividades previamente realizadas fueron: lectura de cuentos: “La Intrusa” de Jorge Luis Borges; “Escabeche de berenjena” de Úrsula Buzio; “Es que somos muy pobres” de Juan Rulfo; “Réquiem con tostadas” de Mario Benedetti; “Los ojos de Celina” de Bernardo Kordon, novela: “El infierno de los vivos” de Alicia Barberis, escucha de canciones, proyección de un capítulo de la serie Mujeres Asesinas “Margarita la maldita” y textos expositivos y argumentativos.
					</p>
					<center><iframe src="https://www.youtube.com/embed/t6QKqvSyWXk?rel=0" frameborder="0" allowfullscreen></iframe></center>
					<center><iframe src="https://www.youtube.com/embed/HHV6hSQbICw?rel=0" frameborder="0" allowfullscreen></iframe></center>
					<center><iframe src="https://www.youtube.com/embed/h7MxXoSG_i0?rel=0" frameborder="0" allowfullscreen></iframe></center>
				</article>
			</div>
		</div>
		<footer>Juan Blas Tschopp - JBT Producciones (03404) 498261</footer>
	</body>
</html>