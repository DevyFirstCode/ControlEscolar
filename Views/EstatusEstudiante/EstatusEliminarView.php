<?php
include_once __DIR__ . '/../../Controller/EstatusEstController.php';

$estatusController = new EstatusEstController();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $estatusId = $_POST['EstatusId'];
    $resultado = $estatusController->eliminarEstatusEst($estatusId);

    if ($resultado) {
        echo "<script>alert('Estatus eliminado exitosamente.');</script>";
    } else {
        echo "<script>alert('Error al eliminar el estatus.');</script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Eliminar Estatus</title>
    <style>
        form { width: 300px; margin: 40px auto; }
        label { display: block; margin-top: 10px; }
        input[type="number"] { width: 100%; padding: 6px; }
        button { margin-top: 15px; padding: 8px 16px; }
    </style>
</head>
<body>
    <h2 style="text-align:center;">Eliminar Estatus</h2>
    <form method="post" action="">
        <label for="EstatusId">ID de Estatus a eliminar:</label>
        <input type="number" id="EstatusId" name="EstatusId" required>

        <button type="submit">Eliminar Estatus</button>
    </form>
</body>
</html>