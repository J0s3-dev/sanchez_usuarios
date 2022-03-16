<?php 


	//$user = "id18369860_root";
	//$pass = "@UlKtfi&$7nTg\8Q";
	//$database = "id18369860_sanchez_usuario";
	
	$user = "root";
	$pass = "";
	$database = "sanchez_usuario";

	try {
		
        $bd = new PDO(
        	"mysql:host=localhost;
        	dbname=".$database,$user,$pass
        );

	} catch (Exception $e) {
		echo $e->getMessage();
	}
   
?>
/*Creado por José Refugio Sánchez Marín, ES172003437, Actividad 2 Formularios PHP, Programación web II, Universidad Abierta y Distancia México*/