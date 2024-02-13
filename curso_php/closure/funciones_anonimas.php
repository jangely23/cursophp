<?php

// Closure es lo mismo que Callbacks
function greet(Closure $lang, $name){
    return $lang($name);
}

// Funciones anonimas

$es = function($name){
    return "Hola, $name";
};

$en = function($name){
    return "Hello, $name";
};

// Uso de las funciones anonimas a traves de una funcion normal

echo "Saludo en Ingles: " . greet($en, "Jessica");
echo "<br/>";
echo "Saludo en Español: " . greet($es, "Jessica");