<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporte de Usuarios</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="reporte.css">
    <?php include('../comp/header.php'); ?>
</head>
<body>
<div class="container mt-5">
    <h1>Reporte de Usuarios</h1>

    <form method="GET" action="reporte.php">
        <div class="form-group">
            <label for="tipo_usuario">Selecciona el tipo de usuario</label>
            <select id="tipo_usuario" name="tipo_usuario" class="form-control" onchange="this.form.submit()">
                <option value="">Selecciona</option>
                <option value="instructor" <?php if (isset($_GET['tipo_usuario']) && $_GET['tipo_usuario'] === 'instructor') echo 'selected'; ?>>Instructores</option>
                <option value="estudiante" <?php if (isset($_GET['tipo_usuario']) && $_GET['tipo_usuario'] === 'estudiante') echo 'selected'; ?>>Estudiantes</option>
            </select>
        </div>
    </form>

    <?php
  
    $instructores_dummy = [
        ['usuario' => 'instructor3D1', 'nombre' => 'Carlos Méndez', 'fecha_ingreso' => '2022-03-12', 'cantidad_cursos_ofrecidos' => 4, 'total_ganancias' => 3200.00],
        ['usuario' => 'instructor3D2', 'nombre' => 'Lucía Gómez', 'fecha_ingreso' => '2021-11-01', 'cantidad_cursos_ofrecidos' => 6, 'total_ganancias' => 4200.00]
    ];

    $estudiantes_dummy = [
        ['usuario' => 'estudiante3D1', 'nombre' => 'Roberto Díaz', 'fecha_ingreso' => '2023-01-15', 'cantidad_cursos_inscritos' => 5, 'porcentaje_cursos_terminados' => 80],
        ['usuario' => 'estudiante3D2', 'nombre' => 'Sofía Fernández', 'fecha_ingreso' => '2023-02-20', 'cantidad_cursos_inscritos' => 3, 'porcentaje_cursos_terminados' => 60]
    ];

    $tipo_usuario = isset($_GET['tipo_usuario']) ? $_GET['tipo_usuario'] : '';
    ?>

    <?php if ($tipo_usuario === 'instructor'): ?>
        <h2>Instructores</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Usuario</th>
                    <th>Nombre</th>
                    <th>Fecha de Ingreso</th>
                    <th>Cursos Ofrecidos</th>
                    <th>Total de Ganancias</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($instructores_dummy as $row): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($row['usuario']); ?></td>
                        <td><?php echo htmlspecialchars($row['nombre']); ?></td>
                        <td><?php echo htmlspecialchars(date('d M Y', strtotime($row['fecha_ingreso']))); ?></td>
                        <td><?php echo htmlspecialchars($row['cantidad_cursos_ofrecidos']); ?></td>
                        <td><?php echo htmlspecialchars(number_format($row['total_ganancias'], 2, ',', '.')); ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php elseif ($tipo_usuario === 'estudiante'): ?>
        <h2>Estudiantes</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Usuario</th>
                    <th>Nombre</th>
                    <th>Fecha de Ingreso</th>
                    <th>Cursos Inscritos</th>
                    <th>% Cursos Terminados</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($estudiantes_dummy as $row): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($row['usuario']); ?></td>
                        <td><?php echo htmlspecialchars($row['nombre']); ?></td>
                        <td><?php echo htmlspecialchars(date('d M Y', strtotime($row['fecha_ingreso']))); ?></td>
                        <td><?php echo htmlspecialchars($row['cantidad_cursos_inscritos']); ?></td>
                        <td><?php echo htmlspecialchars($row['porcentaje_cursos_terminados']) . '%'; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php endif; ?>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<?php include('../comp/footer.php'); ?>
</body>
</html>
