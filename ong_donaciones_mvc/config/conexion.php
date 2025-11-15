<?php
class Conexion {
    private $host = "localhost";
    private $user = "root";
    private $pass = "123";
    private $db   = "ong_donaciones";

    public function conectar() {
        $conexion = new mysqli($this->host, $this->user, $this->pass, $this->db);

        if ($conexion->connect_error) {
            die("Error de conexión: " . $conexion->connect_error);
        }

        return $conexion;
    }
}
?>
