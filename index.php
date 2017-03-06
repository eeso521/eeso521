<!doctype html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<meta name="description" content="La Escuela de Enseñanza Secundaria Orientada N° 521 es la única
		escuela secundaria de la localidad de López, en la provincia de Santa Fé">
		<meta name="keywords" content=" escuela, escuela secundaria, secundaria, escuela secundaria orientada,
		eeso, EESO N° 521, 521, escuela 521, escuela santa fe, santa fe, lopez, escuela de lopez, lopez santa fe">
		<title>EESO N°521 - López</title>
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
			<section class="main">
				<section class="articles">
					<a href="2016-12-Cortos-Violencia.php"><article>
						<h2>4° Año: Cortos sobre violencia</h2>
						<p>
							Estos trabajos son el resultado de los conceptos trabajados en el tercer trimestre en la asignatura de Lengua y Literatura por los alumnos de 4° año cuyo tema principal fue violencia de género.
						</p>
					</article></a>
					<a href="2016-06-Jovenes-derechos.php"><article>
						<h2>2° Año: Los jóvenes, sujetos de derecho</h2>
						<p>
							Estamos trabajando el tema "Los jóvenes somos sujetos de derecho", con este vídeo queremos dejar a todos los jóvenes algunos de sus derechos, para que conozcan y los hagan valer.
						</p>
					</article></a>
					<a href="2016-05-jornada-saludable.php"><article>
						<h2>Jornada Saludable</h2>
						<p>
							Se realizó el día 5 de Mayo en el establecimiento, los alumnos participaron de actividades y charlas relacionadas con la salud.
						</p>
					</article></a>
					<a href="2016-05-seg-vial.php"><article>
						<h2>Charla sobre seguridad vial</h2>
						<p>
							Empleados de "La Segunda" realizaron esta charla a través de la Coop. Agropecuaria de Lopez Ltda. para toda la escuela secundaria.
						</p>
					</article></a>
					<a href="2016-04-Campana-dengue.php"><article>
						<h2>Campaña de concientización contra el dengue</h2>
						<p>
							Campaña realizada por alumnos de 3° año
						</p>
					</article></a>
					<a href="2016-04-Cooperadora.php"><article>
						<h2>Asamblea general ordinaria de la Asociación Cooperadora</h2>
						<p>Señores socios:
						La Comisión Directiva de la Asociación Cooperadora Escuela de Enseñanza Media Nº 521, convoca a los señores asociados a la Asamblea general ordinaria que se llevará a cabo el día Martes 31 de Mayo de 2016, a las 20:30 horas</p>
					</article></a>
					<a href="2016-03-Horarios-2016.php"><article>
						<h2>Horarios por curso</h2>
						<p>
							Publicamos los horarios de cada año separados por curso, puede verlos haciendo clic aquí
						</p>
					</article></a>
						<article>
						<h2>Inauguración del sitio web</h2>
						<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc id pellentesque risus. In viverra ligula et lectus luctus, lobortis euismod risus gravida. Donec neque dui, imperdiet sit amet dolor eget, venenatis viverra sem. Sed ac fermentum dui. Praesent efficitur luctus lorem vitae imperdiet. Praesent ornare ex vel ligula sodales efficitur.
						</p>
					</article>
					<a href="2015-10-EleccionesNac.php"><article>
						<h2>Instructivo elecciones nacionales 2015</h2>
						<p>
							Video realizado y editado por alumnos de 2° Año
						</p>
					</article></a>
				</section>


				<section class="asides">
                	<aside>
                    	<h2><a href="http://t.eeso521.tk/Exámenes.php">Horarios de exámenes previos</a></h2>
                    </aside>
					<aside>
						<h2><a href="2016-03-Horarios-2016.php">Horarios 2016</a></h2>
					</aside>
					<aside>
						<blockquote>"Queremos darle bienvenida a nuestro nuevo sitio web, desarrollado por alumnos para comunicar
							a la comunidad, autoridades, e incluso a los mismos alumnos de las actividades que se realizan en el
							establecimiento escolar"
						</blockquote><br>
						<cite><strong>Alejandra Giovannini,</strong> Directora de la escuela</cite>
					</aside>
					<aside class="map">
					<iframe class="mapa" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://www.openstreetmap.org/export/embed.html?bbox=-61.278101205825806%2C-31.905115659203005%2C-61.2744802236557%2C-31.903476209674064&amp;layer=mapnik&amp;marker=-31.904295938089067%2C-61.27629071474075" style="border: 1px solid black"></iframe>
					</aside>
					<aside>
						<p class="fb">Síguenos también en Facebook!<br>
						<div class="fb-like" data-href="https://web.facebook.com/eeso521" data-width="60" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>
					</aside>
				</section>
			</section>
			<br>
			<script src="javascript/index.js"></script>
		</div>
		<footer>Juan Blas Tschopp - JBT Producciones (03404) 498261</footer>
	</body>
</html>