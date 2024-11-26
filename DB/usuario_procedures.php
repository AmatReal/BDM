<?php
// usuario_procedures.php
include 'db.php';

function ejecutarStoredProcedure($opcion, $params) {
    global $conn;

    try {
        // Preparar la llamada al procedimiento almacenado
        $sql = "CALL UsuarioElimModAdd(:ID_UserSP, :CorreoSP, :UsuarioSP, :NombreSP, :ApellidosSP, :ContraseñaSP, :RolSP, :GeneroSP, :FechaNacimientoSP, :UsuarioInstructorSP, :FotoSP, :Opcion)";
        $stmt = $conn->prepare($sql);

        // Asignar valores a los parámetros
        $stmt->bindParam(':ID_UserSP', $params['ID_UserSP']);
        $stmt->bindParam(':CorreoSP', $params['CorreoSP']);
        $stmt->bindParam(':UsuarioSP', $params['UsuarioSP']);
        $stmt->bindParam(':NombreSP', $params['NombreSP']);
        $stmt->bindParam(':ApellidosSP', $params['ApellidosSP']);
        $stmt->bindParam(':ContraseñaSP', $params['ContraseñaSP']);
        $stmt->bindParam(':RolSP', $params['RolSP']);
        $stmt->bindParam(':GeneroSP', $params['GeneroSP']);
        $stmt->bindParam(':FechaNacimientoSP', $params['FechaNacimientoSP']);
        $stmt->bindParam(':UsuarioInstructorSP', $params['UsuarioInstructorSP']);
        $stmt->bindParam(':FotoSP', $params['FotoSP'], PDO::PARAM_LOB);
        $stmt->bindParam(':Opcion', $opcion);

        // Ejecutar el Stored Procedure
        $stmt->execute();
        echo "Operación realizada con éxito.";
    } catch(PDOException $e) {
        echo "Error al ejecutar el procedimiento almacenado: " . $e->getMessage();
    }
}
?>
