<?php
include('conectarbd.php');
$id=$_GET['id'];
$sql="delete from alumnos where id='$id'";
$resultado=mysqli_query($conexion,$sql);
header('Location:index.php');

?>