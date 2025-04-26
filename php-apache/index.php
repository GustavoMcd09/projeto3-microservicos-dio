<?php
require __DIR__ . '/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$host = $_ENV['DB_HOST'];
$db   = $_ENV['DB_NAME'];
$user = $_ENV['DB_USER'];
$pass = $_ENV['DB_PASSWORD'];

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}

$result = $conn->query("SELECT * FROM alimentos");

echo "<h1>Lista de Alimentos</h1><ul>";
while ($row = $result->fetch_assoc()) {
    echo "<li>{$row['nome']} - {$row['categoria']} - R$ {$row['preco']} - Vencimento: {$row['validade']}</li>";
}
echo "</ul>";

$conn->close();
?>

