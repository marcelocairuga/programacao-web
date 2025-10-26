<?php
$produtos = [
    ["codigo" => 101, "nome" => "Mouse Sem Fio",      "preco" => 89.90,  "estoque" => 12],
    ["codigo" => 102, "nome" => "Teclado Mecânico",   "preco" => 249.50, "estoque" => 7],
    ["codigo" => 103, "nome" => "Monitor 24 pol",     "preco" => 899.00, "estoque" => 4],
    ["codigo" => 104, "nome" => "Headset Gamer",      "preco" => 199.90, "estoque" => 9],
    ["codigo" => 105, "nome" => "Webcam Full HD",     "preco" => 159.75, "estoque" => 5],
    ["codigo" => 106, "nome" => "Cadeira Ergonômica", "preco" => 1199.00,"estoque" => 2]
];

$filtro = $_GET["filtro"] ?? "";

if (!empty($filtro)) {
    $filtrados = array_filter($produtos, function($produto) use ($filtro) {
        return stripos($produto["nome"], $filtro) !== false;
    });
} else {
    $filtrados = $produtos;
}

$quantidade = count($filtrados);
$estoque_total = 0;
$soma_precos = 0;

foreach ($filtrados as $produto) {
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
    <!-- Formulário de filtro -->
    <form method="get" action="">
        <label for="filtro">Nome do produto:</label>
        <input type="text" name="filtro" id="filtro" value="<?= $filtro ?>">
        <button type="submit">Filtrar</button>
    </form>

    <?php if (empty($filtrados)): ?>
        <p>Nenhum produto encontrado.</p>
    <?php else: ?>
        <table>
            <tr>
                <th>Código</th>
                <th>Nome do Produto</th>
                <th>Estoque</th>
                <th>Preço</th>
            </tr>
            <?php foreach($filtrados as $produto): ?>
                <tr>
                    <td><?= $produto["codigo"] ?></td>
                    <td><?= $produto["nome"] ?></td>
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
