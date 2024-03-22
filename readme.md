Arrays: Es una variable que puede guardar multiples valores.

Arrays Asociativos: Es una variable que puede guardar multiples valores y puedes acceder a ellos mediante una palabra (En lugar de con un indice como los arrays comunes).


Condicionales IF, ELSE IF, ELSE: Pueden suceder la una o la otra pero no dos juntas

if : Permite saber si una condición se cumple (true)

else : Permite saber si una condición no se cumple (false)

else if: Evalúa la condición que se cumple
    (Si el if es true ejecuta el codigo del if ),
    (Si el if es flase ejecuta el codigo de else if),
    (Si ni el if ni el else if son true se ejecuta el codigo del else)


SWITCH: es otra estructura de control que nos ayuda a tomar decisiones, pero... ¿cuál es la diferencia con if y else? 🤔 . La principal diferencia es que switch funciona con casos, es decir, dependiendo de un caso tomaremos una decición u otra. Mientras que if y else te permiten hacer comparaciones, switch te ayuda a decidir qué hacer dependiendo del caso que tengas presente. . ¿Switch me sirve para reemplazar if y else? ¿Cuál es mejor? ¡Ninguna es mejor! Cada estructura tiene su caso de uso particular, la pregunta correcta para hacerte es: . ¿Cuál estructura de control me permite tomar esta decisión más fácilmente? . Recuerda que si necesitas hacer comparaciones, entonces if y else son las estructuras que debes usar, mientras que si necesitas elegir un caso de entre los múltiples escenarios que puedas tener entonces switch puede ser lo que estás buscando 😄



Bucles: Un bucle es una estructura de control que nos ayuda a repetir un bloque de codigo las veces que lo necesitemos.
Un contador es una variable que nos ayuda a llevar la cuenta de las veces que se ha repetido ese bucle.
Y con iteracion nos referimos a en que bucle estamos, primera iteracion, tercera iteracion, etc..

Como funciona el ciclo While?
El bucle while, al igual que el if, recibe una condicion booleana. Mientras que esa condicion sea true, el ciclo se va a repetir. Dentro del while nosotros podemos cambiar el valor de nuestra variable para detener el ciclo.

Por eso se dice que este es un ciclo indefinido.


Como funciona el ciclo Do... While?
Este ciclo es igual que el ciclo while, recibe una condicion y puedes cambiar el valor de tu variable dentro del ciclo.
La diferencia es que este ciclo se ejecuta al menos una vez, sin importar si la condicion es verdadera o falsa.
Tambien es un ciclo indefinido.



Ciclo for: Es te ciclo permite ejecutar una serie de instrucciones (bloque de codigo) un numero definido de veces.
Aunque se debe definir una condicion, realmente ya se sabe cual es el limite del ciclo.
La estructura es:

for ($parametro inicial; condicion; incremento|decremento) {
    bloque de codigo
}



Ciclo Foreach: Nos permite recorrer cualquier elemento que sea iterable sin tener que contar los elementos del mismo. Él por si solo detectara cuantos elementos tiene dicho elemento.
La estructura es:

foreach ($iterable as $valor) {  <-- ($iterable normalmente es un Array, normalmente...)
    // Codigo a repetir por cada valor
}

o tambien puede ser asi:

foreach ($iterable as $llave => $valor) {  <-- (en el caso de tener un array asociativo, en la $llave podemos obtener el nombre del subindice, y de valor obtenemos el valor de ese subindice)
    // Codigo a repetir por cada valor
}



Funciones: Una funcion nos sirve para separar todo un bloque de codigo, ponerle un nombre y utilizarla cuantas veces queramos sin preocuparnos por como trabaja por dentro.
Nos ayuda a tener codigo mas ordenado, reutilizable y facil de entender.
Separar tu codigo en funciones para despues reutilizarlo es buena practica.

Return: Retornar un valor significa decirle explicitamente a la funcion qué es lo que debe devolver.
Esto lo hacemos con la palabra reservada "return" y usualmente guardamos ese valor en una variable.