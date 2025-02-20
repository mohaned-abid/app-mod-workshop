<?php
// Database configuration
// **HIGHLY INSECURE - DO NOT DO THIS IN PRODUCTION**
$db_host = '34.154.89.122'; // Replace with your instance connection name
$db_name = 'image_catalog'; //Replace with your database name
$db_user = 'appmod-phpapp-user'; //Replace with your database username
$db_pass = 'admin'; //Replace with your database password

try {
    $pdo = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Errore di connessione: " . $e->getMessage());
}

session_start();
?>