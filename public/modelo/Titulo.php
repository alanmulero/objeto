<?php

class Titulo
{
    protected float $imposto = 8.1;
    public array $somaNotas;

    public function __construct(

        public readonly string  $nome,
        public readonly int $anoLancamento,
        public readonly Genero $genero,
        public float $nota = 0.0,
        private float $preco 

    ) {
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
            return $this->totalNotas() / count($this->somaNotas);
        }
    }

        /**
         * Get the value of duracaoMinutos
         */ 
        public function getPreco()
        {
                return $this->preco;
        }

        /**
         * Set the value of duracaoMinutos
         *
         * @return  self
         */ 
        public function setPreco($preco)
        {
                $this->preco = $preco;

                
        }
}
