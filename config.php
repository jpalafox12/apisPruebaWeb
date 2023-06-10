<?php
$DB_HOST = $_ENV["DB_HOST"];
$DB_USER = $_ENV["DB_USER"];
$DB_PASSWORD = $_ENV["DB_PASSWORD"];
$DB_NAME = $_ENV["DB_NAME"];
$DB_PORT = $_ENV["DB_PORT"];

$mysqli  = new mysqli($DB_HOST, $DB_USER, $DB_PASSWORD, $DB_NAME, $DB_PORT);

//$mysqli = new mysqli("localhost", "root", "", "prueba");

if ($mysqli->connect_errno) {
  echo json_encode(1);
  die("Error al conectar a la base de datos: " );
}else{
  //echo json_encode(2);
  /*
$mysqli = new mysqli("http://localhost:3306", "id20717297_wilson", "Wilson2017!", "id20717297_tt");
//$mysqli-> set_charset("utf8");

if ($mysqli->connect_errno) {
  die("Error al conectar a la base de datos: " );
}else{}*/
}
