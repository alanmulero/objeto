<?php

class Filmes{

    public array $somaNotas;

    public function __construct(
        private string $nome,
        private int $anoLancamento,
        private string $genero,
        private float $nota = 0.0
    )
    {
        $this->somaNotas = [$nota];
    }

    public function totalNotas(): float {

        $resultadoSoma = array_sum($this->somaNotas);
        return $resultadoSoma;
    }



    public function media() : float{


        if(count($this->somaNotas) === 0){
            return 0.0;}
            else{
            return $this->totalNotas() / 2.0;
        }



    }

    public function getNome():string {
        return $this->nome;
    }
    



    public function setNome(string $nome) {
        $this->nome = $nome;
    }


}