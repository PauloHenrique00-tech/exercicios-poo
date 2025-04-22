<?php

class Literario extends Livro
{
    private Genero $genero;

    public function __construct(string $titulo, string $autor, Genero $genero)
    {
        parent:: __construct()
    }
}