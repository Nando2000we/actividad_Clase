<?php
$producto=$_GET['nombre'];
$monto=$_GET['cantidad'];
$edad=$_GET['edad'];
$iva=$_GET['iva'];
$monto_iva=0;
//funciones
/*function mostrar($mensaje)
{
    //$mensaje="Hola Buen Dia";
    echo $mensaje;
}
mostrar(1);*/
//compra 13%
//venta 3%
function ConIva($monto)//calcularMonto($monto)
{
    //echo $mensaje;
    $monto_iva=$monto+($monto*0.13);
    return $monto_iva;
}
//mostrar(1);
function SinIva($monto)
{
    $monto_iva=$monto-($monto*0.13);
    return $monto_iva;
}
// Mostrar el resultado según el valor de IVA
/*echo "Resultado: " . (($iva == 'true') ? ConIva($monto) : SinIva($monto)) . "<br>";

// Verificar la edad para la compra
echo "Edad: " . (($edad >= 18) ? "Puedes realizar la compra" : "No puedes realizar la compra");*/
///////////////////
try {
    echo "Resultado: " . (($iva == "true") ? ConIva($monto) : SinIva($monto));
} catch (\TypeError $th) {
    echo "Error: " . $th->getMessage();
}

echo "<br>Edad: " . (($edad >= 18) ? "Puedes realizar la compra" : "No puedes realizar la compra");
/////////////////////
//Segundo Ejercicio
//Array de notas y calcular el promedio de 10 estudiantes
echo"<br>";
echo "Segundo Ejercicio"."<br>";
function promedio(int|float ...$notas):int|float
{
$suma=0;
foreach ($notas as $nota ) {
    # code...
    $suma+=$nota;
}
   $prom=$suma/count($notas);
   return $prom;
   //yield $suma;
   //yield $nota
}
echo "El promedio de nota es: " . promedio(45, 56.6, 44, 22, 60);



?>
