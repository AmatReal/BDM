<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="../bootstrap_css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/Index.css">
       
    </head>
    <body>
    <?php include('../comp/header.php'); ?>

          <div class="row">
            <div class="col-lg-2">

            </div>
            <div class="col-lg-8">
              
            <h2>Cursos más populares del momento</h2>
            <div id="courseCarousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#courseCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#courseCarousel" data-slide-to="1"></li>
                    <li data-target="#courseCarousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <a href="verCurso.php?curso=1">                      
                          <img src="../img/cursoAnim.jpg" class="d-block w-100" alt="Curso 1">
                        </a>
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Curso 1: Introducción a la Animación</h5>
                            <p>Categoría: Animación, Arte Digital</p>
                            <div>
                                <span class="text-warning">&#9733;</span>
                                <span class="text-warning">&#9733;</span>
                                <span class="text-warning">&#9733;</span>
                                <span class="text-warning">&#9733;</span>
                                <span class="text-muted">&#9734;</span>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="../img/cursoRig.jpg" class="d-block w-100" alt="Curso 2">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Curso 2: Rigging Avanzado</h5>
                            <p>Categoría: Modelado 3D, Animación</p>
                            <div>
                                <span class="text-warning">&#9733;</span>
                                <span class="text-warning">&#9733;</span>
                                <span class="text-warning">&#9733;</span>
                                <span class="text-warning">&#9733;</span>
                                <span class="text-warning">&#9733;</span>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="../img/cursoSculpt.jpg" class="d-block w-100" alt="Curso 3">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Curso 3: Escultura Digital</h5>
                            <p>Categoría: Escultura 3D, Arte Digital</p>
                            <div>
                                <span class="text-warning">&#9733;</span>
                                <span class="text-warning">&#9733;</span>
                                <span class="text-warning">&#9733;</span>
                                <span class="text-muted">&#9734;</span>
                                <span class="text-muted">&#9734;</span>
                            </div>
                        </div>
                    </div>
                </div>

                <a class="carousel-control-prev" href="#courseCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#courseCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

            
            <div class="row mt-5">
                <div class="col-lg-12">
                <h2>Lo más nuevo</h2>
                <div id="newCoursesCarousel" class="carousel slide" data-ride="carousel" data-interval="false">
                    <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                        <div class="col-md-3">
                            <img src="../img/curso1.jpg" class="d-block w-100" alt="Curso 1">
                            <h5>Nuevo Curso 1</h5>
                        </div>
                        <div class="col-md-3">
                            <img src="../img/curso2.jpg" class="d-block w-100" alt="Curso 2">
                            <h5>Nuevo Curso 2</h5>
                        </div>
                        <div class="col-md-3">
                            <img src="../img/curso3.jpg" class="d-block w-100" alt="Curso 3">
                            <h5>Nuevo Curso 3</h5>
                        </div>
                        <div class="col-md-3">
                            <img src="../img/curso4.jpg" class="d-block w-100" alt="Curso 4">
                            <h5>Nuevo Curso 4</h5>
                        </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                        <div class="col-md-3">
                            <img src="../img/curso5.jpg" class="d-block w-100" alt="Curso 5">
                            <h5>Nuevo Curso 5</h5>
                        </div>
                        <div class="col-md-3">
                            <img src="../img/curso6.jpg" class="d-block w-100" alt="Curso 6">
                            <h5>Nuevo Curso 6</h5>
                        </div>
                        <div class="col-md-3">
                            <img src="../img/curso7.jpg" class="d-block w-100" alt="Curso 7">
                            <h5>Nuevo Curso 7</h5>
                        </div>
                        <div class="col-md-3">
                            <img src="../img/curso8.jpg" class="d-block w-100" alt="Curso 8">
                            <h5>Nuevo Curso 8</h5>
                        </div>
                        </div>
                    </div>
                    </div>

                <a class="carousel-control-prev" href="#newCoursesCarousel" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#newCoursesCarousel" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
            </div>
            </div>
        </div>

        
        <div class="row mt-3">
            <div class="col-lg-12 text-center">
              <a class="btn btn-primary btn-lg" href="../views/explorar.php">Ver más cursos</a>
            </div>
        </div>

        </div>
            <div class="col-lg-2">

            </div>
        </div>
    
        <?php include('../comp/footer.php'); ?>

          <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
          <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
          <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
          
    </body>
</html>