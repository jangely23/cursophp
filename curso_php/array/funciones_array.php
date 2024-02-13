<?php

/* 
    Estas son algunas de las funciones de PHP utilizadas para los arrays:

    array_slice: Extrae una parte de un array.

    array_chunk: Divide un array en fragmentos.

    array_shift: Quita un elemento del principio del array.

    array_pop: Extrae el último elemento del final del array.

    array_unshift: Añadir al inicio de un array uno a más elementos.

    array_push: Inserta uno o más elementos al final de un array.

    array_flip: Intercambia todas las claves de un array con sus valores asociados.

 */

$courses = ['php', 'javascript', 'laravel', 'go', 'java', 'python'];
$courses2 = [
    10 => 'php', 
    100 => 'javascript', 
    1000 =>'laravel', 
    10000 => 'go',  
    100000 => 'java', 
    1000000 => 'python'
];

sort($courses);  //sort: Ordena un array de menor a mayor.

echo "<pre>";
var_dump($courses);
echo "<br/>";

rsort($courses);  //rsort: Ordena un array en orden inverso de mayor a menor.
var_dump($courses);
echo "<br/>";

ksort($courses2);
var_dump($courses2); //ksort: Ordena un array por clave de menor a mayor.
echo "<br/>";

krsort($courses2);
var_dump($courses2); //krsort: Ordena un array por clave en orden inverso de mayor a menor.
echo "<br/>";