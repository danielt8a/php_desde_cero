<?php
	
	/**
	 * Estructura Switch
	 Sintaxis: 
	 switch(condicion){
		case 1:
			Bloque de código
			break;
		case 2:
			Bloque de código
			break;
		default:
			bloque de código
			break;
	 }
	 */

	 $numero = 3;

	 switch ($numero) {
	 	case 1:
	 		echo "El número es 1";
	 		break;
	 	case 2:
	 		echo "El número es 2";
	 		break;
	 	case 3:
	 		echo "El número es 3";
	 		break;
	 	case 4:
	 		echo "El número es 4";
	 		break;
	 	
	 	default:
	 		echo "Es un número mayor a 4";
	 		break;
	 }



?>
