<?php
$conexion=null;

$conexion=mysqli_connect('localhost','root','','becas',3306);

if($_GET)
{
    $nombre=$_GET['nombre'];
    $contraseña=$_GET['contraseña'];

    $consulta_1=" Select nombre_usuario,contrasena from cuenta where nombre_usuario='$nombre' and contrasena='$contraseña'";
    $Resultado=mysqli_query($conexion,$consulta_1);
    $Fila=mysqli_fetch_array($Resultado);

    if($Fila>0)
    {
      ?>
        <!--<a href="../sesion_iniciada.html" target="_parent" onload=""></a>-->
        <script type="text/javascript">
          window.onload=cargarPagina;

          function cargarPagina()
          {
            <?php
              $consulta_1="select tipo_usuario from usuario,cuenta where
                           usuario.id_usuario=cuenta.id_usuario and contrasena='$contraseña'
                           and nombre=nombre_usuario and nombre='$nombre'";
              $Resultado=mysqli_query($conexion,$consulta_1);
              $fila=mysqli_fetch_array($Resultado);
              if($fila['tipo_usuario']=="Administrador")
              {
                ?>
                window.open("../Sesiones/sesion_iniciada_admin.html","_parent");
              <?php
              }
              else if($fila['tipo_usuario']=="Analista")
              {
                ?>
                window.open("../Sesiones/sesion_iniciada_analista.html","_parent");
              <?php
              }
              else
              {
                ?>
                window.open("../Sesiones/sesion_iniciada_docente.html","_parent");
                <?php
              }
              ?>
          }
        </script>
      <?php
    }
    else
      echo "Acceso denegado";
}

mysqli_close($conexion);
?>
