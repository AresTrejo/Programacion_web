<?php

    require('conection.php');
    
    $conexion= conectarBD("localhost","root","","libreria");
    $consulta ="select id, nombre, edad, direccion from personas ";

    $registros=mysqli_query($conexion,$consulta);
    // var_dump($registros);
    if($registros->num_rows>0){
        while($fila = $registros -> fetch_assoc()){
            echo "ID: " . $fila["id"] . "<br>";
            echo "Nombre: " . $fila["nombre"] . "<br>";
            echo "Edad: " . $fila["edad"] . "<br>";
            echo "Direcccion: " . $fila["direccion"] . "<br>";

        }
    }

    // cerrar la conexion
    desconectar($conexion);



?>