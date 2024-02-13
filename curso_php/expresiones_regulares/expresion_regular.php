<?php

/**
 *  /  : Contenedor 
 *  ^  : Inicio
 *  $  : Final
 *  -  : Rango
 *  [] : Patrón
 *  {} : Condición
 * 
 **/

$password = '12345';

/** Quiero una contraseña solo de números 
*   [0-9] permite solo elementos del 0-9
*   {6,9} minimo 6 elementos, maximo 9 elementos
**/

echo preg_match('/^[0-9]{6,9}$/' , $password); // 1 indica que se cumple - 0 no se cumple

echo "<br/>";

var_dump((bool) preg_match('/^[0-9]{6,9}$/' , $password));

echo "<br/>";


/* Las expresiones regulares (regex) en PHP son una herramienta muy útil para trabajar con cadenas de texto. Una expresión regular es un patrón que describe un conjunto de cadenas. En PHP, se pueden usar expresiones regulares para buscar, reemplazar, extraer y validar información en una cadena de texto. */

//Aquí hay algunos ejemplos de código que muestran cómo usar expresiones regulares en PHP:

/* preg_match: busca una ocurrencia de un patrón en una cadena y devuelve true si se encuentra o false si no se encuentra. Tiene dos argumentos: el patrón y la cadena en la que se busca. */

$email = 'juan@example.org';
$pattern = '/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/';

if (preg_match($pattern, $email)) {
    echo 'La dirección de correo es válida.';
} else {
    echo 'La dirección de correo no es válida.';
}

echo "<br/>";


/* preg_replace: reemplaza todas las ocurrencias de un patrón en una cadena con un valor especificado. Tiene tres argumentos: el patrón, el valor con el que se quiere reemplazar y la cadena en la que se busca. */

$text = 'Hola, mi nombre es Juan.';
$pattern = '/Juan/';
$replacement = 'Pedro';

$newText = preg_replace($pattern, $replacement, $text);
echo $newText; // Imprime: Hola, mi nombre es Pedro.

echo "<br/>";


/* preg_split: divide una cadena en un array de subcadenas en función de un patrón. Tiene dos argumentos: el patrón y la cadena que se quiere dividir. */

$text = 'Hola, mi nombre es Juan y tengo 30 años';
$pattern = '/, | y /';

$words = preg_split($pattern, $text);
print_r($words);


/*
Imprime:
Array
(
    [0] => Hola
    [1] => mi nombre es Juan
    [2] => tengo 30 años
)
*/

/* Estos son solo algunos ejemplos de cómo se pueden usar expresiones regulares en PHP. Hay muchas más funciones y opciones disponibles, y es importante entender cómo funcionan las expresiones regulares para sacarles el máximo partido. */