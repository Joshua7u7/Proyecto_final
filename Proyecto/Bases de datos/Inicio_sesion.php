<?php
$conexion=null;

$conexion=mysqli_connect('localhost','root','','becas',3306);

/*Se obtienen los datos del formulario de inicio de sesion.html*/
if($_GET)
{
    $nempleado=$_GET['nombre'];
    $contraseña=$_GET['contraseña'];

    $x=mysqli_query($conexion,"Select nombre from usuario where numero_empleado='$nempleado'");
    $y=mysqli_fetch_array($x);

    $nombre=$y['nombre'];
    
    /*Se obtiene el nombre de usuario y la contraseña de usuario y cuenta para poder hacer validaciones a continuacion*/
    $consulta_1=" Select nombre_usuario,contrasena from cuenta where nombre_usuario='$nombre' and contrasena='$contraseña'";

/*Se guarda su registro en un txt para poder hacer operaciones en otros php*/
    $archivo=fopen("Registro/inicio.txt", "w");
    fwrite($archivo, $nombre);
    fwrite($archivo,"\n".$contraseña);
    fclose($archivo);
    $Resultado=mysqli_query($conexion,$consulta_1);
    $Fila=mysqli_fetch_array($Resultado);


    /*Se checa que exista el usuario en el sistema para poder acceder a su perfil*/
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
              /*Se verifica que tipo de usuario es para entrar a su perfil*/
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
      /*En caso de no existir en el sistema se muestra una */
    {
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
      background-color: #D4AC0D;
    }
    .imagen
    {
      width: 150px;
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
    
     <div class="alert alert-warning">
    <strong>Atención!</strong> verifique que haya escrito bien sus datos e<a href="../HTML/Inicio sesion.html" class="alert-link"> intentelo de nuevo</a>.
  </div>

  <div class="imagen">
    <img src="http://static.t13.cl/images/sizes/1200x675/1542286192-pikachu.jpg">
  </div>
    </body>
    </html>
    <?php
}
}
mysqli_close($conexion);
?>
