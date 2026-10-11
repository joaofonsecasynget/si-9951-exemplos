<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <title>Aula 6 — Exercício 2</title>
</head>

<body>
    <h1>Aula 6 — Exercício 2</h1>
    <?php
    // Exercício 2: completa o envio grátis.
    // Enunciado: if ($preco ____ 50) { ... } ____ { ... }
    // Compras de 50 euros ou mais têm envio grátis; as outras pagam 5 euros.
    $preco = 45;
    if ($preco >= 50) {
        echo "Envio grátis";
    } else {
        echo "Envio: 5 euros";
    }
    ?>
</body>

</html>
