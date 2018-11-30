<?php

$conexion=null;
$conexion=mysqli_connect('localhost','root','','becas',3306);

if($_POST)
{
	$observaciones=$_POST['obs'];
	$puntajes=$_POST['puntaje'];
	$id=$_GET['Id'];
	$tamaño=count($observaciones);
	$posicion=0;

	echo $id;

	$Consulta="select * from actividad a ,archivo ar ,usuario u where codigo_arch=id_act and  ar.id_usuario=u.id_usuario and u.id_usuario='$id'";
	$resultado=mysqli_query($conexion,$Consulta);

	while(($fila=mysqli_fetch_array($resultado)))
	{		
		$num= $fila['id_arch'];
		$Consulta="Update archivo Set observacion='$observaciones[$posicion]' where id_arch='$num' and id_usuario='$id'";
		mysqli_query($conexion,$Consulta);
		$Consulta="Update archivo Set valor_obtenido='$puntajes[$posicion]' where id_arch='$num' and id_usuario='$id'";
		mysqli_query($conexion,$Consulta);
		$posicion+=1;
	}



}	
?>