<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Replay</title>
  </head>
  <body>
    <div class="contenedor">
      <h1>Aprendiendo PHP</h1>
      </*?php $nombre = $_FILES['I_1']['name'] ?>
      <pre>
        </*?php echo $nombre ?>
      </pre>
      <?php
        $carpeta = '../Documentos_Entregados/';
        for($i=1 ; $i<7 ; $i++){
          $codigo= 'I_' . $i;
          $nombre = $_FILES[$codigo]['name'];
          if(isset($nombre)){
            echo $nombre . "<br>";
            $path = $carpeta . $nombre;
            $tipo = $_FILES[$codigo]['type'];
            if (file_exists($path)) {
              echo "El fichero $nombre existe" . '<br>';
            } else {
              echo "El fichero $nombre no existe" . '<br>';
              move_uploaded_file($_FILES[$codigo]['tmp_name'],
  	          $path);
              $codigo_sql = 'I.' . $i;
              include_once 'includes/funciones/funciones.php';
              insertar_base($path, $codigo_sql, $tipo);
            }
          }
        }
      ?>

      <script type="text/javascript">
        window.onload=cargar;

        function cargar()
        {
           window.open("../HTML/Exito.html","_self");
        }

      </script>
    </div>
  </body>
</html>
