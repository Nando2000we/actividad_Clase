<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Inicio de Sesión</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f2f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .form-container {
            width: 400px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            background-color: #ffffff;
        }

        .form-container h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        .form-container input[type="text"],
        .form-container input[type="email"],
        .form-container textarea,
        .form-container select {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            transition: border-color 0.3s;
        }

        .form-container input[type="submit"] {
            width: 100%;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
            padding: 12px;
            border-radius: 5px;
            font-size: 16px;
            transition: background-color 0.3s;
        }

        .form-container input[type="submit"]:hover {
            background-color: #45a049;
        }

        .form-container .radio-group,
        .form-container .checkbox-group {
            margin-bottom: 10px;
        }

        .error {
            color: red;
            font-size: 12px;
            margin-top: -8px;
            margin-bottom: 10px;
        }

        .input-error {
            background-color: #ff3936;
        }
    </style>
</head>
<body>

<?php
if (isset($_POST['bandera'])) {
    $camposRequeridos = [
        "nombre" => "Nombre",
        "apellido" => "Apellido",
        "correo" => "Correo",
        "comentario" => "Comentario",
        "idioma" => "Idioma",
        "musica" => "Música",
        "pasatiempo" => "Pasatiempo"
    ];

    $errores = [];

    function validarLongitudComentario($comentario) {
        return strlen($comentario) >= 5 && strlen($comentario) <= 50;
    }

    function validarCaracteresEspeciales($comentario) {
        return preg_match('/[*%&.@]/', $comentario) === 0;
    }

    function validarLongitudNombreApellido($valor) {
        return strlen($valor) > 3 && strlen($valor) < 20;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        foreach ($camposRequeridos as $campo => $nombreCampo) {
            if (empty($_POST[$campo])) {
                $errores[$campo] = "El campo '$nombreCampo' no puede estar vacío.";
            } else {
                if ($campo === 'comentario') {
                    $comentario = $_POST[$campo];
                    if (!validarLongitudComentario($comentario)) {
                        $errores[$campo] = "El comentario debe tener entre 5 y 50 caracteres.";
                    }
                    if (!validarCaracteresEspeciales($comentario)) {
                        $errores[$campo] = "El comentario no puede contener /[*%&.@]/";
                    }
                }

                if ($campo === 'nombre' || $campo === 'apellido') {
                    $valor = $_POST[$campo];
                    if (!validarLongitudNombreApellido($valor)) {
                        $errores[$campo] = "El $nombreCampo debe tener entre 3 y 20 caracteres.";
                    }
                }
            }
        }

        if (empty($errores)) {
            echo "Formulario enviado exitosamente.<br>";
            foreach ($camposRequeridos as $campo => $nombreCampo) {
                if (is_array($_POST[$campo])) {
                    echo "$nombreCampo: " . implode(", ", array_map('htmlspecialchars', $_POST[$campo])) . "<br>";
                } else {
                    echo "$nombreCampo: " . htmlspecialchars($_POST[$campo]) . "<br>";
                }
            }
        }
    }
}
?>

<div class="form-container">
    <h2>Formulario</h2>
    <form action="" method="post">
        <input type="text" name="nombre" placeholder="Nombre" class="<?php echo isset($errores['nombre']) ? 'input-error' : ''; ?>" value="<?php echo isset($_POST['nombre']) ? htmlspecialchars($_POST['nombre']) : ''; ?>">
        <?php if (isset($errores['nombre'])) echo '<p class="error">' . $errores['nombre'] . '</p>'; ?>

        <input type="text" name="apellido" placeholder="Apellido" class="<?php echo isset($errores['apellido']) ? 'input-error' : ''; ?>" value="<?php echo isset($_POST['apellido']) ? htmlspecialchars($_POST['apellido']) : ''; ?>">
        <?php if (isset($errores['apellido'])) echo '<p class="error">' . $errores['apellido'] . '</p>'; ?>

        <input type="email" name="correo" placeholder="Correo" class="<?php echo isset($errores['correo']) ? 'input-error' : ''; ?>" value="<?php echo isset($_POST['correo']) ? htmlspecialchars($_POST['correo']) : ''; ?>">
        <?php if (isset($errores['correo'])) echo '<p class="error">' . $errores['correo'] . '</p>'; ?>

        <textarea name="comentario" placeholder="Comentario" class="<?php echo isset($errores['comentario']) ? 'input-error' : ''; ?>"><?php echo isset($_POST['comentario']) ? htmlspecialchars($_POST['comentario']) : ''; ?></textarea>
        <?php if (isset($errores['comentario'])) echo '<p class="error">' . $errores['comentario'] . '</p>'; ?>

        <select name="idioma" class="<?php echo isset($errores['idioma']) ? 'input-error' : ''; ?>">
            <option value="">Selecciona un idioma</option>
            <option value="español" <?php echo (isset($_POST['idioma']) && $_POST['idioma'] == 'español') ? 'selected' : ''; ?>>Español</option>
            <option value="ingles" <?php echo (isset($_POST['idioma']) && $_POST['idioma'] == 'ingles') ? 'selected' : ''; ?>>Inglés</option>
            <option value="frances" <?php echo (isset($_POST['idioma']) && $_POST['idioma'] == 'frances') ? 'selected' : ''; ?>>Francés</option>
        </select>
        <?php if (isset($errores['idioma'])) echo '<p class="error">' . $errores['idioma'] . '</p>'; ?>

        <div class="radio-group">
            <label>Música:</label><br>
            <label><input type="radio" name="musica" value="rock" <?php echo (isset($_POST['musica']) && $_POST['musica'] == 'rock') ? 'checked' : ''; ?>> Rock</label>
            <label><input type="radio" name="musica" value="pop" <?php echo (isset($_POST['musica']) && $_POST['musica'] == 'pop') ? 'checked' : ''; ?>> Pop</label>
            <label><input type="radio" name="musica" value="clasica" <?php echo (isset($_POST['musica']) && $_POST['musica'] == 'clasica') ? 'checked' : ''; ?>> Clásica</label>
            <label><input type="radio" name="musica" value="jazz" <?php echo (isset($_POST['musica']) && $_POST['musica'] == 'jazz') ? 'checked' : ''; ?>> Jazz</label>
            <?php if (isset($errores['musica'])) echo '<p class="error">' . $errores['musica'] . '</p>'; ?>
        </div>

        <div class="checkbox-group">
            <label>Pasatiempos:</label><br>
            <label><input type="checkbox" name="pasatiempo[]" value="leer" <?php echo (isset($_POST['pasatiempo']) && in_array('leer', $_POST['pasatiempo'])) ? 'checked' : ''; ?>> Leer</label>
            <label><input type="checkbox" name="pasatiempo[]" value="deporte" <?php echo (isset($_POST['pasatiempo']) && in_array('deporte', $_POST['pasatiempo'])) ? 'checked' : ''; ?>> Deporte</label>
            <label><input type="checkbox" name="pasatiempo[]" value="cocinar" <?php echo (isset($_POST['pasatiempo']) && in_array('cocinar', $_POST['pasatiempo'])) ? 'checked' : ''; ?>> Cocinar</label>
            <label><input type="checkbox" name="pasatiempo[]" value="otro" <?php echo (isset($_POST['pasatiempo']) && in_array('otro', $_POST['pasatiempo'])) ? 'checked' : ''; ?>> Otro</label>
            <input type="text" name="nuevo_pasatiempo" placeholder="Otro pasatiempo" value="<?php echo isset($_POST['nuevo_pasatiempo']) ? htmlspecialchars($_POST['nuevo_pasatiempo']) : ''; ?>">
        </div>
        <?php if (isset($errores['pasatiempo'])) echo '<p class="error">' . $errores['pasatiempo'] . '</p>'; ?>

        <input type="submit" name="bandera" value="Enviar">
    </form>
</div>

</body>
</html>
