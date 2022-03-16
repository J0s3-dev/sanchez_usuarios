<?php 	
	print_r($_POST);
	if (!isset($_POST['oculta'])) {
		header("Location: estudiante.php");
	}

	include("conectar.php");


	$Matricula = $_POST['txtmatr'];


	$sentencia = $bd->prepare("SELECT * FROM calificaciones WHERE Matricula = ?;");
	$resul = $sentencia->execute([$Matricula]);
	print_r($resul);

	if ($resul === TRUE) {
		header("Location: consultaEs.php");
	}else{
		echo "Error del sistema, pongase en contacto con un administrador";
	}
    


 ?>