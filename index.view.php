<!DOCTYPE html>
<html lang="es">
<meta  charset="utf-8"/>
<head>
  
<!-- para enlazar con la hoja de estilo creada ponemos el link donde se encuentra -->

<link rel="stylesheet" type="text/css" href="css\estiloRegistro.css">

<!-- Nombre que aparece en la pestaña -->

<title>Registro</title><br>


</head>

<!-- creamos el formulario de registro -->
<body>

     <form name="formulario" method="POST" action="registro.php"><!-- Usamos el método post para recoger lo que seleccione el usuario en unas variables -->

<section class="form-register">
  <h4>Registro Cliente</h4>
  <!--El nombre es un texto y el placeholder es lo que ve el usuario-->
  <input class= "container" type = "text" name= "nombre" id= "nombre" placeholder="NOMBRE">
   <!-- El apellido es un texto -->
  <input class= "container" type = "text" name= "apellido1" id= "apellido1" placeholder="PRIMER APELLIDO">
   <!-- El segundo apellido es un texto --> 
  <input class= "container" type = "text" name= "apellido2" id= "apellido2" placeholder="SEGUNDO APELLIDO">
   <!-- El email de contacto es tipo email -->
  <input class= "container"type = "email" name= "correo" id= "correo" placeholder="USUARIO">
   <!-- La contraseña es un tipo password-->
  <input class= "container"type = "password" name= "password" id= "password" placeholder="CLAVE">
  <p>Estoy de acuerdo con <a href="#">Terminos y Condiciones</a></p>
  <button class= "botons" type="submit">ENVIAR</button> 
<p><a href="#">¿Ya tengo Cuenta?</a></p>   
</section>
</form>

</body>

