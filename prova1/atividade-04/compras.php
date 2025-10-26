<?php
session_start();

if (!isset($_SESSION["produtos"])) {
    $_SESSION["produtos"] = [
        "refrigerante",
        "chocolate",
        "leite condensado"
    ];
}

// Verifica se o formulário foi enviado via POST
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $produto = trim($_POST["produto"] ?? "");
    if ($produto !== "") {
        $_SESSION["produtos"][] = $produto;
    }

    // Redireciona para evitar reenvio do formulário ao atualizar a página (F5)
    header("Location: compras.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Compras</title>
</head>
<body>
    <h1>Lista de Compras</h1>

    <!-- Formulário para adicionar novo produto -->
    <form action="compras.php" method="post">
        <label for="produto">Produto:</label>
        <input type="text" id="produto" name="produto">
        <button type="submit">Adicionar</button>
    </form>

    <!-- Lista de produtos -->
    <ul>
        <?php foreach ($_SESSION["produtos"] as $item): ?>
            <li><?= htmlspecialchars($item) ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
