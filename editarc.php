<?php 	

		session_start();
	if (!isset($_SESSION['nombre'])) {
		header("Location: login.php");

	}elseif (isset($_SESSION['nombre'])){
	 $id = $_GET['id'];
	 include("conectar.php");
	 $sentencia = $bd->prepare("SELECT * FROM calificaciones WHERE id_asignatura = ?;");
	 $sentencia->execute([$id]);
	 $estudio = $sentencia->fetch(PDO::FETCH_OBJ);
	//print_r($estudio); 
	} 
	
	//print_r($_GET);
	if (!isset($_GET['id'])) {
		header("Location: calificacion.php");
	}
	




 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<link rel="stylesheet" type="text/css" href="estilos.css">
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>Formulario para editar un estudiante</title>
 </head>
 <body>
 	<!---Se empieza a trabajar en la construcción del formulario y de sus variables------>
 	<header>Bienvenido Profesor <?php echo $_SESSION['nombre'] ?></header>
 	<hr>
 	<hr>
 	<form method="POST" action="editarcProceso.php">
 		<center>
 			<table>
 				<tr>
 					<td>Ingrese la Matricula :</td>
 					<td><input name="txtmatri2" type="text"value="<?php echo $estudio->Matricula;?>"></td></td>
 				</tr>
 				<tr>
					<td>Ingres Calificación Matemáticas :</td>
					<td><input name="txtmate2" type="text"value="<?php echo $estudio->Matematicas;?>"></td></td>
				</tr>
				<tr>
					<td>Ingrese Calificación Español :</td>
					<td><input name="txtesp2" type="text"value="<?php echo $estudio->Español;?>"></td></td>
				</tr>
				<tr>
					<td>Ingrese Calificación Computación :</td>
					<td><input name="txtcompu2" type="text"value="<?php echo $estudio->Computacion;?>"></td></td>
				</tr>
				<tr>
					<td>Ingrese Calificación EstiloCSS :</td>
					<td><input name="txtcss2" type="text"value="<?php echo $estudio->EstiloCSS;?>"></td></td>
				</tr>
				<tr>
					<td>Ingrese Calificación Literatura :</td>
					<td><input name="txtliter2" type="text"value="<?php echo $estudio->Literatura;?>"></td></td>
				</tr>
				<input type="hidden" name="oculto">
				<input type="hidden" name="id2" value="<?php echo $estudio->id_asignatura;?>">
				<tr>
					<br>
					<td colspan="2"><input type="submit" value="Actualizar alumno"></td>
				</tr>
 			</table>
 		</center>
 	</form>
 
 </body>
 </html>

 <!-----Parte de CRUD de actualizar los campos de la tabla calificaciones.php, este sería el segundo paso---->
 <!-----Realizado por Sánchez Marín José Refugio, ES172003437, Programación WEB II, UNADM------->
