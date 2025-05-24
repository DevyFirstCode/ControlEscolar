<?php
require_once __DIR__ . "/../../Controller/CarreraController.php";

$carreraController = new CarreraController();
$carreras = $carreraController->listarCarreras();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Listado de Carreras</title>
    <style>
        table { border-collapse: collapse; width: 50%; margin: 20px auto; }
        th, td { border: 1px solid #333; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>
    <h2 style="text-align:center;">Listado de Carreras</h2>
    <table>
        <thead>
            <tr>
                <th>Clave</th>
                <th>Nombre de la Carrera</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($carreras)): ?>
                <?php foreach ($carreras as $carrera): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($carrera['Clave']); ?></td>
                        <td><?php echo htmlspecialchars($carrera['Nombre']); ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="2">No hay carreras registradas.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</body>
</html>