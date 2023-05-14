<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" coentnt="IE=edge">
    <meta name="viewport" content="width=dviece-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Php</title>
    <style>
        #customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #customers td,
        #customers th {

            border: 1px solid #ddd;
            padding: 8px;
        }

        #customers tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #customers tr:hover {
            background-color: #ddd;
        }

        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: center;
            background-color: #04AA6D;
            color: white;
        }

        .centrar {
            margin-top: 10px;
            align-items: center;
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            setTimeout(function() {
                $(".content").fadeOut(1500);
            }, 3000);
        });
    </script>
</head>

<body>
    <div class="container text-center centrar">
        <div class="row">
            <div class="col">
                <?php include('registrar.php')    ?>
            </div>
            <div class="col-sm-8">

                <?php include('listado.php')    ?>


            </div>
            <?php include('actualizar_modal.php')?>
        </div>


    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/evitar_reenvio.js"></script>

</body>


</html>