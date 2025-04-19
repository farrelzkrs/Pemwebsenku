<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'senku_coffee_db');

$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if ($conn === false) {
    die("ERROR: Tidak dapat terhubung ke database. Silakan coba lagi nanti.");
}

mysqli_set_charset($conn, "utf8mb4");
?>