<?php
include("conexion.php");

//se obtienen valores del formulario
$nombre = mysqli_real_escape_string($conexion, $_POST["nombre"]);
$correo = mysqli_real_escape_string($conexion, $_POST["correo"]);
$telefono = mysqli_real_escape_string($conexion, $_POST["telefono"]);
$usuario = mysqli_real_escape_string($conexion, $_POST["usuario"]);
$contrasena = mysqli_real_escape_string($conexion, $_POST["contrasena"]);
$deporte = mysqli_real_escape_string($conexion, $_POST["deporte"]);
$entrenador = mysqli_real_escape_string($conexion, $_POST["entrenador"]);

//se insertan los valores del formulario e la base de datos
$sql = "INSERT INTO `usuario` (`nombre`, `correo`, `telefono`, `usuario`, `contrasena`, `deporte`, `entrenador`)
VALUES ('$nombre', '$correo', '$telefono', '$usuario', '$contrasena', '$deporte', '$entrenador')";

if (!mysqli_query($conexion, $sql)){
	die('Error: ' . mysqli_error($conexion));
}else{
	echo "registro guardado exitosamente";
    header("Location:login.html");
}
?>