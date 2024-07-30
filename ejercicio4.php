<?php
$competidores = [
    "Juan Tolay" => "10:15:30",
    "Jose Lopez" => "10:20:15",
    "Fernando Sanchez" => "10:12:45",
    "Joel Gonzales" => "10:18:20",
    "Carlos Rendiz" => "10:22:10",
    "Manuel Turizo" => "10:25:05",
    "Laura Pachano" => "10:14:50",
    "Sofía Mitre" => "10:17:30",
    "Diego Choque" => "10:21:00",
    "Luis Quispe" => "10:23:45"
];

// Mostrar los datos originales de los competidores
echo "Datos originales de competidores:";
echo "<pre>";
var_dump($competidores);
echo "</pre>";

// Ordenar por tiempo de llegada (ascendente)
asort($competidores);
echo "Orden de llegada:";
echo "<pre>";
var_dump($competidores);
echo "</pre>";

// Obtener el ganador (último competidor en el array ordenado)
$ganador = key($competidores);

// Mostrar el ganador
echo "El ganador es: $ganador<br>";

// Calcular la diferencia de tiempo entre el segundo y el primer competidor
$tiempos = array_values($competidores);
$diferencia_segundo_primero = strtotime($tiempos[1]) - strtotime($tiempos[0]);

echo "Diferencia de tiempo entre el segundo y el primer competidor: " . gmdate("H:i:s", $diferencia_segundo_primero) . "<br>";

// Obtener el último competidor en llegar
$ultimo_llegado = end($competidores);
echo "Último competidor en llegar: " . key($competidores) . " con tiempo de llegada " . $ultimo_llegado . "<br>";

// Mostrar los tres primeros lugares
$primeros_lugares = array_slice($competidores, 0, 3, true);
echo "Primeros tres lugares:";
echo "<pre>";
var_dump($primeros_lugares);
echo"</pre>";
?>