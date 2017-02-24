<!DOCTYPE html>
<?php
session_start();
if (!isset($_SESSION['usuario'])){
	header("Location:index.html");
}
?>
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="img/apple-icon.png">
    <link rel="icon" type="image/png" href="img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>BIENVENIDO ADMINISTRADOS</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

    <!--     Fonts and icons     -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

    <!-- CSS Files -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/material-kit.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    
     <script>
            $(document).ready(function() {
                $('#example').DataTable();
            } );
        </script>
        
        <script>
            function confirmar()
                {
                    if(confirm('¿Estas seguro de borrar este registro?'))
                        return true;
                    else
                        return false;
                }
        </script>

</head>

<body class="signup-page">

    <h2>Administracion de usuario registrados</h2>
    <div class="well well-small">
    <hr class="soft"/>
    <h4>Tabla de Usuarios</h4>
    <div class="row-fluid">

    <?php
            echo "<table border='1'; class='table table-hover';>";
            echo "<tr class='warning'>";
            echo "<td>id_administrador</td>";
            echo "<td>contrasenaadministrador</td>";
            echo "<td>id_usuario</td>";
            echo "<td>Nombre</td>";
            echo "<td>Correo</td>";
            echo "<td>Telefono</td>";
            echo "<td>Usuario</td>";
            echo "<td>Contrasena</td>";
            echo "<td>Deporte</td>";
            echo "<td>Entrenador</td>";
            echo "<td>Editar</td>";
            echo "<td>Borrar</td>";
            echo "</tr>";

            include("conexion.php");
            $sql="SELECT * FROM `usuario`";
            $query=mysqli_query($conexion,$sql);
            

                while (!empty($arreglo=mysqli_fetch_array($query))){
                    echo "<tr>";
                    echo "<td>" . $arreglo['id_administrador'] . "</td>";
                    echo "<td>" . $arreglo['contrasenaadministrador'] . "</td>";
                    echo "<td>" . $arreglo['id_usurario'] . "</td>";
                    echo "<td>" . $arreglo['nombre'] . "</td>";
                    echo "<td>" . $arreglo['correo'] . "</td>";
                    echo "<td>" . $arreglo['telefono'] . "</td>";
                    echo "<td>" . $arreglo['usuario'] . "</td>";
                    echo "<td>" . $arreglo['contrasena'] . "</td>";
                    echo "<td>" . $arreglo['deporte'] . "</td>";
                    echo "<td>" . $arreglo['entrenador'] . "</td>";
                    echo "<td><a href='actualizaradmi.php?usuario=$arreglo[6]'>Actualizar</a></td>";
    				echo "<td><a href='administrador.php?id=$arreglo[2]&idborrar=2' onclick='return confirmar()'>Borrar</td>";
                    echo "</tr>";
                }

            extract($_GET);
    		if(@$idborrar==2){
                echo"ola k ase?";
    			$sqlborrar="DELETE FROM `usuario` WHERE `id_usurario`=$id";
    			$resborrar=mysqli_query($conexion,$sqlborrar);
    			echo '<script>alert("REGISTRO ELIMINADO")</script>';
    			echo "<script>location.href='administrador.php'</script>";

    		}
            
            echo "</table>";
    		
    ?>


	 <?php

    	/*while(!empty($arreglo=mysql_fetch_array($query))){
    		echo "<tr class='success'>";
    				echo "<td>$arreglo[0]</td>";
    				echo "<td>$arreglo[1]</td>";
    				echo "<td>$arreglo[2]</td>";
    				echo "<td>$arreglo[3]</td>";
    				echo "<td>$arreglo[4]</td>";
    				echo "<td>$arreglo[5]</td>";
    				echo "<td>$arreglo[6]</td>";
    				echo "<td>$arreglo[7]</td>";
    				echo "<td>$arreglo[8]</td>";
    				echo "<td>$arreglo[9]</td>";

    				echo "<td><a href='actualizar.php?id=$arreglo[0]'<img src='img/actualizar.png'</td>";
    				echo "<td><a href='administrador.php?id=$arreglo[0]&idborrar=2'><img src='img/eliminar.png'></td>";
    			echo "</tr>";
    	}

    	echo "</table>";

    		extract($_GET);
    		if(@$idborrar==2){

    			$sqlborrar="DELETE FROM usuario WHERE id=$id";
    			$resborrar=mysql_query($sqlborrar);
    			echo '<script>alert("REGISTRO ELIMINADO")</script>';
    			echo "<script>location.href='administrador.php'</script>";

    		}*/

    ?>


        <div class="copyright pull-left">
                 <a href="backup.php">Backup</a>  
        </div>
                            <div class="copyright pull-right">
                              <a href="logout.php" target="">
                            <i class="material-icons">https</i> Cerrar Sesion
                        </a>
                        </div>

                    <div class="copyright pull-right">
                        Creado por: Franibe Rodriguez
                    </div>
                </div>

        </div>

    </div>


</body>
<!--   Core JS Files   -->
<script src="js/jquery.min.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="js/material.min.js"></script>

<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="js/nouislider.min.js" type="text/javascript"></script>

<!--  Plugin for the Datepicker, full documentation here: http://www.eyecon.ro/bootstrap-datepicker/ -->
<script src="js/bootstrap-datepicker.js" type="text/javascript"></script>

<!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
<script src="js/material-kit.js" type="text/javascript"></script>

</html>