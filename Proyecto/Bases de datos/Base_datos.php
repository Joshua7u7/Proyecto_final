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
  $N_empleado=$_POST['N_empleado'];

  $x=mysqli_query($conexion,"Select * from usuario where nombre='$nombre' and apellidos='$apellido' and numero_empleado='$N_empleado' ");
  $y=mysqli_fetch_array($x);
  if($y>0)
  {
    
    ?>
    <script type="text/javascript">
      alert("Lo siento, ya estas registrado, intenta iniciar sesion");
      window.open("../HTML/Inicio sesion.html","_self");
    </script>
    <?php
  }
  else
  {

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
      mysqli_query($conexion,"Insert into usuario(id_usuario,idD,nombre,apellidos,fecha_nacimiento,numero_empleado,tipo_usuario) values
      ('$id_u','$idD','$nombre','$apellido','$nacimiento','$N_empleado','$tipo_usuario')");

      
      mysqli_query($conexion,"Insert into cuenta(idC,id_usuario,contrasena,nombre_usuario)
      values('$id_u','$id_u','$contraseña','$nombre')");
    }
  }
  else
  {
    mysqli_query($conexion,"Insert into usuario(id_usuario,idD,nombre,apellidos,fecha_nacimiento,numero_empleado,tipo_usuario) values
    ('$id_u','$idD','$nombre','$apellido','$nacimiento','$N_empleado','$tipo_usuario')");

    mysqli_query($conexion,"Insert into cuenta(idC,id_usuario,contrasena,nombre_usuario)values('$id_u','$id_u','$contraseña','$nombre')");
  }
    mysqli_query($conexion,"Insert into estado(id_usuario,id_estado,nivel_beca,puntaje,revision)
      values ('$id_u,','$id_u',0,0,0)");
}
  
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <title>Numero de folio</title>

  <style media="screen">
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
    <strong>Felicidades!</strong> has sido registrado
    <?php
            $R=mysqli_query($conexion,"Select nombre from usuario where id_usuario='$id_u'");
            $F=mysqli_fetch_array($R);

            $nombre=$F['nombre'];
            echo "$nombre"."  ";
            mysqli_close($conexion);
          ?>
  </div>

  <div class="imagen">
    <img src="https://www.eoi.es/blogs/alfredo-fernandez-lorenzo/files/2016/03/Felicidad-2.jpg">
  </div>
          

</body>
</html>
