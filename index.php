<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador de Currículos</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <h1>Gerador de Currículos</h1>
    <form action="processar.php" method="post" id="curriculo-form">
        <h2>Dados Pessoais</h2>
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="telefone">Telefone:</label>
        <input type="text" id="telefone" name="telefone" required>

        <h2>Experiência Profissional</h2>
        <div id="experiencias">
            <div class="experiencia">
                <label for="empresa">Empresa:</label>
                <input type="text" name="empresa[]" required>
                <label for="cargo">Cargo:</label>
                <input type="text" name="cargo[]" required>
                <label for="descricao">Descrição:</label>
                <textarea name="descricao[]" required></textarea>
            </div>
        </div>
        <button type="button" onclick="adicionarExperiencia()">Adicionar Experiência</button>

        <h2>Formação Acadêmica</h2>
        <div id="formacoes">
            <div class="formacao">
                <label for="instituicao">Instituição:</label>
                <input type="text" name="instituicao[]" required>
                <label for="curso">Curso:</label>
                <input type="text" name="curso[]" required>
                <label for="ano">Ano de Conclusão:</label>
                <input type="text" name="ano[]" required>
            </div>
        </div>
        <button type="button" onclick="adicionarFormacao()">Adicionar Formação</button>

        <input type="submit" value="Gerar Currículo">

    </form>

    <script src="js/script.js"></script>
</body>
</html>
