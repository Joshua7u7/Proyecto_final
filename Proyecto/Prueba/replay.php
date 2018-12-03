<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Replay</title>
  </head>
  <body>
    <div class="contenedor">
      <?php
        $carpeta = '../Documentos/';

        for($i=0 ; $i<136 ; $i++){
          $nombre = $_FILES['archivo']['name'][$i];
          if(isset($nombre)){
            echo $nombre . "<br>";
            $path = $carpeta . $nombre;
            if (file_exists($path)) {
              echo "El fichero $nombre existe" . '<br>';
            } else {
              echo "El fichero $nombre no existe" . '<br>';
              move_uploaded_file($_FILES['archivo']['tmp_name'][$i],
  	          $path);
              $codigo_sql =  $i+1;
              include_once 'includes/funciones/funciones.php';
              insertar_base($path, $codigo_sql);
            }
          }
        }
      ?>
    </div>
  </body>
</html>
