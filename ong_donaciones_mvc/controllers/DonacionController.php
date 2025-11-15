<?php
require_once(__DIR__ . "/../models/DonacionModel.php");

class DonacionController {

    private $model;

    public function __construct() {
        $this->model = new DonacionModel();
    }

    public function listar() {
        return $this->model->listarDonaciones();
    }

    public function agregar() {
        if (isset($_POST['guardar'])) {

            $donante   = $_POST['donante'];
            $proyecto  = $_POST['proyecto'];
            $monto     = $_POST['monto'];
            $fecha     = $_POST['fecha'];

            $this->model->insertarDonacion($donante, $proyecto, $monto, $fecha);

            header("Location: /ONG_DONACIONES_MVC/views/donaciones/lista.php");
            exit();
        }
    }

    public function obtenerDonacion($id) {
        return $this->model->obtenerDonacion($id);
    }

    public function actualizar() {
        if (isset($_POST['actualizar'])) {

            $id        = $_POST['id'];
            $donante   = $_POST['donante'];
            $proyecto  = $_POST['proyecto'];
            $monto     = $_POST['monto'];
            $fecha     = $_POST['fecha'];

            $this->model->actualizarDonacion($id, $donante, $proyecto, $monto, $fecha);

            header("Location: /ONG_DONACIONES_MVC/views/donaciones/lista.php");
            exit();
        }
    }

    public function listarDonantes() {
        return $this->model->listarDonantes();
    }

    public function listarProyectos() {
        return $this->model->listarProyectos();
    }
}
?>
