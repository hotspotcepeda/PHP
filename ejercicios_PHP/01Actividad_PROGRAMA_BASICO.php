<!DOCTYPE html>
<html>
<head>
    <title>Actividad 01</title>
</head>
<body>
<h1>Caja registradora.</h1>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  Importe por cada artículo:<input type="text" name="precio"><br>
  Número total de artículos:<input type="text" name="cantidad"><br>
  Importe total entregado €:<input type="text" name="cantidadEntregada"><br>
  <input type="submit" value="Calcular">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Obtener el precio y cantidad con el formulario
  $precio = (float) $_POST["precio"];
  $cantidad = (int) $_POST["cantidad"];

  // Calcula el precio sin IVA
  $precioTotal = $precio * $cantidad;

  // Calcula el precio total con IVA del 21%
  $precioTotalConIVA = $precioTotal * 1.21;

  // Mostrar precio total con IVA
  echo "El precio final de los artículos con IVA es: $precioTotalConIVA €\n";

  // Pregunta al usuario como va a pagar los artículos
  $cantidadEntregada = (float) $_POST["cantidadEntregada"];

  // Calcula la cantidad a devolver o la cantidad que falta por pagar
  $cantidadDevolver = $cantidadEntregada - $precioTotalConIVA;
  $cantidadFalta = $cantidadEntregada - $precioTotalConIVA;

  if ($cantidadDevolver >= 0) {
    echo "Su cambio es: $cantidadDevolver € Gracias por su visita.\n";
  } else {
    echo "Le faltan: $cantidadFalta € para completar el pago.";
  }
  }
  ?>
  </body>
</html>