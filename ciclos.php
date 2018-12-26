<?php
	
	############ While (mientras) #################
	// while (condicion) {
	// 	# code...;
	// 	detenerse;
	// }
	
	# Ciclo While con números
	
	$i = 0;

	while ($i < 5) {
		echo "El número es: ".$i."<br>";
		$i++;
	}

	#Ciclo While con arreglos

	$frutas = ['naranja','manzana','plátano', 'uvas', 'guanábana'];

	$salir = 0;
	$i = 0;

	while ($salir != 1) {
		if($frutas[$i] == 'uvas'){
			echo "<p> Encontré las uvas</p>";
			$salir = 1;
		}else {
			echo "<p>La fruta encontrada es: ".$frutas[$i]." </p>";
			$i++;
		}
	}
	
	echo "<br>";

	############### Do-while (Hacer mientras) #########
	/**
	 * incrementar
	 	do {
			bloque de código
	 	}while (condicion);
	 */

	$i = 0;
	do {
		echo "Número: ".$i."<br>";
		$i++;
	} while ($i < 5);


?>