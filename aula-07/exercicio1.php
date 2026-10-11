<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <title>Aula 7 — Exercício 1</title>
</head>

<body>
    <h1>Aula 7 — Exercício 1</h1>
    <?php
    // Exercício 1: prevê o resultado.
    // Os índices começam em 0; $fotos[] = ... acrescenta ao fim do array.
    // Resposta: praia.jpg, rio.jpg, 4 fotos, ponte.jpg.
    $fotos = ["praia.jpg", "serra.jpg", "rio.jpg"];
    echo "<p>Primeira: $fotos[0]</p>";
    echo "<p>Última: $fotos[2]</p>";
    $fotos[] = "ponte.jpg";
    echo "<p>Total: " . count($fotos) . " fotos</p>";
    echo "<p>Nova: $fotos[3]</p>";
    ?>
</body>

</html>
