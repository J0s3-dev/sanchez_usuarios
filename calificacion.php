<?php 	
	
	session_start();
	if (!isset($_SESSION['nombre'])) {
        header("Location: login.php");
    }elseif (isset($_SESSION['nombre'])) {
        include("conectar.php");
	    $sentencia = $bd->query("SELECT * FROM calificaciones");
	    $calificacion = $sentencia->fetchAll(PDO::FETCH_OBJ);
    }else{
    	echo "Error del sistema";
    }

 ?>


<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="estilos.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Calificaiones</title>
</head>
<body>
	<div>
		<nav class="menu">
			<ul>
				<li><a href="profesor.php">Inicio</a></li>
				<li><a href="">Registro de calificaciones</a></li>

			</ul>
		</nav>
	</div>
	<header>Bienvenido al sistema de registro de calificaciones</header>
	<hr>
	<hr>
	<center>
		<table>
			<tr>
				<td>Matricula</td>
				<td>Matemáticas</td>
				<td>Español</td>
				<td>Computación</td>
				<td>LenguajeProg</td>
				<td>EstiloCSS</td>
				<td>Literatura</td>
				<td>Editar</td>
				<td>Eliminar</td>
			</tr>
			<?php 
					foreach ($calificacion as $datos) {
						?>
							<tr>
								<td><?php echo $datos->id_asignatura; ?></td>
								<td><?php echo $datos->Matricula; ?></td>
								<td><?php echo $datos->Matematicas; ?></td>
								<td><?php echo $datos->Español; ?></td>
								<td><?php echo $datos->Computacion; ?></td>
								<td><?php echo $datos->EstiloCSS; ?></td>
								<td><?php echo $datos->Literatura; ?></td>
								<td><a href="editarc.php?id=<?php echo $datos->id_asignatura; ?>">Editar</td>
								<td><a href="eliminarc.php?id=<?php echo $datos->id_asignatura; ?>">Eliminar</td>
							</tr>

						<?php
					}

			 ?>

		</table>
	</center>

	<hr>
	<hr>
	<header>Formato de ingreso de calificación de alumno</header>
	<hr>
	<hr>
	<form method="POST" action="captura.php">
		<center>
			<table>
				<tr>
					<td>Ingrese la Matricula :</td>
					<td><input name="txtmatri" type="text" id="txtmatri" value required maxlength="15"></td>
				</tr>
				<tr>
					<td>Calificación Matemáticas :</td>
					<td><input name="txtmate" type="text" id="txtmate" value required maxlength="15"></td>
				</tr>
				<tr>
					<td>Calificación Español :</td>
					<td><input name="txtesp" type="text" id="txtesp" value required maxlength="15"></td>
				</tr>
				<tr>
					<td>Calificación Computación :</td>
					<td><input name="txtcompu" type="text" id="txtcompu" value required maxlength="15"></td>
				</tr>
				<tr>
					<td>Calificación EstiloCSS :</td>
					<td><input name="txtcss" type="text" id="txtcss" value required maxlength="15"></td>
				</tr>
				<tr>
					<td>Calificación Literatura :</td>
					<td><input name="txtliter" type="text" id="txtliter" value required maxlength="15"></td>
				</tr>
				<input type="hidden" name="oculto">
				<tr>
					<td><input type="reset" name=""></td>
					<td><input type="submit" value="Ingresar"></td>
				</tr>
			</table>
		</center>
	</form>

</body>
</html>
<!----Creado por Sánchez Marín José Refugio, ES172003437, Programación WEB2, UNADM--->
<!---Inicio calificaciones ligado a profesor.php ------->