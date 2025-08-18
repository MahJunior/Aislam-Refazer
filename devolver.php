<?php
$livros = [];
if (file_exists('livros.json')) {
    $livros = json_decode(file_get_contents('livros.json'), true);
}
if (isset($_POST['titulo']) && !empty($_POST['titulo'])){
    $titulo = $_POST['titulo'];
    devolverExemplar($titulo);
    echo "<script>alert('Exemplar devolvido com sucesso!');</script>";
} else {
    echo "<script>alert('Exemplar não foi devolvido!');</script>";
}

// Função para adicionar um exemplar ao livro
function devolverExemplar($titulo) {
    global $livros;
    for ($i = 0; $i < count($livros); $i++) {
        if ($livros[$i]["titulo"] == $titulo) {
            $livros[$i]["quantidade"] += 1;
            file_put_contents('livros.json', json_encode($livros));
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