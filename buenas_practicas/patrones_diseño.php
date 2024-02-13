<?php

/* 
Los patrones de diseño son soluciones de arquitectura de software aplicables a diferentes problemas.
existen 3 tipos de patrones:

Creación → Se encargan de cómo crear nuevas instancias de nuestro objetos.
Estructurales → Nos dicen cómo debemos estructurar nuestras clases.
Comportamiento → Nos dicen cómo deben comportase nuestros objetos.
----------------------------------------------------------------------------------------

Singleton
Este patrón se puede pensar como un patrón de creación o de comportamiento. La idea consiste en tener un clase que tenga una sola instancia en nuestra aplicación. Usualmente este patrón se utiliza para optimizar recursos.

Este se encarga de evitar a toda costa de exista más de una instancia. Para conseguir esto en la clase tenemos una propiedad $thInstance de tipo static, posteriormente debemos crear como private el constructor. Para instanciar esta clase, crearemos una función static que normalmente se llamará getInstance y está se encargará de comprobar si ya existe una instancia, si no existe una, la función la creará.

----------------------------------------------------------------------------------------

Factory

Se trata de un patrón creacional, o sea, que nos ayuda a crear nuevas instancias de objetos.

El patrón factory consiste en utilizar una clase constructora abstracta con unos cuantos métodos definidos y otro(s) abstracto(s).

El patrón factory plantea simplificar una instancia, y eso lo podemos hacer por medio de otra clase que se encargue de obtener la instancia haciendo los procesos complejos requeridos, así ante cualquier cambio solo modificamos esa clase factory y no nos preocupamos por modificar cada una de las instancias.

----------------------------------------------------------------------------------------

Command

Se trata de un patrón de comportamiento, y este se utiliza cuando existe alguna operación especialmente compleja que debe ser realizada desde diferentes puntos de entrada.

¿Qué es una interfaz y qué son las clases abstractas?
La siguiente explicación menciona a Java pero se puede aplicar a muchos lenguajes de programación las misma definiciones:

🙀

Las clases abstractas cuando tienen métodos define lo que tienen qué hacer pero no cómo se debe de hacer. Estas clases pueden ser heredadas por X clases que necesitemos pero no pueden ser instanciadas.

En Java no se puede heredar de más de una clase, para esto utilizamos las interfaces. Aquí igual se especifica qué se debe de hacer pero no el cómo.

A diferencia de una clase abstracta una interfaz no puede hacer nada por si sola, o sea, que las clases hijas están encargadas de definir el comportamiento de todos los métodos abstractos de forma obligatoria.

En otra palabras, las interfaces serán contratos que indicarán que es lo que se debe de hacer sin proveer ninguna funcionalidad.




*/