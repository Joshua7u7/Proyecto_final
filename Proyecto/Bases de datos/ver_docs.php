<?php

$conexion=null;
$conexion=mysqli_connect('localhost','root','','becas',3306);

/*Se obtienen los datos necesarios para la operacion directamente desde la pagina visualizar_profesores.php*/
if($_GET)
{
	$id=$_GET['id'];
	$nombre=$_GET['nombre'];
	$apellido=$_GET['apellido'];
}

/*Se eleccionan todos los documentos que el docente ha entregado que no se hayan revisado aun*/

	$Consulta="select * from actividad a ,archivo ar ,usuario u where codigo_arch=id_act and  ar.id_usuario=u.id_usuario and u.id_usuario='$id' and ar.revisado=0";
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
	<!--Se hace la tabla de los documentos y los inputs para meter su puntaje y sus observaciones-->
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
          				<option value="No corresponde al apartado indicado">No corresponde al apartado indicado</option>
          				<option value="No se distingue, le falta resolucion al escaneo">No se distingue, le falta resolucion al escaneo</option>
          				<option value="Mover a otro apartado">Mover a otro apartado</option>
          				<option value="No corresponde el periodo">No corresponde el periodo</option>
          				<option value="Esta evidencia ya fue considerada en otro periodo">Esta evidencia ya fue considerada en otro periodo</option>
          				<option value="Le falta comprobante">Le falta comprobante</option>
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