  <?php

    include("conexion.php");

        if(isset($_POST['usuario'])){
         $usuario =$_POST["usuario"];
        }else{
            $usuario="";
        }

        if(isset($_POST['contrasena'])){
         $pass =$_POST['contrasena'];
        }else{
            $pass="";
        }   
    
    $sql= "SELECT * FROM `usuario` WHERE `usuario` = '$usuario'";
    $result = mysqli_query($conexion, $sql);
    $row = mysqli_fetch_array($result);
    $comp=$row[7];
    $comp2=$row[0];

    if ($comp == $pass){
        session_start();
        $_SESSION["usuario"]= $_POST["usuario"];
        $_SESSION["admin"]=$comp2;
        if($comp2==null){
            header('Location: atleta.html');
        }else{
            header('Location: administrador.php');
        }   
        
    }else{
        header('Location:login.html');
    }
?>