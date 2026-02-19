<?php

require_once __DIR__ . '/Filmes.php';
require_once __DIR__ . '/../../src/funcoes.php';

?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filme Registrado</title>
</head>

<body>
    <h1>Filme Registrado com Sucesso!</h1>
    <?php
    $novoFilme = new Filmes($_POST['nome'] ?? 'Não Informado', $_POST['anoLancamento'] ?? 0, $_POST['genero'] ?? '', $_POST['nota'] ?? 0.0);
    imprimeFilme($novoFilme);
    ?>

    <br>
    <h4>Apresentando resultado das funções:</h4>
    <?php

    echo $novoFilme->totalNotas();
    echo "<br>";
    echo $novoFilme->media();



    ?>
    <br><a href="../index.html">Voltar ao formulário</a>
</body>

</html>