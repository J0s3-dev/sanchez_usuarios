<?php 	
//print_r($_POST);

if (!isset($_POST['oculto'])) {
	exit();
}
include("conectar.php");

$nombre = $_POST['txtname'];
$tipo = $_POST['txtipo'];
$contraseña = $_POST['contraseña'];

$sentencia = $bd->prepare("INSERT INTO usuario(Nombre_usuario,Tipo_usuario,Password) VALUES 
	                      (?,?,?);");
$resultado = $sentencia->execute([$nombre,$tipo,$contraseña]);

if ($resultado === TRUE) {
	header("Location: login.php");
}else{
	echo "Error en el ingreso";
}


 ?>

 <!----Funcionamiento del INSERT INTO dentro de la base de datos sanchez_usuario--->
 <!----Este pertenece al formulario registroest.php---->
 <!---Realizado por Sánchez Marín José Refugio, ES172003437, Programación WEB 2, UNADM, febrero 24,2022---->