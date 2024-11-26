<form method="post" action="formulario.php">
    <input type="text" name="nombre" placeholder="Nombre" required>
    <input type="text" name="apellidos" placeholder="Apellidos" required>
    <input type="password" name="contrasena" placeholder="Contraseña" required>
    <!-- Otros campos como rol, género, etc. -->
    <input type="hidden" name="opcion" value="A"> <!-- 'A' para agregar, 'M' para modificar, 'E' para eliminar -->
    <button type="submit">Enviar</button>
</form>