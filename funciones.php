<?php
	
	/**
	 * function nombreFuncion($parametros){
		bloque de código;
		return respuesta
	 }
	 */

	 function sumarNumeros($a, $b, $imprime = false){
	 	$suma = $a + $b;
	 	if ($imprime == true){
	 		echo "La suma es ".$suma."<br>";
	 	}else {
	 		return $suma;
	 	}
	 	
	 }

	 $numero1 = 5;
	 sumarNumeros($numero1,10, true);

	 echo "<br>";

	/**
	 * Funciones closure o anónimas

	 */


	#Lleve ; al final porque es una variable
	$despedida = function(){
		echo "Última clase de PHP desde cero, gracias por acompañarme";
	};

	#Mandar a llamar a la función despedida
	$despedida();

	#Utilizando la palabra reservada closure
	function finalizaCurso(closure, $curso, $nombre){
		return $curso($nombre);
	}



?>