<?php
require_once(__DIR__ . "/../models/DonanteModel.php");

class DonanteController {

    private $model;

    public function __construct() {
        $this->model = new DonanteModel();
    }

    public function listar() {
        return $this->model->listarDonantes();
    }


    // AGREGAR DONANTE
    public function agregar() {
        if (isset($_POST['guardar'])) {

            $nombre   = $_POST['nombre'];
            $correo   = $_POST['correo'];
            $telefono = $_POST['telefono'];

            $this->model->insertarDonante($nombre, $correo, $telefono);

            header("Location: /ONG_DONACIONES_MVC/views/donantes/lista.php");
            exit();

        }
    }

    public function obtenerDonante($id) {
        return $this->model->obtenerDonante($id);
    }

    // ACTUALIZAR DONANTE
    public function actualizar() {
        if (isset($_POST['actualizar'])) {

            $id       = $_POST['id'];
            $nombre   = $_POST['nombre'];
            $correo   = $_POST['correo'];
            $telefono = $_POST['telefono'];

            $this->model->actualizarDonante($id, $nombre, $correo, $telefono);

            header("Location: /ONG_DONACIONES_MVC/views/donantes/lista.php");
        exit();

        }
    }
}
?>
