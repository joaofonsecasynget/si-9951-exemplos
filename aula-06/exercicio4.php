<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <title>Aula 6 — Exercício 4</title>
</head>

<body>
    <h1>Aula 6 — Exercício 4</h1>
    <?php
    // Exercício 4: completa com || e !.
    // Enunciado: if ($nota < 0 ____ $nota > 20) e if (____$autenticado).
    // Uma nota é inválida se for menor que 0 OU maior que 20; ! inverte o valor lógico.
    $nota = -5;
    if ($nota < 0 || $nota > 20) {
        echo "Nota inválida";
    } else {
        echo "Nota válida";
    }

    $autenticado = false;
    if (!$autenticado) {
        echo "<br>Precisa de iniciar sessão";
    }
    ?>
</body>

</html>
