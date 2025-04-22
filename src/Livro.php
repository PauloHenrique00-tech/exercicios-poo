<?php
abstract class Livro 
{
    private string $titulo;
    private string $autor;
    
/* Construtor é sempre público */
    public function __construct(string $titulo, string $autor) 
    {
        $this->setTitulo($titulo);
        $this->setAutor($autor);
    }
    

    public function setTitulo(string $titulo): void
    {
        $this->titulo = $titulo;
    }

    public function setAutor(string $autor): void
    {
        if(strlen($autor) < 5){
            throw new InvalidArgumentException("Autor tem que ter pelo menos 5 letras");
        }

        $this->autor = $autor;
    }

    public function getTitulo(): string 
    {
        return $this->titulo;
    }

    public function getAutor(): string 
    {
        return $this->autor;
    }
}