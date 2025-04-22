<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 02</title>
</head>
<body>
    <h1>Exercício 02</h1>
    <hr>
    <p><i>Faça as chamadas e testes nesta página</i></p>
    <?php
    require_once "src/Livro.php";

    $livroA = new Livro("livro foda", "J.J.", 1589);

    ?>

    <ul>
        <li><b>Titulo: </b><?=$livroA->getTitulo()?></li>
        <li><b>Autor: </b><?=$livroA->getAutor()?></li>
        <li><b>Paginas: </b><?=$livroA->getPaginas()?></li>
    </ul>
    
</body>
</html>