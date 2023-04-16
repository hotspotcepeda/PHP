<!DOCTYPE html>
<html>
<head>
    <title>Actividad 03</title>
</head>
<body>
<h1>Calculadora de ENTEROS.</h1>
<form method="POST">
    <label for="opcion">Seleccione alguna de las operaciones del menú:</label>
    <select name="opcion">
    <option value="S">Suma</option>
    <option value="R">Resta</option>
    <option value="M">Multiplicación</option>
    <option value="D">División</option>
    <option value="E">Salir</option>
    </select>
    <br>
    <br>
    <label for="num1">Introduzca número 1:</label>
    <input type="text" id="num1" name="num1">
    <br>
    <label for="num2">Introduzca número 2:</label>
    <input type="text" id="num2" name="num2">
    <br>
    <br>
    <input type="submit" value="Calcular">
</form>


<?php
$opcion = "";
$num1 = "";
$num2 = "";
$resultado = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // operacion
    $opcion = strtoupper($_POST["opcion"]);

    // calcula
    switch ($opcion) {
        case "S":
            $num1 = intval($_POST["num1"]);
            $num2 = intval($_POST["num2"]);
            $resultado = $num1 + $num2;
            echo "<p>El resultado de sumar $num1 + $num2 es = $resultado</p>";
            break;
        case "R":
            $num1 = intval($_POST["num1"]);
            $num2 = intval($_POST["num2"]);
            $resultado = $num1 - $num2;
            echo "<p>El resultado de restar $num1 - $num2 es = $resultado</p>";
            break;
        case "M":
            $num1 = intval($_POST["num1"]);
            $num2 = intval($_POST["num2"]);
            $resultado = $num1 * $num2;
            echo "<p>El resultado de multiplicar $num1 x $num2 es = $resultado</p>";
            break;
        case "D":
            $num1 = intval($_POST["num1"]);
            $num2 = intval($_POST["num2"]);
            if ($num2 == 0) {
                echo "<p>No se puede dividir entre cero el resultado de dividir $num1 : 0 sería = $num1 </p>";
            } else {
                $resultado = $num1 / $num2;
                $resto = $num1 % $num2;
                echo "<p>El resultado de dividir $num1 : $num2 es = $resultado</p>";
                echo "<p>El resto o módulo de $num1 : $num2 es = $resto</p>";
            }
            break;
        case "E":
            break;
        default:
            echo "<p>Saliendo ...</p>";
    }
}
?>
</body>
</html>