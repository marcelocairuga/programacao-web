<?php

$db = __DIR__ . '/db.sqlite';

try {
    $conn = new PDO("sqlite:$db");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch (PDOException $e) {
		echo "Erro ao estabelecer a conexão com o banco de dados: " . $e->getMessage();
		exit;
}
