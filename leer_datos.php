<?php
//Realizamos la conexion con la base de datos
$conexion = new msqli('localhost', 'root', '', 'tienda');

//Nos devuelve un codigo de error o si todo esta Ok regresa 0.

if($conexion->connect_errno){
	die('Lo siento hubo un problema con el servidor');
} else {
	$sql = "SELECT * FROM usuarios"; //Traemos los elementos de la base de datos
	$resultado = $conexion->query($sql);//La conexion se ejecuta

	if($resultado->num_rows){ //con este condicional comprobamos que hay datos en la BBDD
		while ($fila = $resultado->fetch_assoc()) {
			echo $fila['email'].'-'.$fila['nombre']
			// Podemos trabajar con los elementos de la tabla que están guardados en $fila['valor que tengamos en la BBDD']
			
		}
	} 
}