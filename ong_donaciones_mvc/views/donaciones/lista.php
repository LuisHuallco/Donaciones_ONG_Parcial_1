<?php
require_once("../../controllers/DonacionController.php");
$controller = new DonacionController();
$donaciones = $controller->listar();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Donaciones</title>
    <link rel="stylesheet" href="../../assets/css/style.css">
</head>
<body>

<div class="page-container">

    <h1 class="page-title">Donaciones Registradas</h1>

    <div style="text-align:center; margin-bottom:20px;">
        <a href="agregar.php" class="btn">Agregar Donación</a>

        <a href="../../menu.php" class="btn btn-gray" style="margin-left:20px;">
            ⬅ Volver al menú
        </a>
    </div>

   
    <table>
        <tr>
            <th>ID</th>
            <th>Donante</th>
            <th>Proyecto</th>
            <th>Monto</th>
            <th>Fecha</th>
            <th>Editar</th>
        </tr>

        <?php while ($fila = $donaciones->fetch_assoc()) { ?>
        <tr>
            <td><?= $fila['id'] ?></td>
            <td><?= $fila['donante'] ?></td>
            <td><?= $fila['proyecto'] ?></td>
            <td><?= $fila['monto'] ?></td>
            <td><?= $fila['fecha'] ?></td>
            <td>
                <a href="editar.php?id=<?= $fila['id'] ?>" class="btn btn-small">Editar</a>
            </td>
        </tr>
        <?php } ?>
    </table>

</div>

</body>
</html>
