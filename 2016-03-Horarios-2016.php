<!doctype html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<meta name="description" content="La Escuela de Enseñanza Secundaria Orientada N° 521 es la única
		escuela secundaria de la localidad de López, en la provincia de Santa Fé">
		<meta name="keywords" content=" escuela, escuela secundaria, secundaria, escuela secundaria orientada,
		eeso, EESO N° 521, 521, escuela 521, escuela santa fe, santa fe, lopez, escuela de lopez, lopez santa fe">
		<title>Horarios 2016 - E.E.S.O. N°521</title>
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
					<div>
						<img src="imagenes/Imagen2.png" height="100px" = title="Escudo del establecimiento presentado en 2013 y diseñado por una alumna de la escuela" alt="Escudo de la escuela E.E.S.O. N°521"/>
					</div> 
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
					<h2>Horarios 2016</h2>
					<br/>
					<p>Los horarios están sujetos a cambios, cualquier error o cambio no subido, avise en contacto</p>
					<br/>
					<h3>1° Año</h3>
               	  <table class="horario">
							<tr class="head">
								<td>Hora</td>
								<td></td>
								<td>Lunes</td>
								<td>Martes</td>
								<td>Miércoles</td>
								<td>Jueves</td>
								<td>Viernes</td>
							</tr>
							<tr>
								<td class="tabla-gris-claro">1°</td>
								<td class="tabla-gris-claro">7:30</td>
								<td>Inglés</td>
								<td>Geografía</td>
								<td>Matemática</td>
								<td>Lengua</td>
								<td>Geografía</td>
							</tr>
							<tr>
								<td class="tabla-gris-claro">2°</td>
								<td class="tabla-gris-claro">8:10</td>
								<td>Inglés</td>
								<td>Geografía</td>
								<td>Matemática</td>
								<td>Lengua</td>
								<td>Geografía</td>
							</tr>
							<tr>
								<td class="tabla-gris-claro"></td>
								<td class="tabla-gris-claro">8:50</td>
								<td class="tabla-rojo"></td>
								<td class="tabla-rojo"></td>
								<td class="tabla-rojo">RECREO</td>
								<td class="tabla-rojo"></td>
								<td class="tabla-rojo"></td>
							</tr>
							<tr>
								<td class="tabla-gris-claro">3°</td>
								<td class="tabla-gris-claro">9:00</td>
								<td>Sem. de Ciencias Sociales</td>
								<td>Taller de Economía y Administración </td>
								<td>Biología</td>
								<td>Inglés</td>
								<td>Matemática</td>
							</tr>
							<tr>
								<td class="tabla-gris-claro">4°</td>
								<td class="tabla-gris-claro">9:40</td>
								<td>Música</td>
								<td>Taller de Economía y Administración </td>
								<td>Biología</td>
								<td>Biología</td>
								<td>Matemática</td>
							</tr>
							<tr>
								<td class="tabla-gris-claro"></td>
								<td class="tabla-gris-claro">10:20</td>
								<td class="tabla-rojo"></td>
								<td class="tabla-rojo"></td>
								<td class="tabla-rojo">RECREO</td>
								<td class="tabla-rojo"></td>
								<td class="tabla-rojo"></td>
							</tr>
							<tr>
								<td class="tabla-gris-claro">5°</td>
								<td class="tabla-gris-claro">10:30</td>
								<td>Lengua</td>
								<td>Taller de Economía y Administración </td>
								<td>Educación Tecnológica</td>
								<td>Biología</td>
								<td>Matemática</td>
							</tr>
							<tr>
								<td class="tabla-gris-claro">6°</td>
								<td class="tabla-gris-claro">11:10</td>
								<td>Lengua</td>
								<td>Música</td>
								<td>Educación Tecnológica</td>
								<td>Sem. de Ciencias Sociales</td>
								<td>Formación Ética y ciudadana</td>
							</tr>
							<tr>
								<td class="tabla-gris-claro">7°</td>
								<td class="tabla-gris-claro">11:50</td>
								<td>Lengua</td>
								<td>Música</td>
								<td>Música</td>
								<td>Sem. de Ciencias Sociales</td>
								<td>Formación Ética y ciudadana</td>
							</tr>			
						</table>
					<h3>2° Año</h3>
						<table class="horario">
							<tr class="head">
								<td>Hora</td>
								<td></td>
								<td>Lunes</td>
								<td>Martes</td>
								<td>Miércoles</td>
								<td>Jueves</td>
								<td>Viernes</td>
							</tr>
							<tr>
								<td class="tabla-gris-claro">1°</td>
								<td class="tabla-gris-claro">7:30</td>
								<td>Fisicoquímica</td>
								<td>Fisicoquímica</td>
								<td>Sem. de Ciencias Sociales</td>
								<td>Educación Tecnológica</td>
								<td>Matemática</td>
							</tr>
							<tr>
								<td class="tabla-gris-claro">2°</td>
								<td class="tabla-gris-claro">8:10</td>
								<td>Fisicoquímica</td>
								<td>Fisicoquímica</td>
								<td>Sem. de Ciencias Sociales</td>
								<td>Educación Tecnológica</td>
								<td>Matemática</td>
							</tr>
							<tr>
								<td class="tabla-gris-claro"></td>
								<td class="tabla-gris-claro">8:50</td>
								<td class="tabla-rojo"></td>
								<td class="tabla-rojo"></td>
								<td class="tabla-rojo">RECREO</td>
								<td class="tabla-rojo"></td>
								<td class="tabla-rojo"></td>
							</tr>
							<tr>
								<td class="tabla-gris-claro">3°</td>
								<td class="tabla-gris-claro">9:00</td>
								<td>Lengua y Literatura</td>
								<td>Historia</td>
								<td>Matemática</td>
								<td>Lengua y Literatura</td>
								<td>Historia</td>
							</tr>
							<tr>
								<td class="tabla-gris-claro">4°</td>
								<td class="tabla-gris-claro">9:40</td>
								<td>Lengua y Literatura</td>
								<td>Historia</td>
								<td>Matemática</td>
								<td>Lengua y Literatura</td>
								<td>Historia</td>
							</tr>
							<tr>
								<td class="tabla-gris-claro"></td>
								<td class="tabla-gris-claro">10:20</td>
								<td class="tabla-rojo"></td>
								<td class="tabla-rojo"></td>
								<td class="tabla-rojo">RECREO</td>
								<td class="tabla-rojo"></td>
								<td class="tabla-rojo"></td>
							</tr>
							<tr>
								<td class="tabla-gris-claro">5°</td>
								<td class="tabla-gris-claro">10:30</td>
								<td>Inglés</td>
								<td>Lab. de Ciencias Naturales</td>
								<td>Matemática</td>
								<td>Lengua y Literatura</td>
								<td>Sem. de Ciencias Sociales</td>
							</tr>
							<tr>
								<td class="tabla-gris-claro">6°</td>
								<td class="tabla-gris-claro">11:10</td>
								<td>Plástica</td>
								<td>Lab. de Ciencias Naturales</td>
								<td>Formación Ética y ciudadana</td>
								<td>Inglés</td>
								<td>Plástica</td>
							</tr>
							<tr>
								<td class="tabla-gris-claro">7°</td>
								<td class="tabla-gris-claro">11:50</td>
								<td>Plástica</td>
								<td>Lab. de Ciencias Naturales</td>
								<td>Formación Ética y ciudadana</td>
								<td>Inglés</td>
								<td>Plástica</td>
							</tr>			
						</table>
						<br/>
					<h3>3° Año</h3>
						<table class="horario">
							<tr class="head">
								<td>Hora</td>
								<td></td>
								<td>Lunes</td>
								<td>Martes</td>
								<td>Miércoles</td>
								<td>Jueves</td>
								<td>Viernes</td>
							</tr>
							<tr>
								<td class="tabla-gris-claro">1°</td>
								<td class="tabla-gris-claro">7:30</td>
								<td>Lengua y literatura</td>
								<td>Biología</td>
								<td>Matemática</td>
								<td>Biología</td>
								<td>Lengua y literatura</td>
							</tr>
							<tr>
								<td class="tabla-gris-claro">2°</td>
								<td class="tabla-gris-claro">7:30</td>
								<td>Lengua y literatura</td>
								<td>Biología</td>
								<td>Matemática</td>
								<td>Biología</td>
								<td>Lengua y literatura</td>
							</tr>
							<tr>
								<td class="tabla-gris-claro"></td>
								<td class="tabla-gris-claro">8:50</td>
								<td class="tabla-rojo"></td>
								<td class="tabla-rojo"></td>
								<td class="tabla-rojo">RECREO</td>
								<td class="tabla-rojo"></td>
								<td class="tabla-rojo"></td>
							</tr>
							<tr>
								<td class="tabla-gris-claro">3°</td>
								<td class="tabla-gris-claro">9:00</td>
								<td>Teatro</td>
								<td>Física</td>
								<td>Administración I</td>
								<td>Construcción de la ciudadanía</td>
								<td>Teatro</td>
							</tr>
							<tr>
								<td class="tabla-gris-claro">4°</td>
								<td class="tabla-gris-claro">9:00</td>
								<td>Teatro</td>
								<td>Física</td>
								<td>Administración I</td>
								<td>Construcción de la ciudadanía</td>
								<td>Teatro</td>
							</tr>
							<tr>
								<td class="tabla-gris-claro"></td>
								<td class="tabla-gris-claro">10:20</td>
								<td class="tabla-rojo"></td>
								<td class="tabla-rojo"></td>
								<td class="tabla-rojo">RECREO</td>
								<td class="tabla-rojo"></td>
								<td class="tabla-rojo"></td>
							</tr>
							<tr>
								<td class="tabla-gris-claro">5°</td>
								<td class="tabla-gris-claro">10:30</td>
								<td>Geografía</td>
								<td>Historia</td>
								<td>Geografía</td>
								<td>Matemática</td>
								<td>Historia</td>
							</tr>
							<tr>
								<td class="tabla-gris-claro">6°</td>
								<td class="tabla-gris-claro">10:30</td>
								<td>Geografía</td>
								<td>Historia</td>
								<td>Física</td>
								<td>Administración I</td>
								<td>Inglés</td>
							</tr>
							<tr>
								<td class="tabla-gris-claro">7°</td>
								<td class="tabla-gris-claro">10:30</td>
								<td>Inglés</td>
								<td>Matemática</td>
								<td>Física</td>
								<td>Administración I</td>
								<td>Inglés</td>
							</tr>		
						</table>
						<br/>
					<h3>4° Año</h3>
						<table class="horario">
							<tr class="head">
								<td>Hora</td>
								<td></td>
								<td>Lunes</td>
								<td>Martes</td>
								<td>Miércoles</td>
								<td>Jueves</td>
								<td>Viernes</td>
							</tr>
							<tr>
								<td class="tabla-gris-claro">1°</td>
								<td class="tabla-gris-claro">7:30</td>
								<td>Matemática</td>
								<td>Matemática</td>
								<td>Sistema de información contable</td>
								<td>Historia</td>
								<td>Geografía</td>
							</tr>
							<tr>
								<td class="tabla-gris-claro">2°</td>
								<td class="tabla-gris-claro">8:10</td>
								<td>Matemática</td>
								<td>Matemática</td>
								<td>Sistema de información contable</td>
								<td>Historia</td>
								<td>Geografía</td>
							</tr>
							<tr>
								<td class="tabla-gris-claro"></td>
								<td class="tabla-gris-claro">8:50</td>
								<td class="tabla-rojo"></td>
								<td class="tabla-rojo"></td>
								<td class="tabla-rojo">RECREO</td>
								<td class="tabla-rojo"></td>
								<td class="tabla-rojo"></td>
							</tr>
							<tr>
								<td class="tabla-gris-claro">3°</td>
								<td class="tabla-gris-claro">9:00</td>
								<td>Inglés</td>
								<td>Economía</td>
								<td>Administración</td>
								<td>Administración</td>
								<td>Historia</td>
							</tr>
							<tr>
								<td class="tabla-gris-claro">4°</td>
								<td class="tabla-gris-claro">9:40</td>
								<td>Inglés</td>
								<td>Economía</td>
								<td>Administración</td>
								<td>Administración</td>
								<td>Lengua y literatura</td>
							</tr>
							<tr>
								<td class="tabla-gris-claro"></td>
								<td class="tabla-gris-claro">10:20</td>
								<td class="tabla-rojo"></td>
								<td class="tabla-rojo"></td>
								<td class="tabla-rojo">RECREO</td>
								<td class="tabla-rojo"></td>
								<td class="tabla-rojo"></td>
							</tr>
							<tr>
								<td class="tabla-gris-claro">5°</td>
								<td class="tabla-gris-claro">10:30</td>
								<td>Química</td>
								<td>Economía</td>
								<td>Derecho</td>
								<td>Inglés</td>
								<td>Geografía</td>
							</tr>
							<tr>
								<td class="tabla-gris-claro">6°</td>
								<td class="tabla-gris-claro">11:10</td>
								<td>Química</td>
								<td>Sistema de información contable</td>
								<td>Derecho</td>
								<td>Lengua y literatura</td>
								<td>Química</td>
							</tr>
							<tr>
								<td class="tabla-gris-claro">7°</td>
								<td class="tabla-gris-claro">11:50</td>
								<td>Economía</td>
								<td>Sistema de información contable</td>
								<td>Derecho</td>
								<td>Lengua y literatura</td>
								<td>Química</td>
							</tr>			
						</table>
						<br/>
					<h3>5° Año</h3>
                    	<table class="horario">
							<tr class="head">
								<td>Hora</td>
								<td></td>
								<td>Lunes</td>
								<td>Martes</td>
								<td>Miércoles</td>
								<td>Jueves</td>
								<td>Viernes</td>
							</tr>
							<tr>
								<td class="tabla-gris-claro">1°</td>
								<td class="tabla-gris-claro">7:30</td>
								<td>Filosofía</td>
								<td>Economía</td>
								<td>Filosofía</td>
								<td>Matemática</td>
								<td>Construcción de la ciud. y part.</td>
							</tr>
							<tr>
								<td class="tabla-gris-claro">2°</td>
								<td class="tabla-gris-claro">8:10</td>
								<td>Filosofía</td>
								<td>Economía</td>
								<td>Filosofía</td>
								<td>Matemática</td>
								<td>Construcción de la ciud. y part.</td>
							</tr>
							<tr>
								<td class="tabla-gris-claro"></td>
								<td class="tabla-gris-claro">8:50</td>
								<td class="tabla-rojo"></td>
								<td class="tabla-rojo"></td>
								<td class="tabla-rojo">RECREO</td>
								<td class="tabla-rojo"></td>
								<td class="tabla-rojo"></td>
							</tr>
							<tr>
								<td class="tabla-gris-claro">3°</td>
								<td class="tabla-gris-claro">9:00</td>
								<td>Sistema de información contable</td>
								<td>Matemática</td>
								<td>Orientación en contextos laborales</td>
								<td>Economía</td>
								<td>Lengua y literatura</td>
							</tr>
							<tr>
								<td class="tabla-gris-claro">4°</td>
								<td class="tabla-gris-claro">9:40</td>
								<td>Sistema de información contable</td>
								<td>Orientación en contextos laborales</td>
								<td>Orientación en contextos laborales</td>
								<td>Economía</td>
								<td>Inglés</td>
							</tr>
							<tr>
								<td class="tabla-gris-claro"></td>
								<td class="tabla-gris-claro">10:20</td>
								<td class="tabla-rojo"></td>
								<td class="tabla-rojo"></td>
								<td class="tabla-rojo">RECREO</td>
								<td class="tabla-rojo"></td>
								<td class="tabla-rojo"></td>
							</tr>
							<tr>
								<td class="tabla-gris-claro">5°</td>
								<td class="tabla-gris-claro">10:30</td>
								<td>Sistema de información contable</td>
								<td>Orientación en contextos laborales</td>
								<td>Derecho</td>
								<td>Derecho</td>
								<td>Inglés</td>
							</tr>
							<tr>
								<td class="tabla-gris-claro">6°</td>
								<td class="tabla-gris-claro">11:10</td>
								<td>Inglés</td>
								<td>Administración</td>
								<td>Derecho</td>
								<td>Derecho</td>
								<td>Lengua y literatura</td>
							</tr>
							<tr>
								<td class="tabla-gris-claro">7°</td>
								<td class="tabla-gris-claro">11:50</td>
								<td>Matemática</td>
								<td>Administración</td>
								<td>Sistema de información contable</td>
								<td>Administración</td>
								<td>Lengua y literatura</td>
							</tr>			
						</table>
				</article>
			</div>
		</div>
		<footer>Juan Blas Tschopp - JBT Producciones (03404) 498261</footer>
	</body>
</html>