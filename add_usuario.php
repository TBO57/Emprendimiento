<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>...</title>

</head>
<body>
    <?php
     $nom = $_REQUEST["nom"];
     $ape = $_REQUEST["ape"];
     $cor = $_REQUEST["cor"];
     $cc = $_REQUEST["cc"];
     $tel = $_REQUEST["tel"];
     $psw = $_REQUEST["psw"];
     $psw2 = $_REQUEST["psw2"];

  
    include("conexion.php");

    $con = conectar();
    
    $sql = "INSERT INTO usuario(Cedula,Telefono,Nombre,Apellido,Correo,Contrasena,Contrasena2) VALUES ('$cc','$tel','$nom','$ape','$cor','$psw','$psw2')";

     $consulta = mysqli_query($con,$sql) or die ("No se pudieron guardar los datos");

     if ($consulta = 1)
     {
        print "Datos guardados con Exito ";
     }
    ?>
</body>
</html>