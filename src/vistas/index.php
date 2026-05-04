<!DOCTYPE html>
<html lang="es">
<head><meta charset="UTF-8"><title>Usuarios</title>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
 <link rel="stylesheet" href="/vistas/css/zoo.css">
</head>
<body>

<div class="cuadro_blanco_fondo">
    
<div class="Ingresar_Animales">

  <h1>Animalitos del Zoo</h1>

<small> Ingrese un animal nuevo llenando los siguientes campos </small>
<div class="imagen_panda">
<img src="/vistas/css/imagenes/pandita.png" alt="panda" style="width: 300px;"></div>
  <div class="fondo_inputs">

 <div class="imagen_leon">
<img src="/vistas/css/imagenes/leon.png" alt="leon" style="width: 300px;"></div>
  <div class="fondo_inputs">
  
   <div class="imagen_planta">
<img src="/vistas/css/imagenes/planta.png" alt="planta" style="width: 300px;"></div>
 <div class="fondo_inputs">

  <div class="imagen_planta2">
<img src="/vistas/css/imagenes/planta.png" alt="planta" style="width: 300px;"></div>
 <div class="fondo_inputs">

 <form method="POST" action="index.php?accion=crear">
    <div class="row g-2"> <!-- row=filas g-2= tamaño-->

        <div class="col-md-3"> <!-- col=columnas md-3=agarra 3 de los 12-->
            <input type="text" name="nombre" class="form-control" placeholder="Nombre" required>
        </div>
        <div class="col-md-3">
            <input type="text" name="especie" class="form-control" placeholder="Especie" required>
        </div>
        <div class="col-md-3">
            <input type="number" name="edad" class="form-control" placeholder="Edad" required>
        </div>
        <div class="col-md-3">
            <button type="submit" class="btn btn-success w-90">Agregar</button>
        </div>
    </div>
</form>

</div>
</div>

 <table class="table table-bordered table-hover" style="width: 80%; margin: 0 auto; border-radius: 16px; overflow: hidden;">
    <thead class="table-success">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Especie</th>
            <th>Edad</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($animal as $a): ?>
        <tr>
            <td><?= $a['id'] ?></td>
            <td><?= $a['nombre'] ?></td>
            <td><?= $a['especie'] ?></td>
            <td><?= $a['edad'] ?></td>
            <td> <a href="index.php?accion=editar&id=<?= $a['id'] ?>" class="btn btn-warning btn-sm" title="Editar">
        <i class="bi bi-pencil"></i>
    </a>
    <a href="index.php?accion=eliminar&id=<?= $a['id'] ?>" class="btn btn-danger btn-sm" title="Eliminar" onclick="return confirm('¿Eliminar este animalito?')">
        <i class="bi bi-trash"></i>
    </a>
</td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
    </div>
</body>
</html>