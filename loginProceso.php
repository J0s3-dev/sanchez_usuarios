<?php 	
session_start();

include("conectar.php");
 $usuario = $_POST['txtuser'];
 $pass = $_POST['txtcontraseña'];
 $sentencia = $bd->prepare("SELECT * FROM usuario WHERE Nombre_usuario = ? and Password = ?;");
 $sentencia->execute([$usuario,$pass]);
 $datos = $sentencia->fetch(PDO::FETCH_OBJ);
 //print_r($datos);



    if ($datos === FALSE) {
      header("Location: login.php");
    }elseif ($sentencia->rowCount() == 1) {
      $_SESSION['nombre'] = $datos->Nombre_usuario;
      header("Location: profesor.php");
    }

    /*Creado por José Refugio Sánchez Marín, ES172003437, Actividad 2 Formularios PHP, Programación web II, Universidad Abierta y Distancia México*/
  
 ?>
