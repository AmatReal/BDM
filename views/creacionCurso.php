<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Curso</title>
    <link href="../bootstrap_css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/creacionCurso.css">
</head>
<body>
    <?php include('../comp/header.php'); ?>

    <div class="container mt-4">
        <div class="mb-3">
            <button type="button" class="btn btn-morado">Borrar</button>
            <button type="button" class="btn btn-morado">Guardar Borrador</button>
            <button type="button" class="btn btn-morado">Publicar</button>
        </div>


        <div class="form-group">
            <label for="tituloCurso">Título del Curso</label>
            <input type="text" class="form-control" id="tituloCurso" placeholder="Ingresa el título del curso">
        </div>


        <div class="form-group">
            <label for="nivelCurso">Niveles del Curso</label>
            <input type="number" class="form-control" id="nivelCurso" placeholder="Ingresa el número de niveles">
        </div>

        <div class="form-group">
            <label for="nivelCurso">Costo</label>
            <input type="number" class="form-control" id="nivelCurso" placeholder="Ingresa el costo del grupo o si es gratuito">
        </div>


        <div class="form-group">
            <label for="dificultadCurso">Dificultad</label>
            <select class="form-control" id="dificultadCurso">
                <option>Básico</option>
                <option>Intermedio</option>
                <option>Avanzado</option>
            </select>
        </div>
        

        <div class="form-group">
            <label for="categorias">Etiquetas de Categorías</label>
            <input type="text" class="form-control" id="categorias" placeholder="Ingresa etiquetas, separadas por comas" list="listaCategorias">
            <datalist id="listaCategorias">
                <option value="Programación">
                <option value="Diseño Gráfico">
                <option value="Marketing">
                <option value="Negocios">
            </datalist>
        </div>


        <div class="form-group">
            <label for="archivosCurso">Subir Archivos</label>
            <input type="file" class="form-control-file" id="archivosCurso" multiple>
        </div>


        <div class="form-group">
            <label for="imagenPortada">Imagen de Portada</label>
            <input type="file" class="form-control-file" id="imagenPortada">
        </div>


        <div class="form-group">
            <label for="software">Software Empleado</label>
            <input type="text" class="form-control" id="software" placeholder="Ingresa el software empleado">
        </div>


        <div class="form-group">
            <label for="fechaPublicacion">Fecha de Publicación</label>
            <input type="date" class="form-control" id="fechaPublicacion">
        </div>

        
        <div class="form-group">
            <label for="infoAdicional">Información Adicional</label>
            <textarea class="form-control" id="infoAdicional" rows="3" placeholder="Enlaces, información del instructor, etc."></textarea>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <?php include('../comp/footer.php'); ?>
</body>
</html>
