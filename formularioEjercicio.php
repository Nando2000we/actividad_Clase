<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars($_POST['nombre']);
    $apellido = htmlspecialchars($_POST['apellido']);
    $carrera = htmlspecialchars($_POST['carrera']);

    $archivo = "datos_" . date("Ymd_His") . ".txt";

    if (touch($archivo)) {
      
        $datos = fopen($archivo, "w");
        if ($datos) {
          
            $contenido = "Nombre: $nombre\nApellido: $apellido\nCarrera: $carrera\n";
            
           
            fwrite($datos, $contenido);
            
          
            fclose($datos);

            echo "Archivo '$archivo' creado con éxito.";
        } else {
            echo "Error al abrir el archivo para escribir.";
        }
    } else {
        echo "Error al crear el archivo.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario de Datos</title>
</head>
<body>
    <h1>Formulario de Datos</h1>
    <form action="" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br><br>

        <label for="apellido">Apellido:</label>
        <input type="text" id="apellido" name="apellido" required><br><br>

        <label for="carrera">Carrera:</label>
        <input type="text" id="carrera" name="carrera" required><br><br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>
