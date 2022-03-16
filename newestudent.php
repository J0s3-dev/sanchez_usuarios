<?php 	



	session_start();
	if (!isset($_SESSION['nombre'])) {
		header("Location: login.php");
	}elseif (isset($_SESSION['nombre'])) {
		include("conectar.php");
      //include("conectar.php");
     //$sentencia = $bd->query("SELECT * FROM estudiante");
     //$estudiantes = $sentencia->fetch(PDO::FETCH_OBJ);
		
	}

 ?>


<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="estilos.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>New Student in my datbase</title>
</head>
<body>

	<div>
		<nav class="menu">
			<ul>
				<li><a href="profesor.php">Inicio</a></li>
				<li><a href="newestudent.php">Registrarse</a></li>
				<li><a href="login.php">Iniciar sesión</a></li>
			</ul>
		</nav>
	</div>
	<hr>
	<hr>
	<header>Registro de estudiante</header>
	<hr>
	<hr>
	<!--T<center>
		<table>
			<tr>
				<td>Matricula Estudiante</td>
				<td>Nombre Estudiante</td>
				<td>Apellido Paterno</td>
				<td>Apellido Materno</td>
				<td>Sexo</td>
				<td>Domicilio</td>
				<td>Telefono</td>
				<td>Correo electronico</td>
				<td>Contraseña</td>
			</tr>-->

			<?php 
				/*foreach ($estudiantes as $info)*/ {
					?>
							<!---<td><?php echo $info->matric_alumno; ?></td>
					         <td><?php echo $info->Nombre_s; ?></td>
					        <td><?php echo $info->Ape_Pater; ?></td>
					          <td><?php echo $info->Ape_Mater; ?></td>
					        <td><?php echo $info->Sexo; ?></td>
					         <td><?php echo $info->Domicilio; ?></td>
					         <td><?php echo $info->Telefono; ?></td>
					         <td><?php echo $info->Email; ?></td>
					         <td><?php echo $info->Contraseña; ?></td>-->

				 <?php
					}
				?>
		</table>
		</center>
		<!----inicia sentencia insert into dentro del formulario o almacenamiento de los datos--->
          <h1>Registro de Estudiante Bienvenidos</h1>
          <hr>
          <hr>
          <form class="formulario2" method="POST" action="guardarstudent.php">
          	 <center>
          	 	<table>
          	 		<tr>
          	 			<td>Digite su Matricula :</td>
          	 			<td><input name="textmatric" type="tetx" id="textmatric" value required maxlength="18" required></td>
          	 		</tr>
          	 		<tr>
          	 			<td>Digite su Nombre :</td>
          	 			<td><input name="textname" type="tetx" id="textname" value required maxlength="20" required></td>
          	 		</tr>
          	 		<tr>
          	 			<td>Apellido Paterno :</td>
          	 			<td><input name="textpatern" type="tetx" id="textpatern" value required maxlength="20" required></td>
          	 		</tr>
          	 		<tr>
          	 			<td>Apellido Materno :</td>
          	 			<td><input name="textmatern" type="tetx" id="textmatern" value required maxlength="20" required></td>
          	 		</tr>
          	 		<tr>
          	 			<td>Sexo :</td>
          	 			<td><input name="sexo" type="radio" id="sexo1" value="F" required>Femenino</td>
          	 			<td><input name="sexo" type="radio" id="sexo2" value="M" required>Masculino</td>
          	 		</tr>
          	 		<tr>
          	 			<td>Digite su Domicilio :</td>
          	 			<td><input name="textdir" type="tetx" id="textdir" value required maxlength="50" required></td>
          	 		</tr>
          	 		<tr>
          	 			<td>Digite su Teléfono :</td>
          	 			<td><input name="texttel" type="tetx" id="texttel" value required maxlength="12" required></td>
          	 		</tr>
          	 		<tr>
          	 			<td>Digite su Correo :</td>
          	 			<td><input name="textmail" type="email" id="textmail" value required placeholder="example:serr@user.com"></td>
          	 		</tr>
          	 		<tr>
          	 			<td>Digite su Contraseña :</td>
          	 			<td><input name="txtpass" type="password" id="txtpass" value required></td>
          	 		</tr>
          	 		<tr>
          	 			<td>Confirme su Contraseña :</td>
          	 			<td><input name="confirma" type="password" id="confirma" value required ></td>
          	 		</tr>
          	 		<input type="hidden" name="oculto">
          	 		<tr>
          	 			<td><input type="reset" ></td>
          	 			<td><input type="submit" value="Registrarse"></td>
          	 		</tr>
          	 	</table>
          	 </center>
          </form>

		<!----final de sentencia insert into dentro del formulario---->
	
</body>
</html>