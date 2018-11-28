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
		$contraseña=fgets($gestor);
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Revision</title>
</head>
<body>

	
</body>
</html>