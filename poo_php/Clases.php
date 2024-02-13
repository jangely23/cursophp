<?php

class Person {

    public function greet() {
        return "Hola $this->name";
    }
}

class User {
    public $type;
}

class Admin extends Person {
    public $name = 'Administrador';
}

$user = new User; // crea el objeto a partir de la clase User
$user->type = new Admin; // el tipo del usuario va a ser en realidad un administrador

echo $user->type->greet(); // en el usuario desde la propiedad tipo se accede al metodo greet del Admin que se hereda de Person


/**
 *  Clases es el molde a partir del cual se crean objetos, la cual esta compuesta por atributos y métodos.
 *  Objetos Son entidades que tienen un determinado estado, comportamiento e identidad.😎 Es el resultado de la instancia de una clase.
 *  Instancia Se refiere a la actividad de crear un objeto mediante la lectura, recuperación de los atributos de una clase.🤩
*/