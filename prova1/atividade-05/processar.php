<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $erros = [];

    $nome = trim($_POST["nome"] ?? "");
    $ingresso = filter_input(INPUT_POST, "ingresso", FILTER_VALIDATE_INT);
    $curso = $_POST["curso"] ?? "";
    $turno = $_POST["turno"] ?? "";
    $matriculado = $_POST["matriculado"] ?? "não";

    if (!$nome) {
        $erros[] = "O nome do aluno deve ser informado.";
    } elseif (strlen($nome) < 3) {
        $erros[] = "O nome do aluno deve conter pelo menos 3 letras.";
    }

    if (!$ingresso) {
        $erros[] = "O ano de ingresso deve ser informado e deve ser um número.";
    } elseif ($ingresso < 2006 || $ingresso > 2025) {
        $erros[] = "O ano de ingresso deve estar entre 2006 e 2025.";
    }

    if (!$curso) {
        $erros[] = "O curso do aluno deve ser selecionado.";
    } else {
        switch ($curso) {
            case "inf": $nomeCurso = "Técnico em Informática"; break;
            case "mct": $nomeCurso = "Técnico em Mecatrônica"; break;
            case "pfm": $nomeCurso = "Técnico em Fabricação Mecânica"; break;
            case "tsi": $nomeCurso = "Tecnólogo em Sistemas para Internet"; break;
            case "eca": $nomeCurso = "Engenharia de Controle e Automação"; break;
            case "ped": $nomeCurso = "Licenciatura em Pedagogia"; break;
            // default: $nomeCurso = "Desconhecido";
        }            
    }

    if (!$turno) {
        $erros[] = "O turno deve ser informado.";
    }
} else {
    header("Location: formulario.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Validação dos Dados</title>
</head>
<body>
    <h1>Validação dos Dados</h1>
    <div>
        <?php if (empty($erros)) : ?>
            <p>Os dados recebidos são válidos:</p>
            <ul>
                <li>Nome: <?= htmlspecialchars($nome) ?></li>
                <li>Ano de Ingresso: <?= $ingresso ?></li>
                <li>Curso: <?= $nomeCurso ?></li>
                <li>Turno: <?= ucfirst($turno) ?></li>
                <li>Matriculado: <?= $matriculado ?></li>
            </ul>
        <?php else : ?>
            <p>Os dados recebidos não são válidos:</p>
            <ul>
            <?php foreach ($erros as $erro) : ?>
                <li><?= $erro ?></li>
            <?php endforeach; ?>
            </ul>
        <?php endif; ?>
    </div>
    <p><a href="formulario.php">Voltar ao formulário</a></p>
</body>
</html>
