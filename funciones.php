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


	/**
	 * Funciones enclosure
	 */


?>