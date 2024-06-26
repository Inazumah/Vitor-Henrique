<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Currículo de <?php echo $nome; ?></title>
    <link rel="stylesheet" href="../css/estilo.css">
    
</head>
<body>
    <h1><?php echo $nome; ?></h1>
    <p>Email: <?php echo $email; ?></p>
    <p>Telefone: <?php echo $telefone; ?></p>

    <h2>Experiência Profissional</h2>
    <ul>
        <?php
        foreach ($empresas as $index => $empresa) {
            echo "<li><strong>$empresa</strong> - $cargos[$index]<br>$descricoes[$index]</li>";
        }
        ?>
    </ul>

    <h2>Formação Acadêmica</h2>
    <ul>
        <?php
        foreach ($instituicoes as $index => $instituicao) {
            echo "<li><strong>$instituicao</strong> - $cursos[$index] ($anos[$index])</li>";
        }
        ?>
    </ul>
    <button onclick="window.print()">Imprimir / Salvar PDF</button>
</body>
</html>