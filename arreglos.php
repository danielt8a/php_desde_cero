<?php
	
	#Forma de declarar arreglos

	$numeros = [];
	$numerosL = array();

	var_dump($numeros);
	echo "<br>";
	var_dump($numerosL);
	echo "<br>";
	print_r($numeros);
	print_r($numerosL);
	echo "<br>";

	echo "Lorem ipsum	Lorem ipsum Lorem ipsum <br>";

	//Arreglos indexados
	$lenguajes = [];

	$lenguajes[0] = "PHP";
	$lenguajes[1] = "JavaScript";
	$lenguajes[2] = "Java";
	$lenguajes[3] = "Python";
	$lenguajes[4] = "C++";

	echo $lenguajes[3]."<br>";

	$lenguajesPopulares = ["C#", "Java", "Ruby", "Python", "JavaScript"];

	echo $lenguajesPopulares[2]."<br>";

	//Arreglos asociativos. Se indica la relación con una llave, clave o nombre.

	$lenguajesWeb = ["lenguaje1" => 'PHP', "lenguaje2" => 'JavaScript', "lenguaje3" => "Ruby"];

	echo $lenguajesWeb["lenguaje2"]."<br>";

	//Arreglos multidimensionales - Primero se indica la fila y después la columna. Pueden ser asociados o indexados.

	#Arreglos indexados

	$dias = ['Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes'];

	var_dump($dias);
	echo "<br>";

	# Creación de arreglo asociativo

	$usuario = array('nombre' => 'Dámaso', 'edad' => 34, 'Lenguaje' => 'PHP');

	echo "Mi nombre es: ".$usuario['nombre']."<br>";

	// Arreglo multidimensional de tipo indexado

	$alumnos = array(
		array('Juan', 20, 'México'),
		array('Salomé',25,'Perú'),
		array('Caros',30,'Bolivia'),
		array('Homero',35,'USA')

	);

	var_dump($alumnos);

	echo "<br>";

	$alumnos1 = [
		['Salomé', 34, 'Brasil'],
		['Eva', 24, 'RDominicana']

	];

	var_dump($alumnos1);

	echo "<br>".$alumnos[1][0];






?>