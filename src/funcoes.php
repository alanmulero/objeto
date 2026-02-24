<?php

require_once __DIR__ . '/../public/modelo/Genero.php';
//require_once __DIR__ . '/public/modelo/Filme.php';
require_once __DIR__ . '/../public/modelo/Filmes.php';

$matrix = new Filmes('Matrix', 2000, Genero::Acao, 10.0, 20.0);

function imprimeFilme(Filmes $filme): Filmes
{
    echo "<ul>";
    echo "<li><strong>Nome:</strong> " . htmlspecialchars($filme->nome) . "</li>";
    echo "<li><strong>Ano de Lançamento:</strong> " . $filme->anoLancamento . "</li>";
    echo "<li><strong>Nota:</strong> " . $filme->nota . "</li>";
    echo "<li><strong>Gênero:</strong> " . htmlspecialchars($filme->genero->name) . "</li>";
    echo "</ul>";

    return $filme;
}


imprimeFilme($matrix);