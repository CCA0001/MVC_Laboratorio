<!DOCTYPE html>
<html lang="es">
<head><meta charset="UTF-8"><title>Editar Animal</title></head>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
 
<link rel="stylesheet" href="/vistas/css/zoo_editar.css">

<body>
<div class="imagen_curiosos">
<img src="/vistas/css/imagenes/curiosos.png"alt="curiosos" style="width: 900px;"></div>

<div class="cuadro_blanco_fondo">
  <h1>Editar Animal</h1>

    <form method="POST" action="index.php?accion=actualizar">
   <input type="hidden" name="id" value="<?= $animal['id'] ?>">
    <input type="text" name="nombre" class="form-control" style="width: 300px; margin-bottom: 15px;" value="<?= $animal['nombre'] ?>"  required>
    <input type="text" name="especie" class="form-control" style="width: 300px; margin-bottom: 15px;"value="<?= $animal['especie'] ?>" required>
    <input type="number" name="edad" class="form-control" style="width: 300px; margin-bottom: 15px;" value="<?= $animal['edad'] ?>" required>
    <div style="margin-top: 20px;">
        <button type="submit" class="btn btn-success">Guardar</button>
        <a href="/index.php" class="btn btn-danger">Cancelar</a></div>
</div>
</div>

</body>
</html>