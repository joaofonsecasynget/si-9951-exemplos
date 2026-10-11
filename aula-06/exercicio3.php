<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <title>Aula 6 — Exercício 3</title>
</head>

<body>
    <h1>Aula 6 — Exercício 3</h1>
    <?php
    // Exercício 3: completa a cadeia de idades.
    // Enunciado: } elseif ($idade ____ 18) { ... } ____ { ...
    // Criança até aos 11, jovem dos 12 aos 17, adulto a partir dos 18.
    $idade = 15;
    if ($idade < 12) {
        echo "Criança";
    } elseif ($idade < 18) {
        echo "Jovem";
    } else {
        echo "Adulto";
    }
    ?>
</body>

</html>
