<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $alert = '';
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $direccion = $_POST['direccion'];
    $telefono = $_POST['telefono'];
    include('conectarbd.php');

    $sql = "insert into alumnos(nombre,apellido,direccion,telefono)values('$nombre','$apellido','$direccion','$telefono')";

    $resultado = mysqli_query($conexion, $sql);

    if($resultado){
        $alert="<div class='alert alert-success content' role='alert'>
        Registro agregado exitosamente
        </div>";
    }else{
        $alert="<div class='alert alert-danger content' role='alert'>
        Registro no ingresado
        </div>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
</head>

<body>
<?php echo isset($alert) ? $alert: ''; ?>
    <form action="" method="post">
        <div class="mb-3" style="text-align: left;">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" class="form-control" id="nombre">
        </div>
        <div class="mb-3" style="text-align: left;">
            <label for="apellido">Apellido:</label>
            <input type="text" name="apellido" class="form-control" id="apellido">
        </div>
        <div class="mb-3" style="text-align: left;">
            <label for="direccion">Dirección:</label>
            <input type="text" name="direccion" class="form-control" id="direccion">
        </div>
        <div class="mb-3" style="text-align: left;">
            <label for="telefono">Telefono:</label>
            <input type="text" name="telefono" class="form-control" id="telefono">
        </div>
        <div class="mb-3" style="text-align: left;">

            <input type="submit" name="submit" class="btn btn-success form-control" value="Registrar">
        </div>









    </form>

</body>

</html>