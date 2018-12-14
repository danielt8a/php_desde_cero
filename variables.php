<?php
	//Variables en PHP
	
	#Reglas
	$nombre = 'Yesi';

	$entero = 123;
	$negativo = -1000;
	$flotante = 13.1416;

	// Base octal -> comienza con cero
	$octal = 0755;

	//Base hexadeciaml -> comienza con 0x
	$hexadecimal = 0xC4E;

	//Base binario -> comienza con 0b
	$binario = 0b1010;

	echo $octal."<br>".$hexadecimal."<br>".$binario."<br>";

	$nombre = "Daniel";
	$apellido = "Télles";
	$edad = 33;
	$soltero = TRUE;

	//Conocer el tipo de dato de la variable
	echo gettype($edad);
	echo "<br>";

	//Conocer el tipo de dato y su valor

	var_dump($edad);

	echo "<br>";

	//Valores por referencia. Sintaxis: &$nombreVariable

	

	$variable = "Lorem ipsum";
	$nueva = &$variable;

	echo $nueva;

?>