<?php
ob_start();

require_once("../../controllers/DonacionController.php");
$controller = new DonacionController();

if (!isset($_GET['id'])) {
    header("Location: lista.php");
    exit();
}

$id = $_GET['id'];
$donacion = $controller->obtenerDonacion($id);

$donantes  = $controller->listarDonantes();
$proyectos = $controller->listarProyectos();

$controller->actualizar();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Donación</title>
    <link rel="stylesheet" href="../../assets/css/style.css">
</head>
<body>

<div class="form-container">
<h1>Editar Donación</h1>

<form action="" method="POST">

    <input type="hidden" name="id" value="<?= $donacion['id'] ?>">

    <label>Donante:</label>
    <select name="donante" required>
        <?php while($d = $donantes->fetch_assoc()) { ?>
            <option value="<?= $d['id'] ?>"
                <?= ($d['id'] == $donacion['id_donante']) ? 'selected' : '' ?>>
                <?= $d['nombre'] ?>
            </option>
        <?php } ?>
    </select>

    <label>Proyecto:</label>
    <select name="proyecto" required>
        <?php while($p = $proyectos->fetch_assoc()) { ?>
            <option value="<?= $p['id'] ?>"
                <?= ($p['id'] == $donacion['id_proyecto']) ? 'selected' : '' ?>>
                <?= $p['nombre'] ?>
            </option>
        <?php } ?>
    </select>

    <label>Monto:</label>
    <input type="number" step="0.01" name="monto" value="<?= $donacion['monto'] ?>" required>

    <label>Fecha:</label>
    <input type="date" name="fecha" value="<?= $donacion['fecha'] ?>" required>

    <div class="form-buttons">
        <button type="submit" name="actualizar" class="btn">Actualizar</button>
        <a href="lista.php" class="btn-cancel">Cancelar</a>
    </div>

</form>
</div>

</body>
</html>

<?php ob_end_flush(); ?>
