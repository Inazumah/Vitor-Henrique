<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font: 12pt Georgia, "Times New Roman", Times, serif;
            color: #000;
            }

            h1 {
            font-size: 24pt;
            }

            h2 {
            font-size: 18pt;
            }

            h3 {
            font-size: 14pt;
            }

    </style>
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = htmlspecialchars($_POST["nome"]);
    $email = htmlspecialchars($_POST["email"]);
    $telefone = htmlspecialchars($_POST["telefone"]);
    $empresas = $_POST["empresa"];
    $cargos = $_POST["cargo"];
    $descricoes = $_POST["descricao"];
    $instituicoes = $_POST["instituicao"];
    $cursos = $_POST["curso"];
    $anos = $_POST["ano"];

    include 'templates/template.php';
}
?>
</body>
</html>
