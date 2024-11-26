<?php
// usuario_form.php
include '../DB/usuario_procedures.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoger los datos del formulario
    $opcion = $_POST['opcion'];  // 'A' para agregar, 'M' para modificar, 'E' para eliminar
    $params = [
        'ID_UserSP' => $_POST['ID_User'],
        'CorreoSP' => $_POST['Correo'],
        'UsuarioSP' => $_POST['Usuario'],
        'NombreSP' => $_POST['Nombre'],
        'ApellidosSP' => $_POST['Apellidos'],
        'ContraseñaSP' => $_POST['Contraseña'],
        'RolSP' => $_POST['Rol'],
        'GeneroSP' => $_POST['Genero'],
        'FechaNacimientoSP' => $_POST['FechaNacimiento'],
        'UsuarioInstructorSP' => $_POST['UsuarioInstructor'],
        'FotoSP' => file_get_contents($_FILES['Foto']['tmp_name'])  // Foto como BLOB
    ];

    // Ejecutar el procedimiento almacenado
    ejecutarStoredProcedure($opcion, $params);
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <link rel="stylesheet" href="../bootstrap_css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/registro.css">
    <title>Registro</title>
</head>

<body>
    <h1 class="title" id="ITitulo">
        Crea tu cuenta!
    </h1>
    <form id="RegistroForm">
        <div class="center" id="Registro">
            <p id="CorreoReg">Correo</p>
            <input type="text" id="Correo" name="" placeholder="ejemplo@dominio.com">

            <p id="NombreReg">Nombre</p>
            <input type="text" id="Nombre" placeholder="Ingresar nombre">

            <p id="ApellidosReg">Apellidos</p>
            <input type="text" id="Apellidos" placeholder="Ingresar apellidos">

            <p id="UsuarioReg">Usuario</p>
            <input type="text" id="User" placeholder="Sé creativo!">

            <p id="PasswordReg">Contraseña</p>
            <input type="password" id="Contraseña" placeholder="*******">

            <p id="FechaReg">Fecha de Nacimiento</p>
            <input type="date" id="FechaNacimiento">



            <div class="extra-fields">
                <div class="column">


                    <p id="GeneroReg">Género</p>
                    <select id="Genero">
                        <option value="Masculino">Masculino</option>
                        <option value="Femenino">Femenino</option>
                    </select>
                </div>

                <div class="column">
                    <p id="FotoReg">Foto</p>
                    <input type="file" id="Foto" accept="image/*">
                </div>
            </div>

            <hr>
            <div class="Botones">
                <button type="button" onclick="redirigirInicioSesion()" id="btnIniSes">Iniciar Sesión</button>
                <button type="submit" id="btnReg">Registrarse</button>
            </div>
        </div>
    </form>




    <script>
        function redirigirInicioSesion() {
            window.location.href = "InicioSesion.php";
        }
    </script>
    <script src="../js/registro.js"></script>

</body>

</html>