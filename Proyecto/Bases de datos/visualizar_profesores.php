<?php

$conexion=null;
$conexion=mysqli_connect('localhost','root','','becas',3306);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Visualizar profesores</title>

  <style type="text/css">
    input
    {
      background-color: white;
      border: none;
    }
  </style>
</head>
<body>

  <table class="table">
  <thead class="thead-dark">
      <tr>
        <th>Numero de docente</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Departamento</th>
        <th>Documentos</th>
      </tr>
    </thead>
    <tbody>
      <?php
      /*Se selecciona todos los datos del profesor para mostrar*/
   $result=mysqli_query($conexion,"select nombre,usuario.id_usuario,apellidos,nombre_departamento
   from usuario,departamento,estado where tipo_usuario='Docente' and usuario.idD=departamento.idD and usuario.id_usuario=estado.id_usuario and estado.revision=1");


   while($row=mysqli_fetch_array($result))
   {
     ?>
     <!--Se crea una tabla con todos los profesores del sistema-->
      <tr>
        <td> <input type="text" name="ID"  value="<?php echo $row['id_usuario']?>" disabled> </td>
        <td><input type="text" name="NOM"  value="<?php echo $row['nombre']?>" disabled></td>
        <td><input type="text" name="AP"  value="<?php echo $row['apellidos']?>" disabled></td>
        <td><?php echo $row['nombre_departamento']?></td>
        <td> <a href="ver_docs.php?nombre=<?php echo $row['nombre']?>&id=<?php echo $row['id_usuario']?>&apellido=<?php echo $row['apellidos']?>">Visualizar documentos</a> </td>
      </tr>
      
    </tbody>

 <?php
 } ?>
  </table>
</body>
</html>
