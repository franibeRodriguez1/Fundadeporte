<?php 

    include("conexion.php");

    extract($_GET);
    $usuario2=@$usuario;  

        $sql= "SELECT * FROM `usuario` WHERE `usuario` = '$usuario2'";
        $revisar= mysqli_query($conexion, $sql);
        $row = mysqli_fetch_array($revisar);
    
        if(isset($_POST['nombre'])){
         $nombre =$_POST["nombre"];
            if($nombre==null){
                $nombre=$row[3];
            }
        }else{
            $nombre=$row[3];
        }
        if(isset($_POST['correo'])){
         $correo =$_POST['correo'];
            if($correo==null){
                $correo=$row[4];
            }
        }else{
            $correo=$row[4];
        } 

        if(isset($_POST['telefono'])){
         $telefono =$_POST["telefono"];
            if($telefono==null){
                $telefono=$row[5];
            }
        }else{
            $telefono=$row[5];
        }

        if(isset($_POST['contrasena'])){
         $contrasena =$_POST['contrasena'];
            if($contrasena==null){
                $contrasena=$row[7];
            }
        }else{
            $contrasena=$row[7];
        }

        if(isset($_POST['deporte'])){
         $deporte =$_POST['deporte'];
            if($deporte==null){
                $deporte=$row[8];
            }
        }else{
            $deporte=$row[8];
        } 
        
        if(isset($_POST['entrenador'])){
         $entrenador =$_POST['entrenador'];
            if($entrenador==null){
                $entrenador=$row[9];
            }
        }else{
            $entrenador=$row[9];
        } 
        
        $registro ="UPDATE `usuario` SET `nombre`= '$nombre', `correo`='$correo', `telefono`='$telefono', `usuario`='$usuario2', `contrasena`='$contrasena', `deporte`='$deporte', `entrenador`='$entrenador' WHERE `usuario`.`usuario`= '$usuario2'";


        $query = mysqli_query($conexion, $registro) or die('Error:'.mysqli_error($conexion));
            
        if($query){
            echo '<div class="registrado"><h2> La actualizacion se ha realizado con exito. </h2></div>';
        }
            
        header( "refresh:3; url=administrador.php" );
        

?>