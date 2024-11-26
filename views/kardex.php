<?php
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kardex de Cursos</title>
    <link rel="stylesheet" href="../bootstrap_css/bootstrap.min.css">
    <?php include('../comp/header.php'); ?>
</head>
<body>
    <div class="container mt-4">
        <h1 class="mb-4">Kardex de Cursos</h1>
        <form id="filtros-form" class="mb-4">
            <div class="row mb-3">
                <div class="col-md-4">
                    <label for="fecha-inicio">Fecha de Inicio:</label>
                    <input type="date" id="fecha-inicio" name="fecha-inicio" class="form-control">
                </div>
                <div class="col-md-4">
                    <label for="fecha-fin">Fecha de Fin:</label>
                    <input type="date" id="fecha-fin" name="fecha-fin" class="form-control">
                </div>
                <div class="col-md-4">
                    <label for="categoria">Categoría:</label>
                    <select id="categoria" name="categoria" class="form-control">
                        <option value="">Todas</option>
                        
                        <option value="rigging">Rigging</option>
                        <option value="diseño">Diseño</option>
                        <option value="blender">Blender</option>
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="estado">Estado:</label>
                    <select id="estado" name="estado" class="form-control">
                        <option value="">Todos</option>
                        <option value="terminado">Solo Cursos Terminados</option>
                        <option value="activo">Solo Cursos Activos</option>
                    </select>
                </div>
                <div class="col-md-6 d-flex align-items-end">
                    <button type="submit" class="btn btn-primary">Filtrar</button>
                </div>
            </div>
        </form>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Curso</th>
                    <th>Fecha de Inscripción</th>
                    <th>Última Fecha de Ingreso</th>
                    <th>Progreso</th>
                    <th>Estado</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Riggeo de personajes</td>
                    <td>2024-01-15</td>
                    <td>2024-09-10</td>
                    <td>75%</td>
                    <td>Activo</td>
                </tr>
                <tr>
                    <td>Diseño orgánico</td>
                    <td>2024-03-22</td>
                    <td>2024-09-01</td>
                    <td>100%</td>
                    <td>Terminado</td>
                </tr>
                <tr>
                    <td>Principios de Blender</td>
                    <td>2024-05-10</td>
                    <td>2024-09-15</td>
                    <td>50%</td>
                    <td>Activo</td>
                </tr>
            </tbody>
        </table>
    </div>
    <?php include('../comp/footer.php'); ?>
</body>
</html>
