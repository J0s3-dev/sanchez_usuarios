<?php 	

//print_r($_POST);

if (!isset($_POST['oculto'])) {
	exit();
}

 include("conectar.php");
 $matricula = $_POST['textmatric'];
 $nombre = $_POST['textname'];
 $paterno = $_POST['textpatern'];
 $materno = $_POST['textmatern'];
 $sex = $_POST['sexo'];
 $addres = $_POST['textdir'];
 $call = $_POST['texttel'];
 $mail = $_POST['textmail'];
 $pass = $_POST['txtpass'];

 $sentencia = $bd->prepare("INSERT INTO estudiante(matric_alumno,Nombre_s,Ape_Pater,Ape_Mater,Sexo,
                 Domicilio,Telefono,Email,Contraseña) VALUES (?,?,?,?,?,?,?,?,?);");
 $resultado = $sentencia->execute([$matricula,$nombre,$paterno,$materno,$sex,$addres,$call,$mail,$pass]);
 
  if ($resultado === TRUE) {
  	header("Location: newestudent.php");
  }else{
  	echo "Error de sistema";
  }

 ?>