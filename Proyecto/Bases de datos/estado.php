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

$consulta="select u.nombre,u.apellidos,u.id_usuario,e.nivel_beca,e.puntaje from cuenta c,usuario u,estado e where c.id_usuario=u.id_usuario and c.id_usuario=e.id_usuario and u.id_usuario=e.id_usuario and u.nombre='$nombre_chido' and c.contrasena='$contrasena'";

$resultado=mysqli_query($conexion,$consulta);

$fila=mysqli_fetch_array($resultado);

$id_u=$fila['id_usuario'];
$apellido=$fila['apellidos'];
$n_v=$fila['nivel_beca'];
$puntaje=$fila['puntaje'];

?>

<!DOCTYPE html>
<html>
<head>
	<title>Estado</title>
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
		<thead class="thead-dark">
            <tr class="titulo">
                <th colspan="4">Estado de becas</th>
            </tr>
        </thead>
        <tbody>
        	<tr>
        		<td>Nombre</td>
        		<td>Apellido</td>
        		<td>Nivel de beca</td>
        		<td>Puntaje</td>
        	</tr>

        	<tr>
        		<td><?php echo $nombre ?></td>
        		<td><?php echo $apellido ?></td>
        		<td><?php echo $n_v ?></td>
        		<td><?php echo $puntaje ?></td>
        	</tr>
        </tbody>	
	</table>

	<table class="table">
		<thead class="thead-light">
			<tr>
				<th colspan="2" > Documentos entregados</td>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Código</td>
				<td>Nombre del archivo</td>
			</tr>
		</tbody>

		<?php
		$Consulta="select * from archivo where id_usuario='$id_u'";
		$result=mysqli_query($conexion,$Consulta);
		while($fila=mysqli_fetch_array($result))
		{
			?>
			<tr>
				<td><?php echo $fila['codigo_arch'] ?></td>
				<td><?php echo $fila['nombre_arch'] ?></td>
			</tr>

			<?php
		}

		?>
	</table>
</body>
</html>