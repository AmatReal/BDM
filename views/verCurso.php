<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver Curso</title>


    <link rel="stylesheet" href="../bootstrap_css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/verCurso.css">


    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

    <style>
        .rating {
            display: flex;
            align-items: center;
        }

        .rating .stars {
            color: #ffd700;
            margin-right: 10px;
        }

        .review-count {
            margin-left: 10px;
            color: #6c757d;
        }

        .comments-section .comment {
            margin-bottom: 20px;
            padding: 10px;
            border-radius: 10px;
            background-color: #f8f9fa;
        }

        .comments-section .comment h6 {
            margin-bottom: 5px;
            font-weight: bold;
        }

        .comments-section .comment p {
            margin-bottom: 0;
        }
    </style>
</head>

<body>
    <?php include('../comp/header.php'); ?>

    <div class="container mt-4">
        <div class="row">

            <div class="col-lg-8">

                <h1>Blender para principiantes</h1>
                <p><strong>Por Carlos Sifuentes Haro</strong>, Artista digital generalista</p>


                <div class="rating mt-3 mb-4">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <span>4.5/5</span>
                    <span class="review-count">(1,100 reseñas)</span>
                </div>


                <ul class="nav nav-tabs" id="courseTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="presentation-tab" data-toggle="tab" href="#presentation" role="tab" aria-controls="presentation" aria-selected="true">Presentación</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="content-tab" data-toggle="tab" href="#content" role="tab" aria-controls="content" aria-selected="false">Contenidos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="community-tab" data-toggle="tab" href="#community" role="tab" aria-controls="community" aria-selected="false">Comunidad</a>
                    </li>
                </ul>

                <div class="tab-content mt-4">

                    <div class="tab-pane fade show active" id="presentation" role="tabpanel" aria-labelledby="presentation-tab">
                        <p class="mt-4">
                            Este curso está diseñado para principiantes que quieren aprender a usar Blender para crear personajes en 3D.
                            Se explorarán temas como modelado, rigging, texturización y animación básica.
                        </p>
                        <div class="presentation-video">
                            <video width="720" height="405" controls>
                                <source src="../img/video1.mp4" type="video/mp4">
                                Tu navegador no soporta la etiqueta de video.
                            </video>
                        </div>
                    </div>


                    <div class="tab-pane fade" id="content" role="tabpanel" aria-labelledby="content-tab">
                        <h3>Contenido del curso</h3>
                        <ul class="list-group">
                            <li class="list-group-item">
                                Curso 1: Introducción e interfaz
                                <ul>
                                    <li>U1: Bienvenida</li>
                                    <li>U2: ¿Qué es Blender y cómo obtenerlo?</li>
                                    <li>U3: Espacios de trabajo</li>
                                </ul>
                            </li>
                            <li class="list-group-item">
                                Curso 2: Creación y edición de objetos
                                <ul>
                                    <li>U1: Edición de geometría por vértices</li>
                                    <li>U2: Modificadores</li>
                                </ul>
                            </li>

                        </ul>
                    </div>


                    <div class="tab-pane fade" id="community" role="tabpanel" aria-labelledby="community-tab">
                        <h3>Comentarios de la comunidad</h3>
                        <div class="comments-section">
                            <div class="comment">
                                <h6>Juan Pérez</h6>
                                <p>"Este curso fue genial, aprendí mucho sobre cómo usar Blender. El contenido está muy bien estructurado."</p>
                            </div>
                            <div class="comment">
                                <h6>Ana Gómez</h6>
                                <p>"Me encantó la claridad con la que el instructor explica cada paso. Recomiendo este curso a cualquiera que quiera iniciarse en 3D."</p>
                            </div>
                            <div class="comment">
                                <h6>Pedro Ramírez</h6>
                                <p>"Muy buen curso para principiantes, cubre todo lo necesario para empezar a usar Blender desde cero."</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-lg-4">
                <div class="course-info-sidebar">
                    <h5>7 cursos incluidos</h5>
                    <ul class="list-unstyled">
                        <li><i class="fas fa-thumbs-up"></i> 94% valoraciones positivas (1.1K)</li>
                        <li><i class="fas fa-users"></i> 66.193 estudiantes</li>
                        <li><i class="fas fa-clock"></i> 52 lecciones (7h 36m)</li>
                        <li><i class="fas fa-folder"></i> 7 cursos</li>
                        <li><i class="fas fa-file-alt"></i> 14 recursos adicionales</li>
                        <li><i class="fas fa-globe"></i> Online y a tu ritmo</li>
                        <li><i class="fas fa-mobile-alt"></i> Disponible en la app</li>
                        <li><i class="fas fa-headphones"></i> Audio: Español</li>
                        <li><strong>Nivel:</strong> Iniciación</li>
                        <li><strong>Acceso ilimitado para siempre</strong></li>
                    </ul>

                    <h5>Categoría</h5>
                    <p>3D y Animación</p>

                    <h5>Áreas</h5>
                    <p>3D, Animación 3D, Diseño 3D</p>

                    <h5>Software recomendado</h5>
                    <p>Blender</p>
                </div>
            </div>
        </div>
    </div>


    <?php include('../comp/footer.php'); ?>

</body>

</html>