<?php
$DB_HOST = $_ENV["DB_HOST"];
$DB_USER = $_ENV["DB_USER"];
$DB_PASSWORD = $_ENV["DB_PASSWORD"];
$DB_NAME = $_ENV["DB_NAME"];
$DB_PORT = $_ENV["DB_PORT"];

$mysqli  = new mysqli($DB_HOST, $DB_USER, $DB_PASSWORD, $DB_NAME, $DB_PORT);

if ($mysqli->connect_errno) {
  echo json_encode(1);
  die("Error al conectar a la base de datos: " . $mysqli->connect_error);
} else {
  // La conexión a la base de datos se ha establecido correctamente
  echo json_encode(2);
}
?>

