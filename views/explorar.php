<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="explorar.css">
    <style>
        .btn-purple {
            background-color: #6f42c1;
            color: white;
        }
        .btn-purple:hover {
            background-color: #5a34a1;
        }
    </style>
    <title>Explorar Cursos</title>
    <?php include('../comp/header.php'); ?>
</head>
<body class="bg-light">

    <div class="container-fluid">
        <div class="row">
            
            <nav class="col-md-3 bg-dark text-white p-4">
                <h4>Filtros</h4>
                <form>
                    <div class="form-group">
                        <label for="alfabeto">Alfabeto</label>
                        <select class="form-control" id="alfabeto">
                            <option value="">Selecciona</option>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="tema">Tema</label>
                        <select class="form-control" id="tema">
                            <option value="">Selecciona</option>
                            <option value="Modelado">Modelado</option>
                            <option value="Animación">Animación</option>
                            
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="profesor">Profesor</label>
                        <input type="text" class="form-control" id="profesor" placeholder="Buscar profesor">
                    </div>
                    <div class="form-group">
                        <label for="precio">Precio</label>
                        <input type="number" class="form-control" id="precio" placeholder="Máximo precio">
                    </div>
                    <button type="submit" class="btn btn-purple">Filtrar</button>
                </form>
            </nav>

            
            <main class="col-md-9 p-4">
                <h2>Cursos Disponibles</h2>
                <div class="row">
                    
                    <?php
                    
                    $cursos = [
                        ['titulo' => 'Curso de Modelado 3D', 'precio' => '50', 'imagen' => '../img/curso1.jpg'],
                        ['titulo' => 'Animación en 3D', 'precio' => '60', 'imagen' => '../img/curso2.jpg'],
                        ['titulo' => 'Texturización de Modelos', 'precio' => '70', 'imagen' => '../img/curso3.jpg'],
                        ['titulo' => 'Introducción a Blender', 'precio' => '55', 'imagen' => '../img/curso4.jpg'],
                        
                    ];
                    foreach ($cursos as $curso) {
                        echo '
                        <div class="col-md-3 mb-4">
                            <div class="card">
                                <img src="' . $curso['imagen'] . '" class="card-img-top" alt="' . $curso['titulo'] . '">
                                <div class="card-body">
                                    <h5 class="card-title">' . $curso['titulo'] . '</h5>
                                    <p class="card-text">Precio: $' . $curso['precio'] . '</p>
                                    <a href="#" class="btn btn-purple">Ver curso</a>
                                </div>
                            </div>
                        </div>';
                    }
                    ?>
                </div>
            </main>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.11/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
