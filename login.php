<?php 

	session_start();
	if (isset($_SESSION['nombre'])) {
		header("Location: profesor.php");
	}


 ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="estilos.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login de registro</title>
</head>
<body>
	<div>
	<nav class="menu">
		<ul type="circle">
			<li><a href="profesor.php">Inicio</a></li>
			<li><a href="newestudent.php">Registrase</a></li>	
			<li><a href="login.php">Iniciar sesión</a></li>
		</ul>
	</nav>
   </div>
   <hr>
    <hr>
    <hr>
    <hr>
	<header>Colegio Sánchez Marín</header>

	<hr>
	<hr>
	
    <div class="contenedor">
      <form class="formulario" method="POST" action="loginProceso.php">
    	   <center>
    	   	<table>
    	   		<tr>
    	   			<td>Usuario :</td>
    	   			<td><input name="txtuser"  type="text" id="txtuser" value required maxlength="20" required></td>
    	   		</tr>
    	   		<tr>
    	   			<td>Password :</td>
    	   			<td><input name="txtcontraseña" type="password" id="txtcontraseña" value required pattern="{1,12}" required></td>
    	   		</tr>
    	   		<tr>
    	   			<td><input type="submit" value="Iniciar sesión"></td>
    	   		</tr>
    	   		<tr>
    	   			<td><a href="#">No recuerda su password</a></td>
    	   		</tr>
    	   		<tr>
    	   			<td><a href="registroest.php">No esta registrado de click aqui</a></td>
    	   		</tr>
    	   	</table>
    	   </center>
     </form>
   </div>	
</body>
</html>


<!----Creado por Sánchez Marín José Refugio, ES172003437, Programación WEB2, UNADM--->
<!---Inicio de sesion de roles ------->
