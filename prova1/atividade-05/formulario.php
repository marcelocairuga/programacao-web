<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Formulário</title>
</head>
<body>
    <form action="processar.php" method="post">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome">

        <label for="ingresso">Ano de Ingresso:</label>
        <input type="number" name="ingresso" id="ingresso">

        <label for="curso">Curso:</label>
        <select name="curso" id="curso" required>
            <option value="">-- Selecione um curso --</option>
            <option value="inf">Técnico em Informática</option>
            <option value="mct">Técnico em Mecatrônica</option>
            <option value="pfm">Técnico em Fabricação Mecânica</option>
            <option value="tsi">Tecnólogo em Sistemas para Internet</option>
            <option value="eca">Engenharia de Controle e Automação</option>
            <option value="ped">Licenciatura em Pedagogia</option>
        </select>

        <fieldset>
            <legend>Turno:</legend>
            <input type="radio" name="turno" value="manha" id="turno_manha">
            <label for="turno_manha">Manhã</label>

            <input type="radio" name="turno" value="tarde" id="turno_tarde">
            <label for="turno_tarde">Tarde</label>

            <input type="radio" name="turno" value="noite" id="turno_noite">
            <label for="turno_noite">Noite</label>
        </fieldset>

        <input type="checkbox" name="matriculado" value="sim" id="matriculado">
        <label for="matriculado">Matriculado?</label>

        <button type="submit">Enviar</button>
        <button type="reset">Limpar</button>
    </form>
</body>
</html>
