<?php
    $servidor = "localhost";
    $usuario = "root";
    $contrasena = "";
    $bd = "ejemplo3";
    $tabla = $_GET['tabla'];
    $id = $_GET['id'];
    $datos = $_GET['datos'];
    $arreglo = array();

    $conexion = mysqli_connect($servidor, $usuario, $contrasena, $bd);
    
    $consulta = "SELECT id, nombre FROM $tabla WHERE $id = $datos";
    $resultado = mysqli_query($conexion, $consulta);

    if($resultado->num_rows>0){
        while($fila = $resultado->fetch_assoc()){
            $arreglo[$fila['nombre']] = $fila['id'];
        }
    }

    echo json_encode($arreglo);

?>
