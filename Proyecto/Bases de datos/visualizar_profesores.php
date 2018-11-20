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
   $result=mysqli_query($conexion,"select nombre,id_usuario,nombre,apellidos,nombre_departamento
   from usuario,departamento where tipo_usuario='Docente' and usuario.idD=departamento.idD");

   while($row=mysqli_fetch_array($result))
   {
     ?>
      <tr>
        <td><?php echo $row['id_usuario']?></td>
        <td><?php echo $row['nombre']?></td>
        <td><?php echo $row['apellidos']?></td>
        <td><?php echo $row['nombre_departamento']?></td>
        <td> <a href="#">Visualizar documentos</a></td>
      </tr>
    </tbody>

 <?php
 } ?>
  </table>
</body>
</html>
