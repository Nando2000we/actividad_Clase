<?php
//Arrays de una dimension
$platos=array("saice","sopa","pescado");
$platos=["saice","sopa","chancho"];
echo"<pre>";
var_dump($platos);
//echo"<pre>";
//var_dump($platos);
echo"<pre>";
//insertar datos
$platos[2]="Nuevo Plato";
$platos[3]="chancho";
//insertar inicio
array_unshift($platos,"jugos");
//insertar final
array_push($platos,"ensaladas");
echo"<pre>";
var_dump($platos);
echo"<pre>";
//Array de dos dimensiones
$electrodomesticos=[
    "nombre"=>"televisor",
    "modelo"=>"LG",
    "precio"=>450,
    "pulgadas"=>16,
    "procedencia"=>"china",
    "accesorios"=>[
        //sub array
        "game"=>"si",
        "smart"=>"no",
        "control"=>"si",
     
    ]

];
echo"<pre>";
var_dump($electrodomesticos);
echo"<pre>";
echo $electrodomesticos["nombre"]."<br>".
$electrodomesticos["precio"]."<br>".
$electrodomesticos["accesorios"]["smart"];
//array_push($electrodomesticos["accesorios"],"usb","si");
$electrodomesticos["accesorios"]["usb"]="si";
echo"<pre>";
var_dump($electrodomesticos);
echo"<pre>";
//////////////////
//Array de dos dimensiones
$electrodomesticos=array(
    "nombre"=>"Play 4",
    "modelo"=>"sony",
    "precio"=>2500,
    "pulgadas"=>16,
    "procedencia"=>"EEUU",
    "accesorios"=>array(
        //sub array
        "game"=>"si",
        "smart"=>"no",
        "mando"=>"si",
        )
);
echo"<pre>";
var_dump($electrodomesticos);
echo"<pre>";
echo $electrodomesticos["nombre"]."<br>".
$electrodomesticos["precio"]."<br>".
$electrodomesticos["accesorios"]["mando"];
//manejar los indicies 
$clientes=[];
var_dump(empty($platos));//el empty si la cadena esta vacia¿?
var_dump(empty($electrodomesticos));
var_dump(empty($clientes));
var_dump(isset($clientes));
var_dump(isset($electrodomesticos["procedencia"]));//el isset para saber si el valor fue declarado
//ordenar de menor a mayor de una dimension
sort($platos);
echo"<pre>";
var_dump($platos);
echo"<pre>";
//ordenar de mayor a menor de una dimension
rsort($platos);
echo"<pre>";
var_dump($platos);
echo"<pre>";
//ordenar array de dos dimensiones valores de acuerdo al orden alfabetico asc por numeros
echo("------Orden albabetico ascendente------");
asort($electrodomesticos);
echo"<pre>";
var_dump($electrodomesticos);
echo"<pre>";
//ordenar array de dos dimensiones valores de acuerdo al orden alfabetico desc por numeros
echo("------Orden albabetico descendente------");
arsort($electrodomesticos);
echo"<pre>";
var_dump($electrodomesticos);
echo"<pre>";
//ordenar array dos dimensiones indices de acuerdo al orden alfabetico asc
echo("------Orden albabetico indice ascendente------");
ksort($electrodomesticos);
echo "<pre>";
var_dump($electrodomesticos);
echo "</pre>";
//ordenar array dos dimensiones indices de acuerdo al orden alfabetico desc
echo("------Orden albabetico indice descendente------");
krsort($electrodomesticos);
echo "<pre>";
var_dump($electrodomesticos);
echo "</pre>";
?>