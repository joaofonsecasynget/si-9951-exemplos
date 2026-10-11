<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <title>Aula 7 — Exercício 4</title>
</head>

<body>
    <h1>Aula 7 — Exercício 4</h1>
    <?php
    // Exercício 4: completa a ficha do filme.
    // Enunciado: foreach ($filme ____ $campo ____ $valor)
    // Extensão: mostra só o ano, por baixo da tabela, com $filme["Ano"].
    $filme = [
        "Título" => "Up",
        "Ano" => 2009,
        "Género" => "Animação"
    ];
    echo "<table border='1'>";
    foreach ($filme as $campo => $valor) {
        echo "<tr><th>$campo</th><td>$valor</td></tr>";
    }
    echo "</table>";
    echo "<p>Ano: " . $filme["Ano"] . "</p>";
    ?>
</body>

</html>
