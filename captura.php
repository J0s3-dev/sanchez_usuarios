<?php 

    print_r($_POST);
	if (!isset($_POST['oculto'])) {
		close();
	}

	include("conectar.php");
	$matricula = $_POST['txtmatri'];
	$matem = $_POST['txtmate'];
	$espanol = $_POST['txtesp'];
	$comput = $_POST['txtcompu'];
	$estilo = $_POST['txtcss'];
	$liter = $_POST['txtliter'];

	$sentencia = $bd->prepare("INSERT INTO calificaciones(Matricula,Matematicas,Español,Computacion,EstiloCSS,Literatura) 
		                                         VALUES (?,?,?,?,?,?);");
	$resultado = $sentencia->execute([$matricula,$matem,$espanol,$comput,$estilo,$liter]);
	print_r($resultado);

	if ($resultado === TRUE) {
		header("Location: calificacion.php");
	}else{
		echo "Error";
	}
 ?>

 <!----Creado por Sánchez Marín José Refugio, ES172003437, Programación WEB2, UNADM--->
<!---Funcionamiento de la página de registro de calificaciones.php ------->