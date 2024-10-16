<?php

include 'modelo/db.php';

$id = $_GET['id'];

$sql = $conn->query("SELECT * FROM persona WHERE id_persona = $id");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar persona</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <form class="col-4 p-3 m-auto" method="POST">
        <h3 class="text-center text-secondary">Editar persona</h3>
        <input type="hidden" name="id" value="<?= $_GET['id'] ?>">
        <?php
        include 'controlador/editar_persona.php';

        while ($datos = $sql->fetch_object()) { ?>
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="<?= $datos->nombre ?>">
            </div>
            <div class="mb-3">
                <label for="apellido" class="form-label">Apellido</label>
                <input type="text" class="form-control" id="apellido" name="apellido" value="<?= $datos->apellido ?>">
            </div>
            <div class="mb-3">
                <label for="dni" class="form-label">DNI</label>
                <input type="text" class="form-control" id="dni" name="dni"  value="<?= $datos->dni ?>">
            </div>
            <div class="mb-3">
                <label for="fecha_nac" class="form-label">Fecha de nacimiento</label>
                <input type="date" class="form-control" id="fecha_nac" name="fecha_nac"  value="<?= $datos->fecha_nac ?>">
            </div>
            <div class="mb-3">
                <label for="correo" class="form-label">Correo</label>
                <input type="text" class="form-control" id="correo" name="correo"  value="<?= $datos->correo ?>">
            </div>
            <button type="submit" class="btn btn-primary" name="btnactualizar" value="ok">Editar</button>
        <?php } ?>
    </form>
</body>

</html>