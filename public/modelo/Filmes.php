<?php

class Filmes
{

    public array $somaNotas;

    public function __construct(
        public readonly string $nome,
        public readonly int    $anoLancamento,
        public readonly string $genero,
        private float          $nota = 0.0
    )
    {
        $this->somaNotas = [$nota];
    }

    public function totalNotas(): float
    {

        $resultadoSoma = array_sum($this->somaNotas);
        return $resultadoSoma;
    }


    public function media(): float
    {


        if (count($this->somaNotas) === 0) {
            return 0.0;
        } else {
            return $this->totalNotas() / 2.0;
        }


    }


    public function setSomaNotas(array $somaNotas): void
    {
        $this->somaNotas = $somaNotas;
    }


    public function getNota(): float
    {
        return $this->nota;
    }

    public function setNota(float $nota): void
    {
        $this->nota = $nota;
    }


}