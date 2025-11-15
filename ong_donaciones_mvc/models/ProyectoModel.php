<?php
require_once(__DIR__ . "/../config/conexion.php");

class ProyectoModel {

    private $conexion;

    public function __construct() {
        $this->conexion = (new Conexion())->conectar();
    }

    public function listarProyectos() {
        $sql = "SELECT * FROM proyectos";
        return $this->conexion->query($sql);
    }

    // INSERTAR
    public function insertarProyecto($nombre, $descripcion) {
        $sql = "INSERT INTO proyectos (nombre, descripcion)
                VALUES ('$nombre', '$descripcion')";
        return $this->conexion->query($sql);
    }
    public function obtenerProyecto($id) {
        $sql = "SELECT * FROM proyectos WHERE id = $id";
        $consulta = $this->conexion->query($sql);
        return $consulta->fetch_assoc();
    }

    // ACTUALIZAR
    public function actualizarProyecto($id, $nombre, $descripcion) {
        $sql = "UPDATE proyectos 
                SET nombre = '$nombre',
                    descripcion = '$descripcion'
                WHERE id = $id";
        return $this->conexion->query($sql);
    }
}
?>
