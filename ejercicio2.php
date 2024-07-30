<?php
$cliente="Fernando Sanchez";
//saber el tamaño de la cadena
print(strlen($cliente));//saber el tamaño del string
echo"<br>";
var_dump($cliente);//saber el tamaño de la cadena
//limpiar los espacios en blanco
echo"<br>";
$texto=" Fernando Batallanos ";
var_dump($texto);
$texto2=strlen(trim($texto));
echo $texto2."<br>";
//Convertir mayusculas y minusculas
echo(strtolower($cliente));
echo "<br>";
echo(strtoupper($texto));
//
var_dump(strtolower($cliente)===strtolower($texto));
//remplazar 
echo "<br>";
echo str_replace("Fernando","Jose",$cliente);
//Buscar posicion
echo"<br>";
echo strpos($cliente,"Sanchez");
//Buscar
echo "<br>";
echo substr_count($cliente,"e");
//dividir cadena
$cadena=explode("r",$texto);
var_dump($cadena);
//unir cadena
echo "<br>";
$cadena=implode("e",$cadena);
var_dump($cadena);
//////////////Ejercicio Clase/////////////////////
$usuario = "administrador";
$contraseña = "73454973";
$Repetir = "73454973";
echo "<br>";
// Mostrar las variables
echo "Usuario: " . $usuario . "<br>";
echo "Contraseña: " . $contraseña . "<br>";
echo "Repetir Contraseña: " . $Repetir . "<br>";
////
//dividir cadena
$cadena=explode("i",$usuario);
var_dump($cadena);
//unir cadena
//echo "<br>";
//$cadena=implode("e",$cadena);
//var_dump($cadena);
//True o False
echo "<br>";
var_dump($contraseña===$Repetir);
//Buscar posicion
echo "<br>";
echo substr_count($cadena[0],"m");
echo "<br>";
echo substr_count($cadena[1],"m");
echo "<br>";
echo substr_count($cadena[2],"m");
?>