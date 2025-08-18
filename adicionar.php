<?php

$livros = [];
if (file_exists('livros.json')) {
    $livros = json_decode(file_get_contents('livros.json'), true);
}

if (
    isset($_POST['titulo']) && !empty($_POST['titulo']) &&
    isset($_POST['autor']) && !empty($_POST['autor']) &&
    isset($_POST['quantidade']) && !empty($_POST['quantidade'])
) {
    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];
    $quantidade = intval($_POST['quantidade']); // Garante que seja número
    adicionarLivro($titulo, $autor, $quantidade);
    echo "<script>alert('livro adicionado com sucesso!');</script>";
} else {
    echo "<script>alert('livro não foi adicionado!');</script>";
}

// Salvar um novo livro
function adicionarLivro($titulo, $autor, $quantidade) {
    global $livros;
    $livros[] = ["titulo" => $titulo, "autor" => $autor, "quantidade" => $quantidade];
    file_put_contents('livros.json', json_encode($livros));
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Adicionar Livro</title>
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
        .form-container {
            background: #fffbe6;
            border: 1px solid #e2d3b2;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(107, 79, 29, 0.08);
            max-width: 350px;
            margin: 30px auto;
            padding: 25px 30px;
            text-align: center;
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
            margin-top: 10px;
            width: 100%;
        }
        button:hover {
            background: #3e2c0b;
        }
    </style>
</head>
<body>
    <h1>📚 Adicionar Livro</h1>
    <div class="form-container">
        <form action="index.php">