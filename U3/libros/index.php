<!DOCTYPE html>
<html>
<head>
	 <meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Libros</title>
</head>
<body>
	<main>
	<a href="registro.php" title="">Agregar</a>
	<table>

			<tr>
				<th>Título</th>
				<th>Autor</th>
				<th>Precio</th>
				<th>Editorial</th>
				<th>Enlace</th>
			</tr>
			<?php
				require('conexion.php');
				$conexion= conectar("localhost","root","","libreria");
			
		if(ISSET($POST['titulo'])){
			$titulo = $POST['titulo']; 
			$autor = $POST['autor']; 
			$edit= $POST['editorial'];
			$precio = $POST['precio']; 
			$enlace= $POST['enlace']; 
			$consulta ="INSERT INTO libreria values(NULL,'$titulo','$auor',$precio,'$edit','$enlace')";

			if(mysqli_query($conexion,$consulta)){
				
			}else{
				echo "Hubo un error";
			}
		}
				$consulta ="SELECT titulo,autor,precio,editorial,enlace FROM libro";

				$registros=mysqli_query($conexion,$consulta);
				if($registros->num_rows>0){
					while($fila = $registros -> fetch_assoc()){
						echo "<tr>";
							echo "<td>" . $fila["titulo"] . "</td>";
							echo "<td>" . $fila["autor"] . "</td>";
							echo "<td>" . $fila["precio"] . "</td>";
							echo "<td>" . $fila["editorial"] . "</td>";
							echo "<td>" . $fila["enlace"] . "</td>";
						echo "</tr>";
					}
				}

				desconectar($conexion);
			?>
	</table>
	</main>
</body>
</html>
