<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <link rel="stylesheet" href="../bootstrap_css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/inicioSesion.css">
    <title>Inicio de Sesión</title>
</head>
<body>
    <div class="container">
        <h1 class="title" id="ITitulo"> 
            Inicia sesión o crea tu cuenta!
        </h1>
        <div class="center" id="InicioDeSesion">
            <form id="IniSesForm">
                <div class="form-group">
                    <label for="User" id="UserIni">Usuario</label>
                    <input type="text" id="User" class="form-control" placeholder="Aprendizaje3000">
                </div>
                <div class="form-group">
                    <label for="Contraseña" id="PasswordIni">Contraseña</label>
                    <input type="password" id="Contraseña" class="form-control" placeholder="********">
                </div>
                <hr>
                <div class="Botones">
                    <button type="button" onclick="redirigirindex()" id="btnIniSes" class="btn btn-primary">Iniciar Sesión</button>
                    <button type="button" onclick="redirigirRegistro()" id="btnReg" class="btn btn-secondary">Registrarse</button>
                </div>
            </form>
        </div>
    </div>
    <script>
        function redirigirRegistro() {
            window.location.href = "../views/registro.php";
        }
        function redirigirindex() {
            window.location.href = "../views/index.php";
        }
    </script>

</body>
</html>
