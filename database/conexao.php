<?php
$hostname = "localhost";
$database = "agendamento";
$username = "root";
$password = "";

try {
  $pdo = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);
} catch (PDOException $e) {
  echo "Erro: " . $e->getMessage();
}