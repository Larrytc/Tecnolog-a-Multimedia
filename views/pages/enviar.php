<?php include ('../components/header.php'); ?>

<section id = "contenido"> 
	<!--HAbilitamos la funcion enviar email ..> -->
	<?php
		if(	isset($_POST['asunto']) && !empty($_POST['asunto'])&&
			isset($_POST['mensaje'])&& !empty($_POST['mensaje'])){
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


<?php include ('../components/footer.php'); ?>