<?php

$conexion=null;
$conexion=mysqli_connect('localhost','root','','becas',3306);

if($_GET)
{
	$id=$_GET['id'];
	$nombre=$_GET['nombre'];
	$apellido=$_GET['apellido'];
}

	$Consulta="select * from actividad a ,archivo ar ,usuario u where codigo_arch=id_act and  ar.id_usuario=u.id_usuario and u.id_usuario='$id'";
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


  <style type="text/css">
    input
    {
      background-color:#e9ecef;
      border: none;
    }
  </style>

</head>
<body>

<form action="Calificar.php?Id=<?php echo $id?>" method="post">
	<table class="table">
		<thead class="thead-light">
			<th>Código</th>
			<th colspan="2">
				Documentos entregados por <?php echo $nombre . "  " . $apellido?>
			</th>
			<th> <input type="text" name="" value="Puntaje a obtener" disabled></th>
			<th><input type="text" name="" value="Puntaje obtenido" disabled></th></th>
			<th>Observaciones</th>
		<tbody>
			<?php
			while($fila=mysqli_fetch_array($result))
			{
				?>
				<tr>
				<td><?php echo $fila['codigo_act']?></td>
				<td> <a href="<?php echo $fila['nombre_arch'] ?>">
					<!--<?php echo $fila['nombre_arch'] ?>-->
					<?php 
					//echo $fila['nombre_arch']
					$var=$fila['nombre_arch'];
					$counter=0;
					$contador_2=0;
					while($counter<strlen($var))
					{
						if($var[$counter]=='/')
						{
							$contador_2++;
						}
						$counter++;
					}
					$contador_3=0;
					$counter=0;
					$elchido="";
					while($counter<strlen($var))
					{
						if($contador_3==$contador_2)
						{
							$elchido=$elchido.$var[$counter];
						}
						
						if($var[$counter]=='/')
						{
							$contador_3++;
						}
						
						$counter++;
					} 
					?>
						<input type="" name="" value="<?php echo $elchido ?>" disabled>
					</a></td>
				<td></td>
				<td> <?php echo $fila['valor']?> </td>
				<td> <input class="form-control"  type="text" name="puntaje[]" placeholder="Puntaje"></td>
				<td>
					<select name="obs[]">
						<option value="Ninguna">Ninguna</option>
          				<option value="Observacion 1">Observacion 1</option>
          				<option value="Observacion 2">Observacion 2</option>
					</select>
				</td>
				</tr>
				<?php
			}
				?>			
			
		</tbody>
		</thead>
	</table>
	<input type="submit" name="" value="Calificar" class="form-control">
	</form>
</body>
</html>