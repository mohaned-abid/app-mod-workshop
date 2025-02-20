<?php
// **HIGHLY INSECURE - DO NOT DO THIS IN PRODUCTION**
$db_host = '34.154.89.122'; // Replace with your instance connection name
$db_name = 'image_catalog'; //Replace with your database name
$db_user = 'appmod-phpapp-user'; //Replace with your database username
$db_pass = 'admin'; //Replace with your database password

try {
    //Use the PDO MySQL socket connection. This is generally preferred for better performance and security in Google Cloud.
    $pdo = new PDO("mysql:unix_socket=/cloudsql/{$db_host};dbname={$db_name}", $db_user, $db_pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    die("Error connecting to Cloud SQL: " . $e->getMessage());
}

session_start();
?>
