<!DOCTYPE html>
<html>
<head>
    <title>Actividad 02</title>
</head>
<body>
<h1>Calculadora DIVERSA.</h1>

<h2>Convierte segundos a minutos, horas y días: </h2>
<form method="post" action="">
    <label for="segundos">Introduce un número :</label>
    <input type="number" name="segundos" id="segundos">
    <input type="submit" name="calcular_tiempos" value="Calcular">
</form>

<?php
if (isset($_POST["calcular_tiempos"])) {
    $segundos = $_POST["segundos"];
    $dias = ($segundos / 86400);
    $horas = ($segundos / 3600);
    $minutos = ($segundos / 60);
    
    echo "<h3>Resultado:</h3>";
    echo "<table>";
    echo "<tr><td>Días:</td><td>$dias</td></tr>";
    echo "<tr><td>Horas:</td><td>$horas</td></tr>";
    echo "<tr><td>Minutos:</td><td>$minutos</td></tr>";
    echo "<tr><td>Segundos:</td><td>$segundos</td></tr>";
    echo "</table>";
}
?>

<h2>Calcula perímetro y área de una circunferencia:</h2>
<form method="post" action="">
    <label for="radio">Introduce el radio:</label>
    <input type="number" name="radio" id="radio">
    <input type="submit" name="calcular_circunferencia" value="Calcular">
</form>

<?php
if (isset($_POST["calcular_circunferencia"])) {
    $radio = $_POST["radio"];
    $perimetro = 2 * pi() * $radio;
    $area = pi() * pow($radio, 2);
    echo "<h3>Resultado:</h3>";
    echo "<table>";
    echo "<tr><td>Perímetro:</td><td>$perimetro</td></tr>";
    echo "<tr><td>Área:</td><td>$area</td></tr>";
    echo "</table>";
}
?>
<h2>Calcula perímetro y área de cualquier triángulo</h2>
<form method="post" action="">
	<label for="lado1">Introduce el primer lado:</label>
	<input type="number" name="lado1" id="lado1">
	<label for="lado2">Introduce el segundo lado:</label>
	<input type="number" name="lado2" id="lado2">
	<label for="lado3">Introduce el tercer lado:</label>
	<input type="number" name="lado3" id="lado3">
	<input type="submit" name="calcular_triangulo" value="Calcular">
</form>
<?php
if (isset($_POST["calcular_triangulo"])) {
	$lado1 = $_POST["lado1"];
	$lado2 = $_POST["lado2"];
	$lado3 = $_POST["lado3"];

	// semiperímetro
	$semiperimetro = ($lado1 + $lado2 + $lado3) / 2;

	// fórmula de Herón
	$area = sqrt($semiperimetro * ($semiperimetro - $lado1) * ($semiperimetro - $lado2) * ($semiperimetro - $lado3));

	// perímetro
	$perimetro = $lado1 + $lado2 + $lado3;

	echo "<h3>Resultado:</h3>";
	echo "<table>";
	echo "<tr><td>Perímetro:</td><td>$perimetro</td></tr>";
	echo "<tr><td>Área:</td><td>$area</td></tr>";
	echo "</table>";
}
?>
   
</body>
</html>