<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <title>Aula 6 — Exercício 1</title>
</head>

<body>
    <h1>Aula 6 — Exercício 1</h1>
    <?php
    // Exercício 1: prevê o resultado.
    // Antes de correr, escreve o que aparece no browser com $stock = 3 e com $stock = 10.
    // Resposta: com 3 aparece "Stock baixo!" e "Verificação concluída."; com 10 só "Verificação concluída."
    $stock = 3;
    if ($stock < 5) {
        echo "Stock baixo!";
        echo "<br>";
    }
    echo "Verificação concluída.";
    ?>
</body>

</html>
