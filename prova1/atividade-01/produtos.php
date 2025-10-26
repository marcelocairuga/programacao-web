<?php

// Array de produtos — cada produto é um array associativo
$produtos = [
    [
        "codigo" => 101,
        "nome" => "Mouse Sem Fio",
        "preco" => 89.90,
        "estoque" => 12
    ],
    [
        "codigo" => 102,
        "nome" => "Teclado Mecânico",
        "preco" => 249.50,
        "estoque" => 7
    ],
    [
        "codigo" => 103,
        "nome" => "Monitor 24 polegadas",
        "preco" => 899.00,
        "estoque" => 4
    ],
    [
        "codigo" => 104,
        "nome" => "Headset Gamer",
        "preco" => 199.90,
        "estoque" => 9
    ],
    [
        "codigo" => 105,
        "nome" => "Webcam Full HD",
        "preco" => 159.75,
        "estoque" => 5
    ]
];

// $produtos = []; // Simula nenhum produto encontrado

$quantidade = count($produtos);
$estoque_total = 0;
$soma_precos = 0;

// Calcula o estoque total e a soma dos preços
foreach ($produtos as $produto) {
    $estoque_total += $produto["estoque"];
    $soma_precos += $produto["preco"];
}

// Evita divisão por zero
$preco_medio = $quantidade > 0 ? $soma_precos / $quantidade : 0;
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Relatório de Produtos</title>
</head>
<body>
    <h1>Relatório de Produtos</h1>
    <?php if (empty($produtos)): ?>
        <p>Nenhum produto encontrado</p>
    <?php else: ?>
        <table>
            <tr>
                <th>Código</th>
                <th>Nome do Produto</th>
                <th>Estoque</th>
                <th>Preço</th>
            </tr>
            <?php foreach($produtos as $produto): ?>
                <tr>
                    <td><?= htmlspecialchars($produto["codigo"]) ?></td>
                    <td><?= htmlspecialchars($produto["nome"]) ?></td>
                    <td><?= $produto["estoque"] ?></td>
                    <td>R$ <?= number_format($produto["preco"], 2, ',', '.') ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
        <div>
            <p>Quantidade de produtos: <?= $quantidade ?></p>
            <p>Estoque total: <?= $estoque_total ?></p>
            <p>Preço médio: R$ <?= number_format($preco_medio, 2, ',', '.') ?></p>
        </div>
    <?php endif; ?>
</body>
</html>
