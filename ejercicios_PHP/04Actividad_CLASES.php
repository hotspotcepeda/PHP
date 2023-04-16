<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Alumnos</title>
</head>
<body>
<h1>Registro de Alumnos</h1>

<table>
  <tr>
    <td>
      <form method="POST">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre"><br>
        <label for="apellidos">Apellidos:</label>
        <input type="text" id="apellidos" name="apellidos"><br>
        <label for="edad">Edad:</label>
        <input type="number" id="edad" name="edad"><br>
        <input type="submit" value="Registrar">
      </form>
    </td>
  </tr>
</table>

<?php
class Alumno {
private $nombre;
private $apellidos;
private $edad;

//el constructor __construct() se encarga de inicializar los atributos del objeto con los valores que se le pasan como parámetros. Los métodos setNombre(), setApellidos() y setEdad() permiten modificar los valores de los atributos del objeto.

public function __construct($nombre, $apellidos, $edad) {

$this->nombre = $nombre;
$this->apellidos = $apellidos;
$this->edad = $edad;

}
public function getNombre() {
    return $this->nombre;
}
public function getApellidos() {
    return $this->apellidos;
}
public function getEdad() {
    return $this->edad;
}
public function setNombre($nombre) {
    $this->nombre = $nombre;
}
public function setApellidos($apellidos) {
    $this->apellidos = $apellidos;
}
public function setEdad($edad) {
    $this->edad = $edad;
}
}

if (isset($_POST["nombre"]) && isset($_POST["apellidos"]) && isset($_POST["edad"])) {
    $nombre = $_POST["nombre"];
    $apellidos = $_POST["apellidos"];
    $edad = intval($_POST["edad"]);
    $alumno = new Alumno($nombre, $apellidos, $edad);

    // los métodos getNombre(), getApellidos() y getEdad() permiten obtener los valores de los atributos del objeto alumno.
    
    echo "<h2>Datos del alumno registrado:</h2>";
    echo "<table>";
    echo "<tr><td>Nombre:</td><td>{$alumno->getNombre()}</td></tr>";
    echo "<tr><td>Apellidos:</td><td>{$alumno->getApellidos()}</td></tr>";
    echo "<tr><td>Edad :</td><td>{$alumno->getEdad()}</td></tr>";
    echo "</table>";
}
?>

</body>
</html>