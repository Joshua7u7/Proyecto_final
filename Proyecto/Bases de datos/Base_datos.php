$conexion=null;

$conexion=mysqli_connect('localhost','root','','beca',3306);

if($_POST)
{
  $nombre=$_POST['usuario'];
  $apellido=$_POST['apellido'];
  $edad=$_POST['edad'];
  mysqli_query($conexion,"Insert into Persona(nombre,apellido,edad) values ('$nombre','$apellido','$edad')");
}
