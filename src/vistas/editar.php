<!DOCTYPE html>
<html lang="es">
<head><meta charset="UTF-8"><title>Editar Animal</title></head>
<body>

  <h1>Editar Animal</h1>

  <form method="POST" action="index.php?accion=actualizar">
    <input type="hidden" name="id" value="<?= $animal['id'] ?>">

    <input type="text" name="nombre"  value="<?= $animal['nombre'] ?>"  required><br>
    <input type="text" name="especie" value="<?= $animal['especie'] ?>" required><br>
    <input type="number" name="edad"  value="<?= $animal['edad'] ?>"><br>

    <button type="submit">Guardar</button>
    <a href="index.php">Cancelar</a>
  </form>

</body>
</html>