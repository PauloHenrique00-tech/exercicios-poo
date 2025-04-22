<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 03</title>
</head>
<body>
    <h1>Exercício 03</h1>
    <hr>
    <p><i>Faça as chamadas e testes nesta página</i></p>

    <?php

require_once "src/enum/Genero.php";
require_once "src/Livro.php";
require_once "src/Literario.php";

require_once "src/enum/Formato.php";
require_once "src/Tecnico.php";
require_once "src/Programacao.php";

$livroLiterario = new Literario("A Teoria de Tudo", "Jane Hawking", Genero::DRAMA);

echo "Titulo: " . $livroLiterario->getTitulo() . "<br>";
echo "Autor: " . $livroLiterario->getAutor() . "<br>";
echo "Gênero: " . $livroLiterario->getGenero()->value . "<br>";
?>

<?php 
$livroProgramacao = new Programacao("Introdução ao PHP", "Thiago", Formato::FISICO, "PHP"); 

echo "Titulo: " . $livroProgramacao->getTitulo() . "<br>";
echo "Autor: " . $livroProgramacao->getAutor() . "<br>";
echo "Formato: " . $livroProgramacao->getFormato()->name . "<br>";
echo "Linguagem: " . $livroProgramacao->getLinguagem() . "<br>";
?>
</body>
</html>