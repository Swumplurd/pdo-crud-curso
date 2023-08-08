<?php
require_once "../crud.class.php";
$conexion = new Crud();

$conexion->insertar(
    [
        "nombre" => $_POST["nombre"],
        "telefono" => $_POST["telefono"],
        "email" => $_POST["email"],
    ]
)
?>