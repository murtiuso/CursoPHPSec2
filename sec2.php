<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php 
	// declaración de una constante; el identificador se puede poner con comillas simples o dobles
	define ("PI", 3.1416);
	echo 'hola mundo<br>';
	
	#comentario de una línea
	// comentario de una línea
	/* comentario
	de varias líneas */

	$nombre = "Sergio"; 

	echo "mi nombre es " . $nombre; // esta es la manera adecuada de concatenar

	// esta no es la mejor manera de concatenar, pues puede traer problemas de seguridad
	echo "mi nombre es $nombre <br>";

	$_numero = 29;
	echo $_numero;

	$unavariable; // esta así, por defecto va a tener valor nulo.

	$numero2 = 5.7;

	$unavariable = $_numero + $numero2;
	echo "<br> la suma de $_numero y $numero2 es $unavariable";

	echo gettype($unavariable);

	echo "pi vale" . PI;

	 print("lelele");

	 print("ole ole ole");
		
?>

</body>
</html>


