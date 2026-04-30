<?php

    require_once 'config/conexion.php';

    function obtenerAnimales($conn){
        return $conn->query("SELECT * FROM animales");
    }

    function crearAnimal($conn, $nombre, $especie, $sexo){
        $stmt = $conn->prepare("INSERT INTO animales (nombre, especie, edad) VALUES (?,?)");
        $stmt->execute([$nombre, $especie, $edad]);
    }

    function eliminarAnimal($conn, $id){
        $stmt = $conn->prepare("DELETE FROM usuarios WHERE id = ?");
        $stmt->execute([$id]);
    }

    function actualizarAnimal($conn, $id, $nombre, $especie, $edad) {
        $stmt = $conn->prepare("UPDATE animales SET nombre=?, especie=?, edad=? WHERE id=?");
        $stmt->execute([$nombre, $especie, $edad, $id]);
    }

    function obtenerAnimalPorId($conn, $id) {
        $stmt = $conn->prepare("SELECT * FROM animales WHERE id=?");
        $stmt->execute([$id]);
        return $stmt->fetch();
    }
?>