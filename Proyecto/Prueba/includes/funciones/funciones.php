<?php
  function insertar_base(&$path, &$codigo_sql, &$tipo){
    try {
      require('includes/funciones/conexion.php');
      $sql= " SELECT id_act FROM actividad WHERE actividad.codigo_act = " . "'$codigo_sql'";
      $resultado= $conn->query($sql);
    } catch (Exception $e) {
      echo $e->getMessage();
    }
    echo "<h1>".$sql."</h1>";
    $obj_actividad = $resultado->fetch_assoc();
    $id_actividad = $obj_actividad['id_act'];
    echo "<h1>".$id_actividad."</h1>";
    
$gestor=fopen("C:/xampp/htdocs/Proyecto_final/Proyecto/Bases de datos/Registro/inicio.txt", "r");
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

$conn->close();
    try {
      require('includes/funciones/conexion.php');
      $sql2= " INSERT INTO `archivo` (`id_arch`, `nombre_arch`, `id_usuario`, `codigo_arch`) VALUES (NULL, " . "'$path'".", '$iid' , ". "'$id_actividad'".")";
      $resultado= $conn->query($sql2);
    } catch (Exception $e) {
      echo $e->getMessage();
    }
    $sql2= " INSERT INTO `archivo` (`id_arch`, `nombre_arch`, `id_usuario`, `codigo_arch`) VALUES (NULL, " . "'$path'".",'$iid', ". "'$id_actividad'".")";
    echo "<h1>".$sql2."</h1>";
    $conn->close();

  }
?>
