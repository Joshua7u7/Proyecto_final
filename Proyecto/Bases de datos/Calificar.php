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


	$Consulta="select * from actividad a ,archivo ar ,usuario u where codigo_arch=id_act and  ar.id_usuario=u.id_usuario and u.id_usuario='$id' and ar.revisado=0";
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
$jaja=mysqli_query($conexion,"Select puntaje from estado where id_usuario='$id'");
$ja=mysqli_fetch_array($jaja);

$puntaje_final=$ja['puntaje'];

$consulta_pad="select SUM(valor_obtenido) from actividad,archivo where id_act>=1 and id_act<7 and id_act=codigo_arch and id_usuario='$id'";
$consulta_cdd="select SUM(valor_obtenido) from actividad,archivo where id_act>=7 and id_act<64 and id_act=codigo_arch and id_usuario='$id'";
$consulta_dd="select SUM(valor_obtenido) from actividad,archivo where id_act>=64 and id_act<137 and id_act=codigo_arch and id_usuario='$id'";

$res=mysqli_query($conexion,$consulta_pad);
$PAD_r=mysqli_fetch_array($res);

if($PAD_r['SUM(valor_obtenido)']!=NULL)
{
	$PAD=$PAD_r['SUM(valor_obtenido)'];	
}
else
{
	$PAD=0;
}


$res=mysqli_query($conexion,$consulta_cdd);
$PAD_r=mysqli_fetch_array($res);

if($PAD_r['SUM(valor_obtenido)']!=NULL)
{
	$CDD=$PAD_r['SUM(valor_obtenido)'];	
}
else
{
	$CDD=0;
}

$res=mysqli_query($conexion,$consulta_dd);
$PAD_r=mysqli_fetch_array($res);

if($PAD_r['SUM(valor_obtenido)']!=NULL)
{
	$DD=$PAD_r['SUM(valor_obtenido)'];	
}
else
{
	$DD=0;
}

$puntaje_final+=0.15*$PAD+0.6*$CDD+0.25*$DD;

$nivel=0;

if($puntaje_final>=700 and $puntaje_final<=1499)
{
	$nivel=1;
}

if($puntaje_final>=1500 and $puntaje_final<=2299)
{
	$nivel=2;
}

if($puntaje_final>=2300 and $puntaje_final<=3099)
{
	$nivel=3;
}

if($puntaje_final>=3100 and $puntaje_final<=3999)
{
	$nivel=4;
}

if($puntaje_final>=4000 and $puntaje_final<=4999)
{
	$nivel=5;
}

if($puntaje_final>=5000 and $puntaje_final<=5999)
{
	$nivel=6;
}

if($puntaje_final>=6000)
{
	$nivel=7;
}

$Consulta_final="update estado set puntaje='$puntaje_final', nivel_beca='$nivel' where id_usuario='$id'";

mysqli_query($conexion,$Consulta_final);


}	
?>

 <!DOCTYPE html>
    <html>
    <head>
      <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

  <style type="text/css">
    body
    {
    	background-color: #AED6F1;
    }
    .imagen
    {
      width: 50px;
      margin-left: 100px;
      margin-top: 50px;
    }

    .imagen img
    {
    	width: 500px;
    	height: 300px;
    }
  </style>
    </head>
    <body>
    
     <div class="alert alert-success">
    <strong>Bien hecho!</strong> se ha calificado al profesor
    <?php
    $x=mysqli_query($conexion,"Select * from usuario where id_usuario='$id'");
    $y=mysqli_fetch_array($x);
    echo " ".$y['nombre'];

    mysqli_query($conexion,"Update archivo set revisado=1 where id_usuario='$id' ");
    ?>
  </div>

  <div class="imagen">
    <img src="https://www.eoi.es/blogs/alfredo-fernandez-lorenzo/files/2016/03/Felicidad-2.jpg">
  </div>
    </body>
    </html>