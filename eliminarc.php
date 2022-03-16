<?php 

	print_r($_GET);	
	if (!isset($_GET['id'])) {
		header("Location: calificacion.php");
	}

	include("conectar.php");
	$codigo = $_GET['id'];
	$sentencia = $bd->prepare("DELETE FROM calificaciones WHERE id_asignatura = ?;");
	$resultado = $sentencia->execute([$codigo]);
	//print_r($resultado);

	if ($resultado === TRUE) {
		header("Location: calificacion.php");
	}else{
		echo "Error en el sistema, comuniquese con un administrador";
	}


 ?>


 <!----Funcionamiento de el comando DELETE dentro de la base de datos, pertenece a calificaciones.php---->
  <!-----Realizado por Sánchez Marín José Refugio, ES172003437, Programación WEB II, UNADM------->