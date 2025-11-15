<?php
require_once(__DIR__ . "/../config/conexion.php");

class DonacionModel {

    private $conexion;

    public function __construct() {
        $this->conexion = (new Conexion())->conectar();
    }

    // LISTAR TODAS LAS DONACIONES
    public function listarDonaciones() {
        $sql = "SELECT d.id, d.monto, d.fecha,
                       don.nombre AS donante,
                       pro.nombre AS proyecto
                FROM donaciones d
                INNER JOIN donantes don ON d.id_donante = don.id
                INNER JOIN proyectos pro ON d.id_proyecto = pro.id";
        return $this->conexion->query($sql);
    }

    // INSERTAR
    public function insertarDonacion($idDonante, $idProyecto, $monto, $fecha) {
        $sql = "INSERT INTO donaciones (id_donante, id_proyecto, monto, fecha)
                VALUES ($idDonante, $idProyecto, '$monto', '$fecha')";
        return $this->conexion->query($sql);
    }

    // OBTENER UNA DONACION
    public function obtenerDonacion($id) {
        $sql = "SELECT * FROM donaciones WHERE id = $id";
        $res = $this->conexion->query($sql);
        return $res->fetch_assoc();
    }

    // ACTUALIZAR
    public function actualizarDonacion($id, $idDonante, $idProyecto, $monto, $fecha) {
        $sql = "UPDATE donaciones 
                SET id_donante = $idDonante,
                    id_proyecto = $idProyecto,
                    monto = '$monto',
                    fecha = '$fecha'
                WHERE id = $id";
        return $this->conexion->query($sql);
    }

    // LISTAR LOS DONANTES
    public function listarDonantes() {
        return $this->conexion->query("SELECT * FROM donantes");
    }

    // LISTAR PROYECTOS 
    public function listarProyectos() {
        return $this->conexion->query("SELECT * FROM proyectos");
    }
}
?>
