<?php 

	//print_r($_POST);
	//include("conectar.php");
    //$sentencia = $bd->query("SELECT * FROM usuario;");
    //$usuario = $sentencia->fetchAll(PDO::FETCH_OBJ);
    //print_r($usuario);

 ?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registro de alumno</title>
</head>
<body>
	<header>Registro de Usuario</header>
	<hr>
	<hr>

	<!--<center>
		<table>
			<tr>
				<td>Id_usuario</td>
				<td>Nombre_usuario</td>
				<td>Tipo_usuario</td>
				<td>Password</td>
			</tr>
			<?php 	
				/*foreach ($usuario as $dato)*/ {
					?>
					<tr>
						<td><?php echo $dato->ID_usuario; ?></td>
						<td><?php echo $dato->Nombre_usuario; ?></td>
						<td><?php echo $dato->Tipo_usuario; ?></td>
						<td><?php echo $dato->Password; ?></td>-->
					</tr>
					<?php
				}

			 ?>	
		</table>
	</center>
	
	<hr>
	<hr>
	<header class="he">Formulario de registro de alumno nuevo</header>
	<hr>
	<h2>Para continuar en tipo de usuario digite 1 (PROFESOR), 2 (ESTUDIANTE), según sea su caso</h2>

	<div>
		<form method="POST" action="ingresoest.php">
			<center>
				<table>
					<tr>
						<td>Nombre de usuario :</td>
						<td><input type="text" name="txtname"id="txtname" required></td>
					</tr>
					<tr>
						<td>Tipo de usuario :</td>
						<td><input type="text" name="txtipo" id="txtipo" required></td>
					</tr>
					<tr>
						<td>Password :</td>
						<td><input name ="contraseña" type="password" id="contraseña" required></td>
					</tr>
					<tr>	
						<td> Confirma contraseña :</td>
						<td><input name="confirma" type="password" id="confirma" required></td>
					</tr>
					<input type="hidden" name="oculto">
					<tr>
						<td><input  type="reset" name=""></td>
						<td><input name="submit" type="submit" value="Registrar alumno"></td>
					</tr>
				</table>
			</center>
		</form>
	</div>
</body>
</html>

<!-----Pertenece al formulario login.php dentro de esta base de datos----------->
<!-----Formulario de ingreso de un usuario dentro de la base de datos sanchez_usuarios------>
<!---Realizado por Sánchez Marín José Refugio, ES172003437, Programación WEB 2, UNADM, febrero 24,2022---->