<?php

require 'abrir_conexion.php';

$servername = 'localhost';
$database = 'tienda';
$username = 'root';
$password = '';
//Hacemos una instancia de mysquli y la guardamos en una variable $conexion

$conexion = new mysqli('localhost', 'root', '', 'tienda');

//Ponemos 4 parámetros: nos conectamos a localhost, el usuario es root, la contraseña en blanco, la base de datos se llama deporte_adaptado.

$nombre=$_POST['nombre'];
$apellido1=$_POST['apellido1'];
$apellido2=$_POST['apellido2'];
$email=$_POST['correo'];
$contrasena= md5($_POST['password']);

	$sql1 = "INSERT INTO usuarios(nombre,apellido1,apellido2,email,contrasena) VALUES('$nombre','$apellido1','$apellido2','$email','$contrasena')";
	
	$conexion->query($sql1);
	if($conexion->affected_rows >= 1){
		//echo 'Filas agregadas: ' . $conexion->affected_rows;
		echo "<script>alert('Usuario registrado con éxito')</script>" .$conexion -> affected_rows;
	} else {
		echo "<script>alert('Ha habido un error de registro')</script>"
	} else {
		echo "<script>alert('El correo ya existe')</script>"
	} else {
		echo "<script>alert('La contraseña introducida no es válida')</script>"
	}

?>