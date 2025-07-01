<?php
require_once 'db.php';

class ContactoModel {
    private $conn;

    public function __construct($mysqli) {
        $this->conn = $mysqli;
    }

    public function guardarMensaje($nombre, $telefono, $email, $mensaje) {
        $stmt = $this->conn->prepare("INSERT INTO contacto (nombre, telefono, email, mensaje) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $nombre, $telefono, $email, $mensaje);
        $exito = $stmt->execute();
        $stmt->close();
        return $exito;
    }

     public function obtenerMensajes() {
        $query = "SELECT id, nombre, telefono, email, mensaje, fecha FROM contacto ORDER BY fecha DESC";
        $result = $this->conn->query($query);
        
        // Retorna los mensajes obtenidos
        return $result;
    }
}
?>
