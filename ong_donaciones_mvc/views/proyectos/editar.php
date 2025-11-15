<?php
ob_start();

require_once("../../controllers/ProyectoController.php");
$controller = new ProyectoController();

if (!isset($_GET['id'])) {
    header("Location: lista.php");
    exit();
}

$id = $_GET['id'];
$proyecto = $controller->obtenerProyecto($id);

$controller->actualizar();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Proyecto</title>
    <link rel="stylesheet" href="../../assets/css/style.css">
</head>
<body>

<div class="form-container">
<h1>Editar Proyecto</h1>

<form action="" method="POST">

    <input type="hidden" name="id" value="<?= $proyecto['id'] ?>">

    <label>Nombre:</label>
    <input type="text" name="nombre" value="<?= $proyecto['nombre'] ?>" required>

    <label>Descripción:</label>
    <textarea name="descripcion" required><?= $proyecto['descripcion'] ?></textarea>

    <div class="form-buttons">
        <button type="submit" name="actualizar" class="btn">Actualizar</button>
        <a href="lista.php" class="btn-cancel">Cancelar</a>
    </div>

</form>
</div>

</body>
</html>

<?php ob_end_flush(); ?>
