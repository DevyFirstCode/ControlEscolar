<?php
include_once __DIR__ .( "/../../Controller/TipoUsuarioController.php");

$tipoUsuarioController = new TipoUsuarioController();

if (isset($_POST['nombre'])) {
    $nombreTipo = $_POST['nombre'];
    $fechaRegistro = $_POST['fecha'];

    // Llamar al método para crear el objeto y registrar el tipo de usuario
    $resultado = $tipoUsuarioController->crearTipoUsuario($nombreTipo, $fechaRegistro);

    if ($resultado) {
        echo "Tipo de usuario registrado exitosamente.";
    } else {
        echo "Error al registrar el tipo de usuario.";
    }
}
?>

<form method="post">
    <label for="nombre">Nombre del Tipo de Usuario:</label>
    <input type="text" id="nombre" name="nombre" required>
    <br><br>
    <label for="fecha">Fecha de Registro:</label>
    <input type="date" id="fecha" name="fecha" required>
    <br><br>
    <input type="submit" value="Registrar">
</form>