<?php
include_once __DIR__ . "/../../Controller/PeriodoController.php";

$periodoControllerObj = new PeriodoController();


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $periodoId = $_POST['PeriodoId'];
    $nombrePeriodo = $_POST['NombrePeriodo'];

    // Llamar al método para editar el periodo
    $resultado = $periodoControllerObj->editarPeriodo($periodoId, $nombrePeriodo);

    if ($resultado) {
        echo "<script>alert('Periodo actualizado exitosamente.');</script>";
    } else {
        echo "<script>alert('Error al actualizar el periodo.');</script>";
    }
}

?>


<!DOCTYPE html>
<html>
<head>
    <title>Editar Periodo</title>
    <style>
        form { width: 300px; margin: 40px auto; }
        label { display: block; margin-top: 10px; }
        input[type="text"], input[type="number"] { width: 100%; padding: 6px; }
        button { margin-top: 15px; padding: 8px 16px; }
    </style>
</head>
<body>
    <h2 style="text-align:center;">Editar Periodo</h2>
    <form method="post" action="">
        <label for="PeriodoId">Periodo ID:</label>
        <input type="number" id="PeriodoId" name="PeriodoId" required>

        <label for="NombrePeriodo">Nombre del Periodo:</label>
        <input type="text" id="NombrePeriodo" name="NombrePeriodo" required>

        <button type="submit">Actualizar Información</button>
    </form>
</body>
</html>