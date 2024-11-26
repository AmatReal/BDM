<!-- header.php -->
<link rel="stylesheet" href="../bootstrap_css/bootstrap.min.css">
<link rel="stylesheet" href="../css/header.css">

<nav class="navbar navbar-expand-lg navbar-custom">
    <a class="navbar-icon" href="#"> 
        <img src="../img/LogoBDMTransparente.png" style="height: 30px;">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="../views/Index.php">Inicio <span class="sr-only">(current)</span></a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Cursos
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="../views/explorar.php">Explorar</a>
            <a class="dropdown-item" href="../views/creacionCurso.php">Crear</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="../views/kardex.php">Kardex</a>
            <a class="dropdown-item" href="../views/ventas.php">Ventas</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="../views/chat.php">Chats</a>
          </div>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="../views/perfil.php">Perfil</a>
        </li>

        <li class="nav-item">
          <a class="nav-link disabled" href="../views/reporte.php">Reporte de usuarios</a>
        </li>
      </ul>
      <form class="form-inline mx-auto">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-search my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
    <a class="nav-InicioSesion" href="inicioSesion.php">Iniciar Sesion</a>
    <a class="nav-Registro" href="registro.php">Registrate gratis</a>
</nav>