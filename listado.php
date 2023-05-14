<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de registros</title>

</head>

<body>

    <table id="customers">
        <tr>
            <th>N°</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Direccion</th>
            <th>Telefono</th>
            <th>Opciones</th>

        </tr>
        <?php
        include("conectarbd.php");
        $sql = "select * from alumnos";
        $resultado = mysqli_query($conexion, $sql);
        while ($row = $resultado->fetch_assoc()) {
            $field0name = $row['id'];
            $field1name = $row['nombre'];
            $field2name = $row['apellido'];
            $field3name = $row['direccion'];
            $field4name = $row['telefono'];

            echo '<tr>
               <td>' . $field0name . '</td>
               <td>' . $field1name . '</td>
               <td>' . $field2name . '</td>
               <td>' . $field3name . '</td>
               <td>' . $field4name . '</td>
               <td>
               <a  href="eliminar.php?id='.$field0name.'" class="btn btn-danger">Eliminar</a>
               <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop' . $row['id'] . '">Actualizar</button>
               
               </td>

               </tr>';
        } ?>
    </table>

</body>

</html>