<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar</title>
</head>

<body>
    <?php

    include('conectarbd.php');
    $Sql = "select * from alumnos";
    $resultado = mysqli_query($conexion, $Sql);
    while ($row = $resultado->fetch_assoc()) {
        $field0name = $row['id'];
        $field1name = $row['nombre'];
        $field2name = $row['apellido'];
        $field3name = $row['direccion'];
        $field4name = $row['telefono'];


        echo '
        <div class="modal fade" id="staticBackdrop' . $field0name . '" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="staticBackdropLabel">Actualizar Datos</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form action="actualizar.php?id=' . $field0name . '" method="post">
              <div class="mb-3" style="text-align:left;">
              <label>Nombre:</label>
              <input value="' . $field1name . '" name="nombre" class="form-control" id="nombre">
            </div>

            <div class="mb-3" style="text-align:left;">
              <label>Apellido:</label>
              <input value="' . $field2name . '" name="apellido" class="form-control" id="apellido">
            </div>
              
            <div class="mb-3" style="text-align:left;">
            <label>Dirección:</label>
            <input value="' . $field3name . '" name="direccion" class="form-control" id="direccion">
          </div>

          <div class="mb-3" style="text-align:left;">
              <label>telefono:</label>
              <input value="' . $field4name . '" name="telefono" class="form-control" id="telefono">
            </div>

              
            </div>
            <div class="modal-footer">
              <button type="submit" name="submit" class="btn btn-primary" value="Guardar ambios" >Guardar</button>
              <button type="submit" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
            </div>
            </form>
          </div>
        </div>
      </div>';
    }

    ?>
</body>

</html>