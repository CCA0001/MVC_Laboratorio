<!DOCTYPE html>
<html lang="es">
<head><meta charset="UTF-8"><title>Usuarios</title></head>
<body>

  <h1>Usuarios</h1>

  <form method="POST" action="index.php?accion=crear">
    <input type="text"  name="nombre" placeholder="Nombre" required>
    <input type="text" name="especie"  placeholder="especie"  required>
    <input type="number" name="edad"  placeholder="edad"  required>
    <button type="submit">Agregar</button>
  </form>

  <table cellpadding="8">
    <tr><th>ID</th><th>Nombre</th><th>Especie</th><th>Edad</th></tr>
    <?php foreach ($animal as $a): ?>
    <tr>
      <td><?= $a['id'] ?></td>
      <td><?= $a['nombre'] ?></td>
      <td><?= $a['especie'] ?></td>
      <td><?= $a['edad'] ?></td>
      <td><a href="index.php?accion=editar&id=<?= $a['id'] ?>">Editar</a></td>
      <td><a href="index.php?accion=eliminar&id=<?= $a['id'] ?>">Eliminar</a></td>
    </tr>
    <?php endforeach; ?>
  </table>

</body>
</html>