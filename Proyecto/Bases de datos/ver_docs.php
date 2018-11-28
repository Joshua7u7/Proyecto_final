<?php

$conexion=null;
$conexion=mysqli_connect('localhost','root','','becas',3306);

if($_GET)
{
	$id=$_GET['id'];
	$nombre=$_GET['nombre'];
	$apellido=$_GET['apellido'];
}

	$Consulta="select * from archivo where id_usuario='$id'";
	$result=mysqli_query($conexion,$Consulta);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Ver</title>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>

	<table class="table">
		<thead class="thead-light">
			<th colspan="2">Documentos entregados por <?php echo $nombre . "  " . $apellido?>
			</th>
		<tbody>
			<?php
			while($fila=mysqli_fetch_array($result))
			{
				?>
				<tr>
				<td> <a href="<?php echo $fila['nombre_arch'] ?>"><?php echo $fila['nombre_arch'] ?></a></td>
				<td> <input class="form-control"  type="text" name="" placeholder="Puntaje"></td>
				</tr>
				<?php
			}
				?>			
			
		</tbody>
		</thead>
	</table>
</body>
</html>