<?php
  function insertar_base(&$path, &$codigo_sql){
    try {
      require('includes/funciones/conexion.php');
      $sql= " SELECT id_act FROM actividad WHERE actividad.codigo_act = " . "'$codigo_sql'";
      $resultado= $conn->query($sql);
    } catch (Exception $e) {
      //echo $e->getMessage();
    }
    //echo "<h1>".$sql."</h1>";
    $obj_actividad = $resultado->fetch_assoc();
    $id_actividad = $obj_actividad['id_act'];
    //echo "<h1>".$id_actividad."</h1>";
    
$gestor=fopen("C://xampp/htdocs/Proyecto_final/Proyecto/Bases de datos/Registro/inicio.txt", "r");
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

$query=mysqli_query($conn,"Select id_usuario from cuenta where contrasena='$contraseña' and nombre_usuario='$nombre_chido'");
$fila=mysqli_fetch_array($query);

$iid=$fila['id_usuario'];
$obs=" ";
$conn->close();
    try {
      require('includes/funciones/conexion.php');
      $sql2= " INSERT INTO `archivo` (`id_arch`, `nombre_arch`, `id_usuario`, `codigo_arch`,`observacion`,`valor_obtenido`,`revisado`) VALUES (NULL, " . "'$path'".", '$iid' , ". "'$codigo_sql'".",'$obs',0,0)";
      $resultado= $conn->query($sql2);
    } catch (Exception $e) {
     // echo $e->getMessage();
    }
    $sql2= " INSERT INTO `archivo` (`id_arch`, `nombre_arch`, `id_usuario`, `codigo_arch`,`observacion`,`valor_obtenido`,`revisado`) VALUES (NULL, " . "'$path'".",'$iid', ". "'$codigo_sql'".",'$obs',0,0)";
   // echo "<h1>".$sql2."</h1>";
    $conn->close();

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
    <strong>Suerte!</strong> has subido tus documentos. No olvides pedir revisión </a>
  </div>

  <div class="imagen">
    <img src="https://www.eoi.es/blogs/alfredo-fernandez-lorenzo/files/2016/03/Felicidad-2.jpg">
  </div>
    </body>
    </html>

