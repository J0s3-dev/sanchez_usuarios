<?php 

	session_start();
	if (!isset($_SESSION['nombre'])) {
		header("Location: login.php");
	}elseif (isset($_SESSION['nombre'])) {
		//include("conectar.php");


	}

 ?>



<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="estilos.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Logeo de Profesor</title>
</head>
<body>
	<div>
		<nav class="menu">
			<ul>
				<li><a href="profesor.php">Inicio Sesión</a></li>
				<li><a href="calificacion.php">Registrar Calificación</a></li>
				<li><a href="login.php"></a>Inicia</li>
			</ul>
		</nav>
	</div>

	<header>Colegio Sánchez Marín </header>
	<h1>Binvenido : <?php echo $_SESSION['nombre'] ?></h1>
	<h1>Has iniciado como Profesor</h1>

	<hr>
	<a href="cerrar.php">Cerrar sesión</a>
    <hr>
    



</body>
</html>
<!----Creado por Sánchez Marín José Refugio, ES172003437, Programación WEB2, UNADM--->
<!---Inicio de sesión de profesor.php logeado ------->