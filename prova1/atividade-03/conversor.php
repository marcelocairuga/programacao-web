<?php

$temperatura = filter_input(INPUT_GET, "temperatura", FILTER_VALIDATE_FLOAT);
$escala = $_GET["escala"] ?? "";

if ($temperatura === null || $temperatura === false || $escala === "") {
    header("Location: form.php?erro=1&temperatura=" . urlencode($_GET["temperatura"] ?? "") . "&escala=" . urlencode($escala));
    exit();
}

if ($escala === "C") {
    $convertida = ($temperatura * 9 / 5) + 32;
    $escala_original = "Celsius";
    $escala_convertida = "Fahrenheit";
} elseif ($escala === "F") {
    $convertida = ($temperatura - 32) * 5 / 9;
    $escala_original = "Fahrenheit";
    $escala_convertida = "Celsius";
} else {
    header("Location: form.php?erro=1");
    exit();
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Conversor de Temperaturas</title>
</head>
<body>
    <h1>Conversor de Temperaturas</h1>
    <p>Temperatura Original: <?= number_format($temperatura, 1, ',', '.') ?>˚ <?= $escala_original ?></p>
    <p>Temperatura Convertida: <?= number_format($convertida, 1, ',', '.') ?>˚ <?= $escala_convertida ?></p>
    <a href="form.php?temperatura=<?= urlencode($temperatura) ?>&escala=<?= urlencode($escala) ?>">Voltar</a>
</body>
</html>
