<?php
$texto = "Hola mundo";

function Palabras($texto)
{
    $palabra = str_word_count($texto, 1);
    return count($palabra);
}

function Caracteres($texto)
{
    return strlen($texto);
}

function frecuenciaLetras($texto)
{
   
    $texto = strtolower($texto);
    $texto = str_replace(' ', '', $texto);
    $letras = str_split($texto);

 
    $frecuenciaLetras = array_count_values($letras);

    return $frecuenciaLetras;
}

echo "Texto: " . $texto . "<br>";
echo "Numero de Palabras: " . Palabras($texto) . "<br>";
echo "Numero de Caracteres: " . Caracteres($texto) . "<br>";
echo "Frecuencia de Letras: <br>";


$frecuencia = frecuenciaLetras($texto);

foreach ($frecuencia as $letra => $conteo) {
    echo $letra . ": " . $conteo . "<br>";
}
?>
