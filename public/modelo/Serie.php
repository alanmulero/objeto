<?php

class Serie extends Titulo implements CalculadoraDeMarattona{


    public function __construct(
        string $nome,
        int $anoLancamento,
        Genero $genero,
        public readonly int $temporadas,
        public readonly int $episodiosPorTemporada,
        public readonly int $minutosPorTemporada


    )
    {
        parent::__construct($nome,$anoLancamento,$genero);
    }


      public function incluiTitulo(Titulo $titulo): float
    {
        return $titulo->nota +=6;
    }


        public function alteraPreco(Titulo $preco): float
    {
        $impostoSerie = parent::$imposto += 4.7;
        return $this->$preco + $impostoSerie;
    }

 

    public function getDuracaoMinutos(): int
    {
        return $this->temporadas * $this->episodiosPorTemporada * $this->minutosPorTemporada;
    }


    








}






?>