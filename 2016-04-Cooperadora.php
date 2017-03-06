<!doctype html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<meta name="description" content="La Escuela de Enseñanza Secundaria Orientada N° 521 es la única
		escuela secundaria de la localidad de López, en la provincia de Santa Fé">
		<meta name="keywords" content=" escuela, escuela secundaria, secundaria, escuela secundaria orientada,
		eeso, EESO N° 521, 521, escuela 521, escuela santa fe, santa fe, lopez, escuela de lopez, lopez santa fe">
		<title>Asamblea Gral. de Cooperadora - E.E.S.O. N°521</title>
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
					<h2>Asamblea general ordinaria de la Asociación Cooperadora</h2>
					<p>
						Señores socios:<br/>					
						La Comisión Directiva de la Asociación Cooperadora Escuela de Enseñanza Media Nº 521, convoca a los señores asociados a la Asamblea general ordinaria que se llevará a cabo el día Martes 31 de Mayo de 2016, a las 20:30 horas, en la sede de la institución, sita en Av. Buenos Aires 1044 de la ciudad de López, para tratar el siguiente:<br/><br/>
						<h3>Órden del día</h3><br/>
						<b>1º)</b> Lectura del acta anterior.<br/>
						<b>2º)</b> Lectura y consideración de la Memoria, Balance General, cuadro de Gastos y Recursos, Anexos, Notas e informe del Auditor y del Órgano fiscalizador, Proyecto de Distribución de los Excedentes, del ejercicio cerrado el 31/03/2016.<br/>
						<b>3º)</b> Renovación Comisión Directiva.<br/>
						<b>4º)</b> Varios.<br/><br/>

						<h4>De nuestros estatutos</h4><br/>

						<b>ARTICULO 17º:</b> Las asambleas de la entidad serán ordinarias y extraordinarias integrando las mismas con voz y voto, los asociados mayores de edad, al día con tesorería y los cónyuges de los mismos en ausencia. Los asociados adherentes sólo tendrán voz.<br/>

						<b>ARTICULO 21º:</b> En las asambleas se formará quórum con la presencia de la mitad más uno de los asociados con derecho a voto. No habiendo ese número la asamblea se podrá reunir en la segunda citación, media hora después con cualquier cantidad de asociados presentes. Las resoluciones se tomarán por simple mayoría.<br/><br/>
						
						<b>Marcelo Gabriel Moyano</b><br/>
						<i>Presidente</i><br/>
						<b>Sandra Mabel Recio</b><br/>
						<i>Secretaria</i>
					</p>
				</article>
			</div>
		</div>
		<footer>Juan Blas Tschopp - JBT Producciones (03404) 498261</footer>
	</body>
</html>