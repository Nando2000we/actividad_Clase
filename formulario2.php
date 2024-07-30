<?php
if (isset($_POST['bandera'])) {
    // Obtener la información del archivo
    $filename = $_FILES['file']['name'];
    $filetype = $_FILES['file']['type'];
    $filesize = $_FILES['file']['size'];
    $tmpname = $_FILES['file']['tmp_name'];
    $error = $_FILES['file']['error'];

    // Mostrar la información del archivo
    echo "Filename  : " . htmlspecialchars($filename) . "<br>";
    echo "Type  : " . htmlspecialchars($filetype) . "<br>";
    echo "Size  : " . htmlspecialchars($filesize) . "<br>";
    echo "Temp name  : " . htmlspecialchars($tmpname) . "<br>";
    echo "Error  : " . htmlspecialchars($error);
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Formulario</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="">
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="file" id="" >
        <input type="hidden" name="bandera">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
