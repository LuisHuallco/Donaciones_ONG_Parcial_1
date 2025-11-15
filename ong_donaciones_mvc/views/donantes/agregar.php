<?php
ob_start();  

require_once("../../controllers/DonanteController.php");
$controller = new DonanteController();
$controller->agregar();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Agregar Donante</title>
    <link rel="stylesheet" href="../../assets/css/style.css">
</head>
<body>

<div class="form-container">
<h1>Agregar Nuevo Donante</h1>

<form action="" method="POST">

    <label>Nombre:</label>
    <input type="text" name="nombre" required>

    <label>Correo:</label>
    <input type="email" name="correo" required>

    <label>Teléfono:</label>
    <input type="text" name="telefono" required>

    <div class="form-buttons">
        <button type="submit" name="guardar" class="btn">Guardar</button>
        <a href="lista.php" class="btn-cancel">Cancelar</a>
    </div>

</form>
</div>

</body>
</html>

<?php ob_end_flush(); ?>
