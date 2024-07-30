<?php
//validar archivos
$carpeta = "prueba/";
$archivo = "ejercicio1.php";
$rutaCompleta = $carpeta . $archivo;


// Verificar si el archivo existe
echo (file_exists($archivo)) ? "archivo existente" : "archivo no existe";
echo "<br>";
// Verificar si es un archivo
echo (is_file($archivo)) ? "archivo existente " : "no es un archivo existente";
echo "<br>";
echo (is_dir($carpeta))? "carpeta existente":" la carpeta no existe";
//
$archivo2 ="imagen1.jpeg";
if (file_exists($carpeta.$archivo2)){
    $size=filesize($carpeta.$archivo2);
    $kb=$size/1024;
    $mb=$kb/1024;
    $creado =filectime ($carpeta.$archivo2);
    $creado_fecha=date("d/m/y H:i:s" , $creado);
    $modificado = filectime ($carpeta.$archivo2);
    $modificado_fecha=date("d/m/y H:i:s" , $modificado);
}
else
{
    echo "archivo no existe" ;
}
echo "<br>";
echo "tamaño : " . $mb ."<br>";
echo "creado  :" . $creado_fecha . "<br>";
echo "modificado :" . $modificado_fecha ."<br>";

?>