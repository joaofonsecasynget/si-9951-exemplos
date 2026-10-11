<?php
// Aula 9 — Exercício 1: prevê o resultado. O PHP junta cabecalho.php e a página antes de
// enviar a resposta: o browser vê o header e o main como se fosse um só ficheiro.
?>
<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <title>Início — Cinema Estrela</title>
</head>

<body>
    <?php include "cabecalho.php"; ?>
    <?php include "menu.php"; ?>
    <main>
        <p>Bem-vindo ao Cinema Estrela!</p>
    </main>
    <?php include "rodape.php"; ?>
</body>

</html>
