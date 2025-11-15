<?php
require_once("../../controllers/ProyectoController.php");
$controller = new ProyectoController();
$proyectos = $controller->listar();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Proyectos</title>
    <link rel="stylesheet" href="../../assets/css/style.css">
</head>
<body>

<div class="page-container">

    <h1 class="page-title">Proyectos Registrados</h1>

    <div style="text-align:center; margin-bottom:20px;">
        <a href="agregar.php" class="btn">Agregar Proyecto</a>

        <a href="../../menu.php" class="btn btn-gray" style="margin-left:20px;">
            ⬅ Volver al menú
        </a>
    </div>

    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Editar</th>
        </tr>

        <?php while ($fila = $proyectos->fetch_assoc()) { ?>
        <tr>
            <td><?= $fila['id'] ?></td>
            <td><?= $fila['nombre'] ?></td>
            <td><?= $fila['descripcion'] ?></td>
            <td>
                <a href="editar.php?id=<?= $fila['id'] ?>" class="btn btn-small">Editar</a>
            </td>
        </tr>
        <?php } ?>
    </table>

</div>

</body>
</html>
