<?php
// db_config.php
$servername = "127.0.0.1:3306"; // Или IP-адрес сервера MySQL
$username = "root";
$password = "root";
$dbname = "web";

$conn = null; // Объявляем $conn вне try-catch
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // Устанавливаем режим ошибок PDO в исключения
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

?>