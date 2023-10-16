<?php
$host = 'localhost';
$dbname = 'bdm';
$username = 'root';
$password = '';

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //echo "Conexión a la base de datos establecida correctamente";

} catch(PDOException $e) {
    if ($e->getCode() == 2006) {
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    } else {
        echo "Error en la base de datos: " . $e->getMessage();
    }
}
?>