<?php
require_once(__DIR__ . "/../models/ProyectoModel.php");

class ProyectoController {

    private $model;

    public function __construct() {
        $this->model = new ProyectoModel();
    }

    public function listar() {
        return $this->model->listarProyectos();
    }

    public function agregar() {
        if (isset($_POST['guardar'])) {

            $nombre = $_POST['nombre'];
            $descripcion = $_POST['descripcion'];

            $this->model->insertarProyecto($nombre, $descripcion);

            header("Location: /ONG_DONACIONES_MVC/views/proyectos/lista.php");
            exit();
        }
    }

    public function obtenerProyecto($id) {
        return $this->model->obtenerProyecto($id);
    }

    public function actualizar() {
        if (isset($_POST['actualizar'])) {

            $id = $_POST['id'];
            $nombre = $_POST['nombre'];
            $descripcion = $_POST['descripcion'];

            $this->model->actualizarProyecto($id, $nombre, $descripcion);

            header("Location: /ONG_DONACIONES_MVC/views/proyectos/lista.php");
            exit();
        }
    }
}
?>
