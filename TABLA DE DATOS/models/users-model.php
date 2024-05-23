<?php
class UserModel {
    private $pdo;

    public function __construct() {
        require_once '../config/conexion.php';
        $this->pdo = $pdo;
    }

    public function getUsuariosData() {
        $sql = 'SELECT cedula, nombres, apellidos, telefono;';
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
