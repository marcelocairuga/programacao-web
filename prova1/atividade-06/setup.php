<?php
require_once __DIR__ . "/conexao.php";

$conn->exec("DROP TABLE IF EXISTS carros");
$conn->exec("CREATE TABLE carros (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    modelo TEXT NOT NULL,
    ano INT NOT NULL,
    preco REAL NOT NULL
)");
echo "Tabela 'carros' criada com sucesso...\n";

$carros = [
    ['ano' => 2022, 'modelo' => 'Argo', 'preco' => 25000],
    ['ano' => 2021, 'modelo' => 'Civic', 'preco' => 95000],
    ['ano' => 2022, 'modelo' => 'Corolla', 'preco' => 120000],
    ['ano' => 2024, 'modelo' => 'Onix', 'preco' => 80000],
    ['ano' => 2023, 'modelo' => 'HB20', 'preco' => 70000],
];

$sql = "INSERT INTO carros (modelo, ano, preco) 
        VALUES (:modelo, :ano, :preco)";
$stmt = $conn->prepare($sql);
foreach ($carros as $carro) {
    // executa a instrução, uma vez para cada carro
    $stmt->execute($carro);
}
echo "Todos os carros foram criados com sucesso...\n";
