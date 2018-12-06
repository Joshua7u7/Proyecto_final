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

$contador=0;
$nombre_chido="";
while($contador<strlen($nombre)-1)
{
	$nombre_chido=$nombre_chido.$nombre[$contador];
	$contador+=1;
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Revision</title>
	<link rel="stylesheet" href="../CSS/inicio secion.css">
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

  <style type="text/css">
  	.Contenedor_registro
  	{
  		margin-left: 30px;
  	}
  </style>
</head>
<body>



<div class="Contenedor_registro">
	  <div class="logos">
      <div class="escom">
        <img src="../Imagenes/escom.jpg" alt="">
      </div>

      <div class="ipn">
        <img src="../Imagenes/ipn.jpg" alt="">
      </div>
    </div>

    <div class="Formulario">
    	<form method="post" action="">
    		<h2>¿Seguro que quieres mandar solicitud de revision <?php echo $nombre ?>?</h2>
    	<select name="opc">
    		<option name="" value="si">Si</option>
    		<option name="" value="no">No</option>
    	</select>
    	<br><br>
    	<input type="submit" name="btn" value="Confirmar" class="btn btn-primary">		
    	</form>
    	
    </div>
    
</div>

<?php

if($_POST)
{
	$consulta="Select u.id_usuario from usuario u ,cuenta c where nombre='$nombre_chido' and c.contrasena='$contraseña' and u.id_usuario=c.id_usuario";
	$res=mysqli_query($conexion,$consulta);
	$fila=mysqli_fetch_array($res);
	$id=$fila['id_usuario'];

	$opcion=$_POST['opc'];

	if(strcmp($opcion,"si")==0)
	{
		$consulta="update estado set revision=1 where id_usuario='$id'";
		mysqli_query($conexion,$consulta);

    ?>
    <script type="text/javascript">
      alert("¡Solicitud realizada con éxito!")
    </script>
    <?php
	}

}


?>
</body>
</html>