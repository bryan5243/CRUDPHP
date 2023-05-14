<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $id=$_GET['id'];
    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $direccion=$_POST['direccion'];
    $telefono=$_POST['telefono'];
    include('conectarbd.php');
    $sql="update alumnos set nombre='$nombre', apellido='$apellido',direccion='$direccion',telefono=$telefono where id=$id";
    $result=mysqli_query($conexion,$sql);
    header('Location: index.php');
}
?>