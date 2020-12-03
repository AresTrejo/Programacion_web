
<?php

	$servidor="localhost";
    $bd="ejemplo3";
    $usuario="root";
    $contrasena="";

    // crear conexion
    $conexion= mysqli_connect($servidor,$usuario,$contrasena,$bd);
	
    if(!$conexion){
        die("no fue posible el realizar ");
    }else{
        echo "si se conectó a la BD";
	}
	
	if(mysqli_connect_errno()){
		echo 'Conexion Fallida : ', mysqli_connect_error();
		exit();
	}

	function validardb($usuario,$contrasena,$conexion){
		$query = 'SELECT 1 AS user_valido FROM usuarios WHERE user="'.$usuario.'" AND pass= "'.($contrasena).'"';
		echo $query;
		$res = mysqli_query($conexion,$query) or die('Ha ocurrido un Error');
	
		if(mysqli_num_rows($res)==0)
			return false;
		else
			return true;
		
	}

?>    
	