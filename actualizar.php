<?php

extract($_GET);
include("conexion.php");

    $sql="SELECT * FROM login WHERE id=$id";
    $resql=mysql_query($sql);
    while ($rom=mysql_feth_row ($resql)){
    	$id_administrador=$row[0];
    	$contrasenaadministrador=$row[1];
    	$id_usuario=$row[2];
    	$nombre=$row[3];
    	$correo=$row[4];
    	$telefono=$row[5];
    	$usuario=$row[6];
    	$contrasena=$row[7];
    	$deporte=$row[8];
    	$entrenador=$row[9];
    }

    ?>

    <form action="ejecutactualizar.php" method="post">
    	id_administrador<br><input type="text" name="id_administrador" echo $id_administrador?> readonly="readonly"<br>
    	contrasenaadministrador<br><input type="text" name="contrasenaadministrador" echo $contrasenaadministrador?> readonly="readonly"<br>
		Id<br><input type="text" name="id" value= "<?php echo $id ?>" readonly="readonly"><br>
		nombre<br> <input type="text" name="nombre" value="<?php echo $nombre?>"><br>
		correo<br> <input type="text" name="correo" value="<?php echo $correo?>"><br>
		telefono<br> <input type="text" name="telfono" value="<?php echo $telefono?>"><br>
		contrasena<br> <input type="text" name="contrasena" value="<?php echo $contrasena?>"><br>
		deporte<br> <input type="text" name="deporte" value="<?php echo $deporte?>"><br>
		entrenador<br> <input type="text" name="entrenador" value="<?php echo $entrenador?>"><br>		
				<br>
				<input type="submit" value="Guardar" class="btn btn-simple btn-primary btn-lg">
			</form>

				  
		
		
		<div class="span8">
		
		</div>	
		</div>	