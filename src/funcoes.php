<?php

//require_once __DIR__ . '/public/modelo/Filme.php';
require_once __DIR__ . '/../public/modelo/Filmes.php';

$matrix = new Filmes('Matrix', 2000, 'ação', 10.0);

function imprimeFilme(Filmes $filme): Filmes
{
    echo "<ul>";
    echo "<li><strong>Nome:</strong> " . htmlspecialchars($filme->nome) . "</li>";
    echo "<li><strong>Ano de Lançamento:</strong> " . $filme->anoLancamento . "</li>";
    echo "<li><strong>Nota:</strong> " . $filme->nota . "</li>";
    echo "<li><strong>Gênero:</strong> " . htmlspecialchars($filme->genero) . "</li>";
    echo "</ul>";

    return $filme;
}


imprimeFilme($matrix);