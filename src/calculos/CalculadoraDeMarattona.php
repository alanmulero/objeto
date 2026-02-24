<?php
interface CalculadoraDeMarattona{

    
    public const    TEMPO_MINIMO = 90;

    public function incluiTitulo(Titulo $titulo): float;

    public function alteraPreco(Titulo $titulo) :float;














}