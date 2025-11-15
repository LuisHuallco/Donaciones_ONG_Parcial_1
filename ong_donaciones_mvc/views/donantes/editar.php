<?php
ob_start(); 

require_once("../../controllers/DonanteController.php");
$controller = new DonanteController();

// Validar EL ID 
if (!isset($_GET['id'])) {
    header("Location: lista.php");
    exit();
}

$id = $_GET['id'];

// Obtener todos los datos
$donante = $controller->obtenerDonante($id);

// Actualizar
$controller->actualizar();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Donante</title>
    <link rel="stylesheet" href="../../assets/css/style.css">
</head>
<body>

<div class="form-container">
<h1>Editar Donante</h1>

<form action="" method="POST">

    <input type="hidden" name="id" value="<?= $donante['id'] ?>">

    <label>Nombre:</label>
    <input type="text" name="nombre" value="<?= $donante['nombre'] ?>" required>

    <label>Correo:</label>
    <input type="email" name="correo" value="<?= $donante['correo'] ?>" required>

    <label>Teléfono:</label>
    <input type="text" name="telefono" value="<?= $donante['telefono'] ?>" required>

    <div class="form-buttons">
        <button type="submit" name="actualizar" class="btn">Actualizar</button>
        <a href="lista.php" class="btn-cancel">Cancelar</a>
    </div>

</form>
</div>

</body>
</html>

<?php ob_end_flush(); ?>
