<?php
$conexion=null;

$conexion=mysqli_connect('localhost','root','','becas',3306);

if(!$conexion)
echo "Conexion fallida";
else
echo "Conexion exitosa";

if($_POST)
{
  echo "saludos";
  $nombre=$_POST['usuario'];
  $apellido=$_POST['apellido'];
  $contraseña=$_POST['con_1'];
  $departamento=$_POST['dep'];
  $tipo_usuario=$_POST['t_u'];
  $nacimiento=$_POST['fecha'];
  $id_u=1;
  $idD=1;

  mysqli_query($conexion,"Insert into usuario(id_usuario,idD,nombre,apellidos,fecha_nacimiento,tipo_usuario) values
  ('$id_u','$idD','$nombre','$apellido','$nacimiento','$tipo_usuario')");

}

?>
