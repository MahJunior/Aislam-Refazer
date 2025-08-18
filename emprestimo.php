<?php
$livros = [];
if (file_exists('livros.json')) {
    $livros = json_decode(file_get_contents('livros.json'), true);
}
if (isset($_POST['titulo']) && !empty($_POST['titulo'])){
    $titulo = $_POST['titulo'];
    emprestimo($titulo);
    echo "<script>alert('Livro emprestado com sucesso!');</script>";
} else {
    echo "<script>alert('Livro não foi emprestado!');</script>";
}

// Função de emprestimo dos livros salvos
function emprestimo($titulo) {
    global $livros;
    for ($i = 0; $i < count($livros); $i++) {
        if ($livros[$i]["titulo"] == $titulo) {
            if ($livros[$i]["quantidade"] > 0) {
                $livros[$i]["quantidade"] -= 1;
                file_put_contents('livros.json', json_encode($livros));
            } else {
                echo "<script>alert('Não há exemplares disponíveis!');</script>";
            }
            return;
        }
    }
    echo "<script>alert('Livro não encontrado!');</script>";
}

?>
<!DOCTYPE html>
<html lang="en">
<body>
    <form action="index.php">
        <button type="submit">Voltar</button>
    </form>
</body>
</html>