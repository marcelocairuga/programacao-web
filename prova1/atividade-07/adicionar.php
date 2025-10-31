<?php
// Importa o arquivo de conexão com o banco
require_once "conexao.php";

// Inicializa variáveis de apoio
$erro = "";
$modelo = "";
$ano = "";
$preco = "";

// Verifica se o formulário foi enviado (método POST)
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // Captura os valores enviados
    $modelo = trim($_POST["modelo"] ?? "");
    $ano = filter_input(INPUT_POST, "ano", FILTER_VALIDATE_INT);
    $preco = filter_input(INPUT_POST, "preco", FILTER_VALIDATE_FLOAT);

    // --- Validações ---
    if ($modelo === "") {
        $erro = "O modelo é obrigatório.";
    } elseif (!$ano || $ano < 1990 || $ano > 2026) {
        $erro = "O ano deve ser um número inteiro entre 1990 e 2026.";
    } elseif (!$preco || $preco <= 0) {
        $erro = "O preço deve ser um número maior do que zero.";
    } 

    // --- Se não houver erros, insere no banco ---
    if ($erro === "") {
        try {
            $sql = "INSERT INTO carros (modelo, ano, preco) 
                    VALUES (:modelo, :ano, :preco)";
            $stmt = $pdo->prepare($sql);

            // Associa os parâmetros
            $stmt->bindParam(":modelo", $modelo);
            $stmt->bindParam(":ano", $ano, PDO::PARAM_INT);
            $stmt->bindParam(":preco", $preco);

            // Executa o comando
            $stmt->execute();

            // Redireciona para o catálogo
            header("Location: catalogo.php");
            exit;
        } catch (PDOException $e) {
            $erro = "Erro ao inserir no banco de dados: " . $e->getMessage();
        }
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Veículo</title>
</head>
<body>
    <h1>Novo Veículo</h1>

    <form method="post" action="adicionar.php">
        <label for="modelo">Modelo:</label>
        <input type="text" id="modelo" name="modelo" value="<?= htmlspecialchars($modelo) ?>"><br><br>

        <label for="ano">Ano:</label>
        <input type="number" id="ano" name="ano" value="<?= htmlspecialchars($ano) ?>"><br><br>

        <label for="preco">Preço:</label>
        <input type="number" step="0.01" id="preco" name="preco" value="<?= htmlspecialchars($preco) ?>"><br><br>

        <input type="submit" value="Salvar">
    </form>

    <!-- Exibe a mensagem de erro, se existir -->
    <?php if ($erro !== ""): ?>
        <p style="color:red;"><?= $erro ?></p>
    <?php endif; ?>

    <p><a href="catalogo.php">Voltar</a></p>
</body>
</html>
