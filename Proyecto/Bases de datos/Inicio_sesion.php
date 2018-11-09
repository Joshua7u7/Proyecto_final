<?php
$conexion=null;

$conexion=mysqli_connect('localhost','root','','becas',3306);

if($_GET)
{
    $nombre=$_GET['nombre'];
    $contraseña=$_GET['contraseña'];

    $consulta_1="Select nombre_usuario,contraseña from cuenta where nombre_usuario='$nombre' and contraseña='$contraseña'";
    $Resultado=mysqli_query($conexion,$consulta_1);
    $Fila=mysqli_fetch_array($Resultado);

    if($Fila>0)
    {
      echo "Acceso permitido";
    }
    else
      echo "Acceso denegado";

}

?>
