<?php 

	//print_r($_POST);
	if (!isset($_POST['oculto'])) {
		header("Location: calificacion.php");
	}

	include("conectar.php");
	$id2 = $_POST['id2'];
	$matricula2 = $_POST['txtmatri2'];
	$mate2 = $_POST['txtmate2'];
	$espa2 = $_POST['txtesp2'];
	$compu2 = $_POST['txtcompu2'];
	$estilo2 = $_POST['txtcss2'];
	$literat2 = $_POST['txtliter2'];

	$sentencia = $bd->prepare("UPDATE calificaciones SET 
		       Matricula = ?,Matematicas = ?,Español = ?,
		       Computacion = ?, EstiloCSS = ?,Literatura = ?WHERE id_asignatura = ?;");
	$resultado = $sentencia->execute([$matricula2,$mate2,$espa2,$compu2,$estilo2,$literat2,$id2]);

	if ($resultado === TRUE) {
		header("Location: calificacion.php");
	}else{
		echo "Error en el sistema, contacte a un administrador";
	}
 ?>

 <!----Proceso de actualizar en la base de datos UPDATE, PERTENEC A editarc.php--->
 <!----Realizado por Sánchez Marín José Refugio, Programación WEB II, UNADM----->