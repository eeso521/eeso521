<!doctype html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<meta name="description" content="La Escuela de Enseñanza Secundaria Orientada N° 521 es la única
		escuela secundaria de la localidad de López, en la provincia de Santa Fé">
		<meta name="keywords" content=" escuela, escuela secundaria, secundaria, escuela secundaria orientada,
		eeso, EESO N° 521, 521, escuela 521, escuela santa fe, santa fe, lopez, escuela de lopez, lopez santa fe">
		<title>Jornada Saludable - EESO N°521</title>
		<link rel="shortcut icon" type="image/x-icon" href="imagenes/favicon.ico">
		<link rel="stylesheet" type="text/css" href="css/index.css" /> 
		<link rel="stylesheet" type="text/css" href="icons.css">
		<link href='https://fonts.googleapis.com/css?family=Roboto:400,900,500,300' rel='stylesheet' type='text/css'>
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<?php session_start(); ?>
	</head>

	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.5&appId=185741894809386";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));
	</script>

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
						<h2>Jornada Saludable</h2>
						<p>
							Se realizó el día 5 de Mayo en el establecimiento, comenzó con una charla para todos los cursos disertada por la Lic. en Nutrición Daiana Sieffel, en la cual se hablo sobre cómo y qué tenemos que comer, luego los alumnos prepararon su propio desayuno y calcularon su Índice de Masa Corporal, despúes de estas actividades se procedió a una caminata hasta el cementerio local.
						</p>
						<center><iframe src="https://www.youtube.com/embed/jbMig1QEHBA?rel=0" frameborder="0" allowfullscreen></iframe></center>
					</article>
				</div>
		</div>
		<footer>Juan Blas Tschopp - JBT Producciones (03404) 498261</footer>
	</body>
</html>