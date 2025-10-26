<?php

require_once __DIR__ . "/conexao.php";

$sql = "SELECT * FROM carros";
$stmt = $conn->query($sql);
$carros = $stmt->fetchAll();

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">      
    <title>Catálogo de Carros</title>
</head>
<body>
    <h1>Catálogo de Carros</h1>
    <?php if (empty($carros)): ?>
        <p>Nenhum carro encontrado.</p>
    <?php else: ?>
        <table>
            <tr>
                <th>Modelo</th>
                <th>Ano</th>
                <th>Preço</th>
            </tr>
            <?php foreach($carros as $carro): ?>
                <tr>
                    <td><?= $carro["modelo"] ?></td>
                    <td><?= $carro["ano"] ?></td>
                    <td>R$ <?= number_format($carro["preco"], 2, ",", ".") ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
</body>
</html>
