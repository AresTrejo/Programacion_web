<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="script.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Listas desplegables</title>
</head>
<body>
    <div class="container">
        <div>
        <div class="col-12">
            <h1 class="text-center shadow-lg m-5 p-3">Listas desplegables</h1>
        </div>
        <div class="row" style="padding: 2%; margin-left: 32%;margin-right: -37%;">
          <select name="" id="pais" class="form-control col-sm-4">
            <option value="0">Países </option>
            <?php
            require('servidor.php');

            $consulta = "SELECT id, nombre FROM pais";
            $resultado = mysqli_query($conexion, $consulta);
            
            if ($resultado->num_rows > 0) {
                while ($fila = $resultado->fetch_assoc()) {
                    echo "<option value=" . $fila["id"] . ">" . $fila["nombre"] . "</option>";
                }
            }    
        ?>
        </select>  
        </div>    
        <div class="row" style="padding: 2%; margin-left: 32%;margin-right: -37%;">
            <select name="" id="estado"class="form-control col-sm-4">Estado:</select>
        </div>
        <div class="row" style="padding: 2%; margin-left: 32%;margin-right: -37%;">
        <select name="" id="ciudades"class="form-control col-sm-4">Ciudad:</select>
        </div>
    </div>
    </div>
    </div>
</body>
</html>