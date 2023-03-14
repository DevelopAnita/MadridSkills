<?php

$servername = 'localhost';
$database = 'tienda';
$username = 'root';
$password = '';
//Hacemos una instancia de mysquli y la guardamos en una variable $conexion

$conexion = new mysqli($servername, $username, $password, $database);
//Ponemos 4 parámetros: nos conectamos a localhost, el usuario es root, la contraseña en blanco, la base de datos se llama deporte_adaptado.

// Chequeamos la connexion
if ($conexion->connect_errno){
    die('Lo siento hubo un problema con el servidor');

} 
else{
echo "Bienvenido a TIENDA";

}

?>