<?php
require_once(__DIR__ . "/../config/conexion.php");

class DonanteModel {

    private $conexion;

    public function __construct() {
        $this->conexion = (new Conexion())->conectar();
    }

    public function listarDonantes() {
        $sql = "SELECT * FROM donantes";
        $consulta = $this->conexion->query($sql);
        return $consulta;
    }
    // INSERTAR DONANTE

    public function insertarDonante($nombre, $correo, $telefono) {
        $sql = "INSERT INTO donantes (nombre, correo, telefono)
                VALUES ('$nombre', '$correo', '$telefono')";
        return $this->conexion->query($sql);
    }

    public function obtenerDonante($id) {
        $sql = "SELECT * FROM donantes WHERE id = $id";
        $consulta = $this->conexion->query($sql);
        return $consulta->fetch_assoc();
    }

    // ACTUALIZAR DONANTE
    public function actualizarDonante($id, $nombre, $correo, $telefono) {
        $sql = "UPDATE donantes 
                SET nombre = '$nombre',
                    correo = '$correo',
                    telefono = '$telefono'
                WHERE id = $id";
        return $this->conexion->query($sql);
    }

}
?>
