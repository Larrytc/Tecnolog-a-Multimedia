<?php include ('../components/header.php'); ?>

<section id = "contenido"> 
	<article class="item1">
		<form action="enviar.php" method="post">
			<input class="item1_cuadro1" type="text" placeholder="Email" name="asunto"><br><br>
			<textarea class="item1_cuadro1" placeholder="escriba su mensaje" name="mensaje"></textarea><br><br>
			<button class="item_button" type="submit" value="enviar">Contáctame</button>
	</article>
</section>

<?php include ('../components/footer.php'); ?>