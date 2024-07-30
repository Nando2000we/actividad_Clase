<?php
session_start();

if (isset($_SESSION['nombre']) && isset($_SESSION['foto_data']) && isset($_SESSION['expediente_data'])) {
    $nombre = $_SESSION['nombre'];
    $foto_data = base64_decode($_SESSION['foto_data']);
    $expediente_data = base64_decode($_SESSION['expediente_data']);

    echo "Nombre: " . htmlspecialchars($nombre) . "<br>";
    echo "Foto: <img src='data:image/png;base64," . $_SESSION['foto_data'] . "' alt='Foto'><br>";
    echo "Expediente: <a href='data:application/pdf;base64," . $_SESSION['expediente_data'] . "' download='expediente.pdf'>Descargar Expediente</a><br>";

    // Limpiar la sesión
    session_unset();
    session_destroy();
} else {
    echo "No se han encontrado datos en la sesión.";
}
?>
