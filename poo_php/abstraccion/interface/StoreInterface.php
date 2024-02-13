<?php

/* Una clase abstracta es aquella en donde únicamente se definen o firman los atributos y/o métodos que otras clases deberán implementar al querer utilizar esta clase. En otras palabras, una clase abstracta es una clase que tiene métodos generales que definen que es lo que debe hacer pero no se sabe cómo va a realizar estas acciones y es tarea de las clases que implementan esta clase abstracta definir como van a realizar estas tareas. */

interface StoreInterface {
    public function get(); // declaramos lo que se quiere que por obligacion haga la clase que implemente la interface
}