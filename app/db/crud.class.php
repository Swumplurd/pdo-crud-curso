<?php
    class Crud {
        private object $conexion;
        private string $host = 'localhost';
        private string $user = 'root';
        private string $db = 'pdo';
        private string $password = '';

        public function __construct() {
            $this->conexion = new PDO("mysql:host=$this->host;dbname=$this->db", $this->user, $this->password);
        }

        public function mostrar() {
            $query = $this->conexion->prepare('SELECT * FROM persona');
            $query->execute();
            $result = $query->fetchAll(PDO::FETCH_ASSOC);
            unset($this->conexion);
            return $result;
        }

        public function eliminar(string $id) {
            $query = 'DELETE FROM persona WHERE id = :id';
            $stmt = $this->conexion->prepare($query);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            unset($this->conexion);
            return $stmt;
        }

        public function insertar(array $datos) {
            $query = 'INSERT INTO persona(nombre, telefono, email) values(:nombre, :telefono, :email)';
            $stmt = $this->conexion->prepare($query);
            $stmt->bindParam(':nombre', $datos['nombre']);
            $stmt->bindParam(':telefono', $datos['telefono']);
            $stmt->bindParam(':email', $datos['email']);
            $stmt->execute();
            unset($this->conexion);
            return json_encode($stmt);
        }

        public function actualizar(array $datos) {
            $query = 'UPDATE persona SET nombre = :nombre, telefono = :telefono, email = :email WHERE id = :id';
            $stmt = $this->conexion->prepare($query);
            $stmt->bindParam(':id', $datos['id']);
            $stmt->bindParam(':nombre', $datos['nombre']);
            $stmt->bindParam(':telefono', $datos['telefono']);
            $stmt->bindParam(':email', $datos['email']);
            $stmt->execute();
            unset($this->conexion);
            return $stmt;
        }

        public function buscar(string $id) {
            $query = "SELECT id, nombre, telefono, email FROM persona WHERE id = '$id'";
            $stmt = $this->conexion->prepare($query);
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            unset($this->conexion);
            return $result;
        }
    }
?>