<?php 

 	include("conectar.php");
 	$sentencia = $bd->prepare("SELECT * FROM calificaciones");
 	$resultado= $sentencia->fetchAll(PDO::FETCH_OBJ);
 	//print_r($resultado);
 ?>

 <!----creamos las tablas del formulario para que se reflejen las calificaciones del estudiante--->

 <!DOCTYPE html>
 <html>
 <head>
 	<link rel="stylesheet" type="text/css" href="estilos.css">
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>Consultar calificaciones</title>
 </head>
 <body>
 		<nav class="menu">
 			<ul>
 				<li><a href="estudiante.php">Regresar inicio</a></li>
 				<li><a href="cerrar.php">Cerrar sesion</a></li>
 			</ul>
 		</nav>

 	<header>Bienvenido al sistema de consulta de estudiantes</header>
 	<br>
 	<hr>
 	<hr>
 	<form method="POST" action="">
 		<center>
 			<table>
 				<tr>
 					<td>Codigo</td>
 					<td>Matricula</td>
 					<td>Matemáticas</td>
 					<td>Español</td>
 					<td>Computación</td>
 					<td>EstilosCSS</td>
 					<td>Literatura</td>
 				</tr>
 				<?php 

 					foreach ($resultado as $datos) {
 						?>
 							<td><?php echo $datos->id_asignatura; ?></td>
 					        <td><?php echo $datos->Matricula; ?></td>
 					        <td><?php echo $datos->Matematicas; ?></td>
 					        <td><?php echo $datos->Español; ?></td>
 					        <td><?php echo $datos->Computación ; ?></td>
 					        <td><?php echo $datos->EstiloCSS; ?></td>
 					        <td><?php echo $datos->Literatura; ?></td>
 						<?php
 					}
 				 ?>
 			</table>
 		</center>
 	</form>
 	<hr>
 	<hr>
 	<form method="POST" action="cons.php">
 	  <center>
 		     <table>	
 			      <tr>
 			 	     <td>Ingrese su matricula :</td>
 			 	     <td><input name="txtmatr" type="text" id="txtmatr" value required></td>
 		         </tr>
 		         <input type="hidden" name="oculta">
 		         <tr>
 		         	<td><input type="submit" value="Consultar"></td>
 		         </tr>
 	        </table>
 	  </center>
    </form>
 </body>
 </html>