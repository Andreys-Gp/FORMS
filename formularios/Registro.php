<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php
    $server="localhost";
    $usuario="root";
    $contraseña="";
    $bd="ejemplo";
    $conexion= mysql_connet($server,$usuario,$bd,$contraseña);
        or die("Error conection id");

        $Clave=$_POST('txtClave');
        $nombre=$_POST('txtNombre');
        $sexo=$_POST('txtSexo');
        $insertar="INSERT INTO datos values ('$clave','$nombre','$sexo')";
         $resultado=mysql_query($conexion,$insertar)
           or die("Error al insertar los resultados");

           mysqli_close($conexion);
           echo "Datos insetados correctamente";
   ?>    

</body>
</html>