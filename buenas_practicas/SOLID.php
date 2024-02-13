<?php


/* 

El principio de responsabilidad única (también conocido como "la alta cohesión")
nos dice que una clase debería tener un único objetivo, muy claro, muy conciso y muy acotado. 
La idea es evitar que una sola clase haga muchas cosas en lo que podría compararse con un "hombre orquesta". 
--------------------------------------------------------------------------------------------------------------

El principio abierto / cerrado
"La clase debe quedar abierta para añadir nuevos features, pero que esos nuevos features no impliquen 
modificar el código que ya estaba (A eso se refiere cerrada para su modificación)"
Es decir, todo el código nuevo que metamos debe adaptarse automáticamente con el código viejo que ya 
teníamos y no debe implicar modificar este código viejo.

Abierto a nuevos features, cerrado a modificación de features antiguos.
-----------------------------------------------------------------------------------------------------------

principio de sustitucion de Liskov
Este nos dice que cada clase que hereda de otra puede usarse como su padre sin necesidad de conocer 
las diferencias entre ellas.

Para que esto suceda se tiene que dar varias condiciones:

El cliente debe usar métodos de la clase padre únicamente.
La clase hija no debe alterar el comportamiento de los métodos de la clase padre.
-------------------------------------------------------------------------------------------------------------

El principio de segregación de interfaces nos dice un poco como estructurar nuestras interfaces de modo
que cuando una clase implementa una interface, no se le exija implementar métodos que no necesita.

-------------------------------------------------------------------------------------------------------------

Principio de inversión de dependencia

Este principio nos ayuda a definir cómo se vinculan las diferentes clases que tienen que darle servicios a otras. Un concepto que se maneja con este principio es que existen clases con alto nivel, otras con bajo nivel.

Alto nivel → Son aquellas que tienen que ver con la lógica del negocio.
Bajo nivel → Son aquellas que ayudan a que las clases de alto nivel cumplan su objetivo.
Y de lo que se encarga este principio es de que las dependencia entre estas no sea muy fuerte.

Según C. Martin:

Los módulos de alto nivel no deben depender de los de bajo nivel, ambos deben depender de abstracción.

Las abstracciones no deben depender de los detalles, los detalles deben depender de las abstracciones.

Resumen:
Este principio nos indica que debemos reducir las dependencias de los módulos que existen en nuestra aplicación.

Otra forma de decirlo es que los módulos NO DEBEN ser los encargados de crear los objetos con los que trabajan, sino que alguien más debe de crearlos y dárselos cuando lo necesiten.




*/