<?php
$conexion=null;

$conexion=mysqli_connect('localhost','root','','becas',3306);

if($_POST)
{

  $nombre=$_POST['usuario'];
  $apellido=$_POST['apellido'];
  $contraseña=$_POST['con_1'];
  $departamento=$_POST['dep'];
  $tipo_usuario=$_POST['t_u'];
  $nacimiento=$_POST['fecha'];

  $resultado=mysqli_query($conexion,"Select MAX(id_usuario) from usuario");
  $fila = mysqli_fetch_array($resultado);
  $id_u=$fila['MAX(id_usuario)']+1;

  $resultado_2=mysqli_query($conexion,"Select idD from departamento where nombre_departamento='$departamento'");
  $fila_2 = mysqli_fetch_array($resultado_2);
  $idD=$fila_2['idD'];

  if($tipo_usuario=="Administrador")
  {
    $chequeo=mysqli_query($conexion,"Select * from usuario where tipo_usuario='$tipo_usuario'");
    $chequeo_2=mysqli_fetch_array($chequeo);
    if($chequeo_2>0)
    {
      ?>
        <script type="text/javascript">
          alert("Lo siento, ya existe un administrador registrado");
          document.location.target="";
          document.location.href=("../HTML/Registro.html");
        </script>
      <?php
    }
    else
    {
      mysqli_query($conexion,"Insert into usuario(id_usuario,idD,nombre,apellidos,fecha_nacimiento,tipo_usuario) values
      ('$id_u','$idD','$nombre','$apellido','$nacimiento','$tipo_usuario')");

      
      mysqli_query($conexion,"Insert into cuenta(idC,id_usuario,contrasena,nombre_usuario)
      values('$id_u','$id_u','$contraseña','$nombre')");
    }
  }
  else
  {
    mysqli_query($conexion,"Insert into usuario(id_usuario,idD,nombre,apellidos,fecha_nacimiento,tipo_usuario) values
    ('$id_u','$idD','$nombre','$apellido','$nacimiento','$tipo_usuario')");

    mysqli_query($conexion,"Insert into cuenta(idC,id_usuario,contrasena,nombre_usuario)values('$id_u','$id_u','$contraseña','$nombre')");
  }
    mysqli_query($conexion,"Insert into estado(id_usuario,id_estado,nivel_beca,puntaje,revision)
      values ('$id_u,','$id_u',0,0,0)");
}
  

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Numero de folio</title>

  <style media="screen">
    body
    {
        background: url("http://www.wallpapereast.com/static/images/wallpapers-hd-1.jpg");
        background-repeat: no-repeat;
        background-size: cover;
    }

    .Container
    {
      background-color: white;
      width: 500px;
      height: 300px;
      text-align: center;
      margin-left: 15%;
      margin-top: 5%;
      opacity: 0.5;
    }

    .Container:hover
    {
      opacity: 1;
    }

  </style>
</head>
<body>
    <div class="Container">
        <h2>¡Felicidades has quedado registrado
          <?php
            $R=mysqli_query($conexion,"Select nombre from usuario where id_usuario='$id_u'");
            $F=mysqli_fetch_array($R);

            $nombre=$F['nombre'];
            echo "$nombre"."  ";
            mysqli_close($conexion);
          ?>
          !</h2>

          <br><br><br>

          <h3>Tu numero de usuario es: </h3>
          <br>
          <h1><?php echo "$id_u";?></h1>
    </div>
</body>
</html>
