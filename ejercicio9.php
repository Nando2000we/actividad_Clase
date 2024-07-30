<?php
$archivo="prueba.txt";
echo (touch($archivo))? "Archivo existente":"Archivo no existe";//el touch te lo crea el arhivo en caso de que 
echo "<br>";
//no exista,igual si existe verifica si existe o no 
//$datos=fopen($archivo,"a");
//var_dump($datos);
//fclose($datos);
//array
if (touch($archivo)) {
    # code...
    $datos=fopen($archivo,"wa");
    fwrite($datos,"Hoy es lunes\n");
    fwrite($datos,"Hoy es lunes de clases \n");
    fclose($datos);
$datos=fopen($archivo,"r");
while (!feof($datos)) {
    # code...
    $linea=fgets($datos,1024);
    echo $linea ."<br>";
}
fclose($datos);
}
else {
    # code...
   echo "error";

}

?>