<?php
ob_start();

require_once("../../controllers/DonacionController.php");
$controller = new DonacionController();

$donantes  = $controller->listarDonantes();
$proyectos = $controller->listarProyectos();

$controller->agregar();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Agregar Donación</title>
    <link rel="stylesheet" href="../../assets/css/style.css">
</head>
<body>

<div class="form-container">
<h1>Registrar Nueva Donación</h1>

<form action="" method="POST">

    <label>Donante:</label>
    <select name="donante" required>
        <option value="">Seleccione</option>
        <?php while($d = $donantes->fetch_assoc()) { ?>
            <option value="<?= $d['id'] ?>"><?= $d['nombre'] ?></option>
        <?php } ?>
    </select>

    <label>Proyecto:</label>
    <select name="proyecto" required>
        <option value="">Seleccione</option>
        <?php while($p = $proyectos->fetch_assoc()) { ?>
            <option value="<?= $p['id'] ?>"><?= $p['nombre'] ?></option>
        <?php } ?>
    </select>

    <label>Monto:</label>
    <input type="number" step="0.01" name="monto" required>

    <label>Fecha:</label>
    <input type="date" name="fecha" required>

    <div class="form-buttons">
        <button type="submit" name="guardar" class="btn">Guardar</button>
        <a href="lista.php" class="btn-cancel">Cancelar</a>
    </div>

</form>
</div>

</body>
</html>

<?php ob_end_flush(); ?>
