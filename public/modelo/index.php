<?php
require_once __DIR__ . '/Genero.php';
require_once __DIR__ . '/Titulo.php';
require_once __DIR__ . '/../../src/calculos/CalculadoraDeMarattona.php';
require_once __DIR__ . '/Serie.php';
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
    $generoEnum = match($_POST['genero'] ?? '') {
        'Ação' => Genero::Acao,
        'Comédia' => Genero::Comedia,
        'Terror' => Genero::Terror,
        'Super-Herói' => Genero::SuperHeroi,
        'Drama' => Genero::Drama,
        default => Genero::Acao,
    };
    $novoFilme = new Filmes($_POST['nome'] ?? 'Não Informado', $_POST['anoLancamento'] ?? 0, $generoEnum, $_POST['nota'] ?? 0.0);
    imprimeFilme($novoFilme);
    ?>

    <br>
    <h4>Apresentando resultado das funções:</h4>
    <?php

echo $novoFilme->totalNotas();
echo "<br>";
echo $novoFilme->media();
echo "<br>";
echo "<h3> Resultados dos implements. </h3>";
echo "<br>";
echo "Filmes:".PHP_EOL;
echo $novoFilme->incluiTitulo($novoFilme).PHP_EOL;
echo $novoFilme->alteraPreco($novoFilme).PHP_EOL;

?>
    <br><a href="../index.html">Voltar ao formulário</a>
</body>

</html>