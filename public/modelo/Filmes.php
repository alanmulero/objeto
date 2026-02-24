<?php

class Filmes extends Titulo implements CalculadoraDeMarattona{

    

    public function __construct(

        string $nome,
        int $anoLancamento,
        Genero $genero,
        float $nota = 0.0,
        float $preco = 0.0
        
        

    )
    {
        parent::__construct($nome,$anoLancamento,$genero, $nota, $preco);
    }

   

   

    public function incluiTitulo(Titulo $titulo): float
    {
        return $titulo->nota +=2.3;
    }

    public function alteraPreco(Titulo $preco): float
    {
        $impostoFilme = $this->imposto + 3.3;
        return $preco->getPreco() + $impostoFilme;
    }
}