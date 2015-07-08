<!doctype html>
<html lan ="en">

<head>
<meta charset="UTF-8">	
<meta description = "proyecto tecnologia multimedia"/>
	<title>Proyecto web</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<link rel="stylesheet" type="text/css" href="normalize.css">
	<style >
	body{background-color: #DEE2FF}


	</style>

</head>

<body>
	<header>
		<figure id = "logo">
			<img src="imagenes/logo.png">
		</figure>
		<h1>Perú Droid</h1>	
		<figure id = "avatar">
			<img src="imagenes/avatar.jpg">
		</figure>

	</header>	


<nav>
	<ul>
		<li><a href="index.html">Noticias</a></li>
		<li><a href="moviles.html">Móviles</a></li>
		<li><a href="aplicaciones.html">Aplicaciones</a></li>
		<li><a href="tutoriales.html">Tutoriales</a></li>
		<li><a href="juegos.html">Juegos</a></li>
		<li id="publicar_nav"><a href="contacto.html">Contáctanos</a></li>

	</ul>	

</nav>

<section id = "contenido"> 
			 <!--HAbilitamos la funcion enviar email ..> -->
			 <?php
			 	if(isset($_POST['asunto']) && !empty($_POST['asunto'])&&
			 	isset($_POST['mensaje'])&& !empty($_POST['mensaje']))
			 {
			 	$destino = "larrytenac@gmail.com";
			 	$desde = "From:"."Hecho por Larry Tena";
			 	$asunto = $_POST['asunto'];
			 	$mensaje = $_POST['mensaje'];

			 	mail($destino, $asunto, $mensaje, $desde);
			 	echo "Mensaje Enviado";

			 }else{
			 	echo "Problemas al enviar";
			 }
			 ?>
</section>



<footer>
	
	<strong>@2015 Creado por Larry Tena @larrytenac</strong>
</footer>	




</body>
</html>