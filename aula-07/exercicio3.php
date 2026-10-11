<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <title>Aula 7 — Exercício 3</title>
</head>

<body>
    <h1>Aula 7 — Exercício 3</h1>
    <?php
    // Exercício 3: altera a lista de filmes.
    // Acrescenta "Wall-E" ao array e mostra antes da lista quantos filmes há.
    // Extensão: troca <ul> por <ol> para os filmes aparecerem numerados.
    $filmes = ["Up", "Coco", "Soul"];
    $filmes[] = "Wall-E";
    echo "<p>" . count($filmes) . " filmes</p>";
    echo "<ul>";
    foreach ($filmes as $filme) {
        echo "<li>$filme</li>";
    }
    echo "</ul>";
    ?>
</body>

</html>
