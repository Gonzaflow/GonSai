<?php
$conexion = mysqli_connect('localhost', 'root', 'Hernandez22.', 'base')or die(mysql_error($mysqli));

insertar($conexion);

function insertar($conexion){

  $nombre = $_POST['nombre'];
  $correo = $_POST['correo'];
  $asunto = $_POST['asunto'];
  $mensaje = $_POST['mensaje'];


  $consulta = "INSERT INTO datos(nombre, correo, asunto, mensaje)
  VALUES ('$nombre', '$correo', '$asunto', '$mensaje')";

  $result =  mysqli_query($conexion, $consulta);

  if  ($result){
    echo "registro guardado correctamente";

  }
  else echo "error al insertar datos";
  echo "<a href='contacto.html'>Volver</a>";
  mysqli_close($conexion);

}
