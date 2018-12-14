<?php
/*	Operadores aritméticos

	Suma +, suma de a + b
	Resta -, diferencia de a - b
	Multiplicación *, producto de a * b
	División /, cociente de a y b
	Módulo %, resto de a dividido por b
*/	
	$a = 10;
	$b = 20;

	//Suma
	$suma = $a + $b;

	echo "Suma: ".$suma."<br>";


	$resta = $a - $b;

	echo "Resta: ".$resta."<br>";


	$multiplicacion = $a * $b;

	echo "multiplicación: ".$multiplicacion."<br>";

	$division = $a / $b;

	echo "division: ".$division."<br>";

	$modulo = $b / $a;

	echo "modulo: ".$modulo."<br>";

	/*Operadores de asignación

	=, += *= /= .=*/

	$a = 10;
	$a += 5;

	echo $a."<br>";

	$c = 30;

	$c *= 5;

	echo $c;


?>