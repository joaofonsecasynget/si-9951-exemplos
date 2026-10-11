<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <title>Playlist da turma</title>
</head>

<body>
    <h1>Playlist da turma</h1>
    <?php
    // Atividade: a playlist da turma.
    // Array com 5 músicas, contagem com count() e lista numerada <ol> com foreach.
    // Acrescenta uma 6.ª música e confirma que a contagem e a lista mudam sozinhas.
    // Extensão (opcional): array associativo $album, mostrado numa tabela com foreach com chave.
    $musicas = ["Rosa", "Lume", "Mar", "Sol", "Voo"];
    echo "<p>A playlist tem " . count($musicas) . " músicas.</p>";
    echo "<ol>";
    foreach ($musicas as $musica) {
        echo "<li>$musica</li>";
    }
    echo "</ol>";

    // Extensão
    $album = ["Artista" => "Banda X", "Ano" => 2024];
    echo "<table border='1'>";
    foreach ($album as $campo => $valor) {
        echo "<tr><th>$campo</th><td>$valor</td></tr>";
    }
    echo "</table>";
    ?>
</body>

</html>
