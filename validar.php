<?php
include('conexion.php');
$correo=$_POST['cor'];
$contraseña=$_POST['psw'];
session_start();
$_SESSION['Correo']=$correo;


$con = conectar();

$consulta="SELECT*FROM usuario where Correo='$correo' and Contrasena='$contraseña'";
$resultado=mysqli_query($con,$consulta);

$row=mysqli_fetch_array($resultado);

/* $filas=mysqli_num_rows($resultado); */

if($row > 0){
  
    header("location:index2.php");

}else{
    ?>
    <?php
    include("index.php");

  ?>
  <h3 class="bad">ERROR DE AUTENTIFICACION</h3>
  <?php
}
mysqli_free_result($resultado);
mysqli_close($con);
