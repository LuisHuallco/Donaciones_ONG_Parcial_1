<?php
ob_start();

require_once("../../controllers/ProyectoController.php");
$controller = new ProyectoController();
$controller->agregar();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Agregar Proyecto</title>
    <link rel="stylesheet" href="../../assets/css/style.css">
</head>
<body>

<div class="form-container">
<h1>Agregar Nuevo Proyecto</h1>

<form action="" method="POST">

    <label>Nombre del proyecto:</label>
    <input type="text" name="nombre" required>

    <label>Descripción:</label>
    <textarea name="descripcion" required></textarea>

    <div class="form-buttons">
        <button type="submit" name="guardar" class="btn">Guardar</button>
        <a href="lista.php" class="btn-cancel">Cancelar</a>
    </div>

</form>
</div>

</body>
</html>

<?php ob_end_flush(); ?>
