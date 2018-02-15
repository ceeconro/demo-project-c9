<?php
// A simple web site in Cloud9 that runs through Apache
// Press the 'Run' button on the top to start the web server,
// then click the URL that is emitted to the Output tab of the console

echo 'Hello world from Cloud9 -prueba martes! <br>';

$db = new mysqli('127.0.0.1', 'ceeconro', '', 'c9', '3306');
if ($db->connect_errno > 0) {
die('Error al conectarse a la base de datos'.$db->connect_error);
} else {
die('Conectado!');
}


?>