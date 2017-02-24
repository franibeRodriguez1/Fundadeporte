<?php

$conexion = mysqli_connect("localhost", "root", "miladys18", "fundadeporte");

if (mysqli_connect_errno()){
	echo "no se pudo conectar a la base de datos" . mysqli_connect_errno();
}else{
	echo "conectado";
}

?>