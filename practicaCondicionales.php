<?php
	
	$calificacion = 82;

	if ($calificacion > 92) {
		$nota = 'A';
		$mensaje = 'Excelente';

	}elseif ($calificacion <= 92 and $calificacion > 83) {
		$nota = 'B';
		$mensaje = 'Bien';

	}elseif ($calificacion <= 83 and $calificacion > 74) {
		$nota = 'C';
		$mensaje = 'Regular';

	}elseif ($calificacion <= 74 and $calificacion > 62) {
		$nota = 'D';
		$mensaje = 'Mal';
	}else {
		$nota = 'F';
		$mensaje = 'Reprobado';
	}

	echo "Hola, saliste ".$mensaje." en tu examen, la nota final es ".$nota."<br>";

	$arreglo = [10, 20, 40];

	if (empty($arreglo)) {
		echo "El arreglo está vacío";

	}else {
		echo "El arreglo tiene datos";
	}

	 echo "<h1> Ejercicio con operador OR</h1><br>";

	$curso1 = 'php';
	$curso2 = 'Android';

	if ($curso1 == 'php' or $curso2 == 'MySQL') {
		echo "Eres un programador backend<br>";
	}elseif ($curso1 == 'React' or $curso2 =='Vue') {
		echo "Eres un programador frontEnd<br>";
	}elseif ($curso1 == 'Android' or $curso2 == 'Swift') {
		echo "Eres un programador móvil<br>";
	}else{
		echo "Creo que no estás estudiando";
	}

	echo "<h1>Comparador idéntico ===</h1>
		 <p>Se utiliza el operador == para comparar que un valor es igual a otro. Y se utiliza el 
		 operador === para comprobar que sea idéntico (mismo valor y mismo tipo dato)</p>";

	$numero = 100;

	if ($numero === 100) {
		echo "Es idéntico";
	}else {
		echo "No es idéntico";
	}







?>