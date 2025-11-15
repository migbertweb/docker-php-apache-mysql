<?php
/**
 * Archivo: index.php
 * Descripción: Archivo PHP principal que muestra un mensaje de bienvenida y contiene
 *              código de ejemplo (comentado) para conectarse a MySQL/MariaDB usando PDO
 * Autor: migbertweb
 * Fecha: 2024
 * Repositorio: https://github.com/migbertweb/docker-php-apache-mysql
 * Licencia: MIT License
 *
 * Uso: Punto de entrada principal de la aplicación web. Muestra "Hello World!" por defecto.
 *      Descomenta el código de conexión a MySQL para probar la conectividad con la base de datos.
 *
 * Nota: Este proyecto usa Licencia MIT. Se recomienda (no obliga) mantener 
 *       derivados como código libre, especialmente para fines educativos.
 */

// Mensaje de bienvenida simple
echo 'Hello World!';

// Código de ejemplo para conexión a MySQL/MariaDB (descomentar para usar)
// Este código se conecta a la base de datos usando PDO y muestra los registros de la tabla Persons

/*
// Configuración de conexión a MySQL/MariaDB
// El host "mysql" corresponde al nombre del servicio definido en docker-compose.yml
$host = "mysql";
$dbname = "my-wonderful-website";
$charset = "utf8";
$port = "3306";

try {
    // Crear conexión PDO a la base de datos
    $pdo = new PDO(
        dsn: "mysql:host=$host;dbname=$dbname;charset=$charset;port=$port",
        username: "root",
        password: "super-secret-password",
    );

    // Consultar todos los registros de la tabla Persons
    $persons = $pdo->query("SELECT * FROM Persons");

    // Mostrar los resultados formateados
    echo '<pre>';
    foreach ($persons->fetchAll(PDO::FETCH_ASSOC) as $person) {
        print_r($person);
    }
    echo '</pre>';

} catch (PDOException $e) {
    // Manejo de errores de conexión
    throw new PDOException(
        message: $e->getMessage(),
        code: (int)$e->getCode()
    );
}
*/
