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
	/*
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

	echo "<br>";

	############### For #######################
	/**
	 * expresion1 = Evalúa la iteración del ciclo, inicializa
	 expresion2 = Evaluación lógica
	 expresion3 = Conclusión del ciclo
	 for (expresion1; expresion2; expresion3){
		bloque de código;
	 }
	 */

	 for ($i=0; $i < 5 ; $i++){
		echo "El número es ".$i."<br>";
	 }

	 echo "<br>";

	 ####Ciclor for con dos variables #######

	 for ($i = 1, $j = 10; $i < 50 and $j < 100; $i+=10, $j += 10){
	 	echo "El valor de i es: ".$i."<br>";
	 	echo "El valor de j es: ".$j."<br>";

	 }

	 echo "<br>";

	 ############## Foreach (Para cada) ############
	 /** Sólo se utilizan para arreglos
	  * Estructura:

	  	foreach (arreglo As valor) {
			bloque de código;
	  	}
	  */

	#Foreach para arreglos indexados
	 $redesSociales = ["Facebook", "Twitter", "Instagram", "Linkedin"];

	 foreach ($redesSociales as $rs) {
	 	echo $rs."<br>";
	 }

	 echo "<br>";

	 #Foreach para arreglo asociativos

	 $redesSociales2 = ['FB' => "Facebook", 'TW' => 'Twitter', 'Ins' => 'Instagram'];

	 foreach ($redesSociales2 as $key => $value) {
	 	echo "La llave es: ".$key." y el valor es: ".$value."<br>";
	 }







?>