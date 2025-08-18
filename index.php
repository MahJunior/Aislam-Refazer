<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca</title>
</head>
<body>
    <style>
        body {
            background: #f5f3e7;
            font-family: 'Segoe UI', Arial, sans-serif;
            color: #3e2c0b;
            margin: 0;
            padding: 0;
        }
        h1 {
            text-align: center;
            font-size: 2.5em;
            margin-top: 30px;
            color: #6b4f1d;
        }
        form {
            background: #fffbe6;
            border: 1px solid #e2d3b2;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(107, 79, 29, 0.08);
            max-width: 350px;
            margin: 30px auto;
            padding: 25px 30px;
        }
        label {
            font-size: 1.2em;
            color: #6b4f1d;
            font-weight: bold;
        }
        input[type="text"] {
            width: 100%;
            padding: 8px 10px;
            margin: 10px 0 18px 0;
            border: 1px solid #d1bfa3;
            border-radius: 5px;
            background: #f9f6ef;
            font-size: 1em;
        }
        button {
            background: #6b4f1d;
            color: #fffbe6;
            border: none;
            border-radius: 5px;
            padding: 10px 18px;
            font-size: 1em;
            cursor: pointer;
            transition: background 0.2s;
        }
        button:hover {
            background: #3e2c0b;
        }
        .nav-btn {
            margin-top: 10px;
            width: 100%;
        }
    </style>

    <form id="Formulario" action="adicionar.php" method="post">
        <label for="adicionar">Adicione um livro</label>
        <br/>
        <input id="titulo" name="titulo" type="text" placeholder="Titulo do livro">
        <br/>
        <input id="autor" name="autor" type="text" placeholder="Autor do livro">
        <br/>
        <input id="quantidade" name="quantidade" type="text" placeholder="quantidade do livro">
        <br/>
        <button type="submit">adicionar</button>
    </form>
    <form action="livros.php">
        <button type="submit">Visualizar livros</button>
        <br/>
    </form>
    <form action="devolver.php">
        <label for="adicionar">Devolucao do livro</label>
        <br/>
        <input id="titulo" name="titulo" type="text" placeholder="Titulo do livro">
        <button type="submit">Devolver livros</button>
        <br/>
    </form>
</body>
</html>

<?php

// Função de emprestimo dos livros salvos
function emprestimo($titulo) {
    for ($i = 0; $i < count($GLOBALS["livros"]); $i++) {
        $livros = $GLOBALS["livros"][$i];
        if ($livros["titulo"] == $titulo) {
            $GLOBALS["livros"][$i]["quantidade"] = $livros["quantidade"] - 1;
            if ($GLOBALS["livros"][$i]["quantidade"] < 0) {
                echo "Erro\n";
            }
        }
    }
}
// Função de devolver os livros emprestados
function devolver($titulo){
    for($i = 0; $i < count($GLOBALS["livros"]); $i++){
        $livros = $GLOBALS["livros"] [$i];
    if ($livros ["titulo"] ==$titulo)
    $GLOBALS ["livros"] [$i] ["quantidade"] = $livros["quantidade"] + 1;
       if ($GLOBALS["livros"][$i]["quantidade"] < 0) {
                echo "Erro\n";
            }  
    
        
    }
}

?>
