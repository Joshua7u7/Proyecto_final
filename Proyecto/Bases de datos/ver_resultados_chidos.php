<?php

$conexion=null;
$conexion=mysqli_connect('localhost','root','','becas',3306);

$gestor=fopen("Registro/inicio.txt", "r");

$contador=1;

while(!feof($gestor))
{
	if($contador==1)
	{
		$contador+=1;
		$nombre=fgets($gestor);
	}
	else
	{
		$contrasena=fgets($gestor);
	}
}

$contador=0;
$nombre_chido="";
while($contador<strlen($nombre)-1)
{
	$nombre_chido=$nombre_chido.$nombre[$contador];
	$contador+=1;
}


$Consulta="select usuario.id_usuario from usuario,cuenta where usuario.id_usuario=cuenta.id_usuario and usuario.nombre='$nombre_chido' and cuenta.contrasena='$contrasena'";
$res=mysqli_query($conexion,$Consulta);
$fila=mysqli_fetch_array($res);

$id=$fila['id_usuario'];

$Consulta="Select * from archivo ar, actividad ac where ar.id_usuario='$id' and ac.id_act=ar.codigo_arch";
$res=mysqli_query($conexion,$Consulta);

?>


<!DOCTYPE html>
<html>
<head>
	  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Resultados</title>

	<style type="text/css">
		input
		{
			background-color: #212529;
			border: none;
			color: white;
		}
	</style>
</head>
<body>

	<table class="table">
		<thead class="thead-dark">
			<th> <input type="" name="" value="Codigo archivo" disabled=""> </th>
			<th> <input type="" name="" value="Actividad" disabled=""> </th>
			<th> <input type="" name="" value="Puntos posibles" disabled=""> </th>
			<th> <input type="" name="" value="Archivo enviado" disabled=""> </th>
			<th> <input type="" name="" value="Puntaje obtenido" disabled=""> </th>
			<th> <input type="" name="" value="Observaciones" disabled=""> </th>
		</thead>

		<?php
		while(($fila=mysqli_fetch_array($res)))
		{
			?>
			<tr>
				<td><?php echo $fila['codigo_act']?></td>
				<td><?php echo $fila['nombre_act']?></td>
				<td><?php echo $fila['valor']?></td>
				<td> <a href="<?php echo $fila['nombre_arch'] ?>">
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
						<?php echo $elchido ?>
					</a></td>
					<td><?php echo $fila['valor_obtenido']?></td>
					<td><?php echo $fila['observacion']?></td>

			</tr>
			<?php
		}
		?>
	</table>
</body>
</html>