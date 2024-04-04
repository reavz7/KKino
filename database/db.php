<?php
$host = 'localhost';
$db_user = 'root';
$db_password = ''; // Domyślne hasło dla XAMPP, zmień je zgodnie z konfiguracją
$db_name = 'KKino';

$conn = new mysqli($host, $db_user, $db_password, $db_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
