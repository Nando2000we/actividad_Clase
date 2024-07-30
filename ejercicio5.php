<?php
//sentencia if
/*$compra=$_GET['c'];
$puntos=0;
if($compra>50 & $compra<=100){
        $puntos=$puntos+5;
    }
    elseif($compra>100 && $compra<=200) 
    {
        $puntos=$puntos+15;
    }
    elseif($compra>200 && $compra<=500)
    {
     $puntos=$puntos+30;
    }
    else
    {
        $puntos=$puntos+60;
    }
    echo "cantidad de puntos " .$puntos;*/

    ////Forma Altenaria

    /*$compra = $_GET['c'];
    $puntos = ($compra > 50 && $compra <= 100) ? 5 : 
              (($compra > 100 && $compra <= 200) ? 15 : 
              (($compra > 200 && $compra <= 500) ? 30 : 
              ($compra > 500 ? 60 : 0)));
    echo "cantidad de puntos " . $puntos;*/

//Forma con el Switch
/*$compra = $_GET['c'];
$puntos = 0;
switch (true) {
    case ($compra > 50 && $compra <= 100):
        $puntos += 5;
        break;
    case ($compra > 100 && $compra <= 200):
        $puntos += 15;
        break;
    case ($compra > 200 && $compra <= 500):
        $puntos += 30;
        break;
    case ($compra >500):
          $puntos += 60;
    break;
    default:
        $puntos += 0;
        break;
}

echo "cantidad de puntos " . $puntos;*/

//While

/*$compra = $_GET['c'];
$puntos = 0;

while (true) {
    if ($compra > 50 && $compra <= 100) {
        $puntos = 5;
        break;
    }
    if ($compra > 100 && $compra <= 200) {
        $puntos = 15;
        break;
    }
    if ($compra > 200 && $compra <= 500) {
        $puntos = 30;
        break;
    }
    if ($compra > 500 ){
        $puntos = 60;
        break;
    }
    $puntos = 0;
    break;
}
echo "cantidad de puntos " . $puntos;*/
//While de la inge
/*$inferior=$_GET['i'];
$superior=$_GET['s'];
$c=0;
while($inferior<=$superior)
{
    if($inferior%7==0)
    {
         $c++;
    }
    $inferior++;
}
echo "contador:" .$c;*/
//for
//foreach
/*$electrodomesticos=[
    ["nombre"=>"Televisor",
    "precio"=>400,
    "estado"=>true],
    [
     "nombre"=>"heladera",
     "precio"=>200,
     "estado"=>false],
    [
    "nombre"=>"bicicleta",
    "precio"=>100,
    "estado"=>true],
    ];
    foreach ($electrodomesticos as $productos) {
        # code...
        //mostramos cada uno de los productos
        echo $productos['nombre']."<br>";
        echo $productos['precio']."<br>";
        echo ($productos['estado'])? "Disponible" . "<br>": "No Disponible"."<br>";
    }
    echo"<pre>";
    var_dump($electrodomesticos);
    echo"</pre>";*/



    $fechaIngresada = $_GET['fec']; 
    $IniVerano = '06-21';
    $FinVerano = '09-21';
    
    $fecha = DateTime::createFromFormat('Y-m-d', $fechaIngresada);
    
    $mesDia = $fecha->format('m-d');
    

    
    if ($mesDia >= $IniVerano && $mesDia <= $FinVerano) {
        echo "Es verano";
    } else {
        echo "No es verano";
    }
?>