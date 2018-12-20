<?php
	#Arreglos y sus funciones nativas
	$cadena = '';
	$arreglo = [];
	$videojuegos = ['Fifa', 'Fornite', 'Red Dead',
					'Call of Duty', 'Battlefield',
					'Pókemon', 'GTA', 'The Sims', 'Halo'];

	// Vacío -empty
	 var_dump(empty($arreglo));
	 var_dump(empty($videojuegos));

	 //Existe - isset

	 var_dump(isset($videojuegos[5]));

	 // Contar elementos del arreglo

	 echo "<br>";

	 echo count($videojuegos)."<br>";

	 #Antepenúltimo elemento

	 $posicion = count($videojuegos) - 2;
	 echo $videojuegos[$posicion]."<br>";

	 #Ordenar el arreglo de manera alfabética

	 #sort($videojuegos);
	 #var_dump($videojuegos);

	 #Ordenar el arreglo sin perder su índice

	 #asort($videojuegos);
	 #var_dump($videojuegos);

	 #Ordenar de manera inversa

	 #rsort($videojuegos);
	 #var_dump($videojuegos);

	 #Ordenar de manera inversa sin perder su índice
	 arsort($videojuegos);
	 var_dump($videojuegos);

	 echo "<br>";

	 #Sumar valores de un arreglo

	 $numeros = [1,20,30,15,5];

	 $suma = array_sum($numeros);

	 echo "Mi suma es: ".$suma."<br>";

	 #Encontrar diferencia entre arreglos

	 $salon1 = ['a1' => "Yadira", 'a2' => "Reyna", 'a3' => 'Marlyn', 'a4' => 'Eli', 'a5' => 'Scarlett', 'a6' => 'Liz'];
	 $salon2 = ['a1' => "Yadira", 'a2' => "Reyna", 'a3' => 'Marlyn', 'a4' => 'Eli', 'a5' => 'Eva', 'a6' => 'Itzel'];

	 $diferencia = array_diff($salon1, $salon2);

	 var_dump($diferencia);

	 echo "<br>";












?>