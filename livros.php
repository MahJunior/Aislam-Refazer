<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca - Livros</title>
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
        .livro-lista {
            background: #fffbe6;
            border: 1px solid #e2d3b2;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(107, 79, 29, 0.08);
            max-width: 400px;
            margin: 30px auto;
            padding: 25px 30px;
        }
        .livro-item {
            border-bottom: 1px solid #e2d3b2;
            padding-bottom: 12px;
            margin-bottom: 12px;
        }
        .livro-item:last-child {
            border-bottom: none;
            margin-bottom: 0;
            padding-bottom: 0;
        }
        label {
            font-size: 1.1em;
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
</head>
<body>
    <h1>📚 Biblioteca - Livros</h1>
    <div class="livro-lista">
        <?php
        // Lista de livros salvos
        $livros = [];
        if (file_exists('livros.json')) {
            $livros = json_decode(file_get_contents('livros.json'), true);
        }
        // função de mostrar os livros salvos
        function mostrarLivros($livros){
            for($i = 0; $i < count($livros); $i++){
                $livrosAtual = $livros[$i];
                echo '<div class="livro-item">';
                echo "📖 <strong>Livro #" . ($i + 1) . "</strong><br/>";
                echo "<strong>Título:</strong> " . $livrosAtual["titulo"] . "<br/>";
                echo "<strong>Autor:</strong> " . $livrosAtual["autor"] . "<br/>";
                echo "<strong>Quantidade:</strong> " . $livrosAtual["quantidade"] . "<br/>";
                echo "</div>";
            }
        }
        mostrarLivros($livros); 
        ?>
        <form action="emprestimo.php" method="post">
            <label for="titulo">Reservar um livro</label>
            <input id="titulo" name="titulo" type="text" placeholder="Título do livro">
            <button type="submit">Reservar</button>
        </form>
         <form action="devolver.php" method="post">
            <label for="titulo">Devolver</label>
            <input id="titulo" name="titulo" type="text" placeholder="Título do livro">
            <button type="submit">Devolver</button>
    
        </form>
        <form action="index.php">
            <button type="submit" class="nav-btn">Voltar</button>
        </form>
    </div>
</body>
</html>