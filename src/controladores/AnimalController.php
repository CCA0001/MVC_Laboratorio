<?php
    require_once 'modelos/AnimalModel.php';

    $accion = $_GET['accion'] ?? 'index';

    if($accion === 'index'){
        $animal = obtenerAnimales($conn);
        require 'vistas/index.php';
    }

    if($accion === 'crear' && $_SERVER['REQUEST_METHOD'] === 'POST'){
        crearAnimal($conn, $_POST['nombre'], $_POST['especie'], $_POST['sexo']);
        header('Location: index.php');
        exit;
    }

    if($accion === 'eliminar'){
        eliminarAnimal($conn, $_GET['id']);
        header('Location: index.php');
        exit;
    }

    if ($accion === 'editar') {
        $animal = obtenerAnimalPorId($conn, $_GET['id']);
        require 'vistas/editar.php';
    }

    if ($accion === 'actualizar' && $_SERVER['REQUEST_METHOD'] === 'POST') {
        actualizarAnimal($conn, $_POST['id'], $_POST['nombre'], $_POST['especie'], $_POST['edad']);
        header('Location: index.php');
        exit;
    }
?>