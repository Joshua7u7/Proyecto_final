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
    $conn->close();

    try {
      require('includes/funciones/conexion.php');
      $sql2= " INSERT INTO `archivo` (`id_arch`, `nombre_arch`, `tipo_arch`, `codigo_arch`) VALUES (NULL, " . "'$path'".", ". "'$tipo'". ", ". "'$id_actividad'".")";
      $resultado= $conn->query($sql2);
    } catch (Exception $e) {
      echo $e->getMessage();
    }
    $sql2= " INSERT INTO `archivo` (`id_arch`, `nombre_arch`, `tipo_arch`, `codigo_arch`) VALUES (NULL, " . "'$path'".", ". "'$tipo'". ", ". "'$id_actividad'".")";
    echo "<h1>".$sql2."</h1>";
    $conn->close();

  }
?>
