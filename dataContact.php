<?php
include ("conection.php");
try {
    $fecha = date("Y-m-d H:i:s");

    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $asunto = $_POST["asunto"];
    $comentario = $_POST["comentario"];

    $stmt = $pdo->prepare("INSERT INTO contacto (fecha, correo, nombre, asunto, comentario) VALUES (?, ?, ?, ?, ?)");

    $stmt->execute([$fecha, $email, $nombre, $asunto, $comentario]);

    echo '<script type="text/javascript">alert("Datos insertados correctamente");</script>';
} catch (PDOException $e) {
    echo '<script type="text/javascript">alert("Error al insertar datos: ' . $e->getMessage() . '");</script>';
} finally {
    $pdo = null;
}
?>