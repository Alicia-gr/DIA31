<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

	<?php

$nombre = "Ali";
echo $nombre;

?>


<br><br>

<?php

$num1 = 5;
$num2 = 10;
$suma = $num1 + $num2;
echo "La suma es: ".$suma

?>

<br><br>

<?php

$ciudad1 = "Madrid";
$ciudad2 = "Barcelona";
echo "Las ciudades son: ". $ciudad1 . "y" . $ciudad2;



?>

<br><br>

<?php 

	$a = 8;
	$b = 12;
	$resultado = $a * $b;
	echo "El producto de $a y $b es: " . $resultado;


	 ?>

<br><br>


	<?php

	$nombre = "Carlos";
	$año = 2025;
	echo "Hola $nombre, el año actual es $año.";

	?>

	<br><br>

	<?php

	$nombre = "Ali";
	$edad = 50;
	echo $nombre . " tiene " . $edad . " años.";
	?>

	<br><br>

	<?php 

	$nota1 = 7;
	$nota2 = 8;
	$nota3 = 9;
	$promedio = ($nota1 + $nota2 + $nota3) / 3;
	echo "El promedio es: " . $promedio;


	 ?>

	 <br><br>

	 <?php 

	$celsius = 30;
	$fahrenheit = ($celsius * 9/5) + 32;
	echo "$celsius grados Celsius son $fahrenheit grados Fahrenheit.";


	 ?>



	 <br><br>


	<?php





	$x = 10;
	$y = 20;

	//Intercambio
	$temp = $x;
	$x = $y;
	$y = $temp;
	echo "Después del intercambio: x = $x, y =$y";
	

	?>

	<br><br>

	<?php

	$radio = 5;
	$area = pi() * pow($radio, 2);
	echo "El área del círculo con radio $radio es: " . $area;

	?>

	<br><br>







</body>
</html><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>DÍA 31</title>
</head>
<body>

	<?php





	$numero = 7;
	if ($numero % 2 == 0){
		echo "$numero es numero par.";

	}else{



	echo "$numero es numero impar.";

}
	

	?>


<br><br>

	<?php





	$suma = 0;
	for ($i = 1; $i <= 100; $i++) {
		$suma +=$i;
		 }


	echo "La suma de los números del 1 al 100 es $suma";
	

	?>

	<br><br>

	<?php





	$suma = 0;
	for ($i = 1; $i <= 10; $i++) {
		
	echo $i . "<br>";

}
	

	?>

	<br><br>

	<?php





	$numero = -5;
	if ($numero > 0)  {
		
	echo "$numero es un número positivo.";
} elseif ($numero < 0) {
	echo "$numero es un número negativo.";
} else { 
echo "$numero es cero.";

}
	

	?>

	<br><br>

<?php





	for ($i = 3; $i <= 30; $i += 3) {
		
	echo $i . "<br>";

}
	

	?>

	<br><br>

	<?php





	$numero = 5;
	for ($i = 1; $i <= 10; $i++) {
		
	echo "$numero x $i = " . ($numero * $i) .  "<br>";

}
	

	?>

	<br><br>










</body>
</html>