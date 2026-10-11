<?php
// Aula 9 — Exercício 2: require, porque sem os dados a página não faz sentido.
// Exercício 3: a lista passa a tabela. Atividade: terceira coluna com a classificação em texto (extensão do exercício 3).
require "dados_filmes.php";
?>
<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <title>Filmes — Cinema Estrela</title>
</head>

<body>
    <?php include "cabecalho.php"; ?>
    <?php include "menu.php"; ?>
    <main>
        <p>Temos <?php echo count($filmes); ?> filmes.</p>
        <table border="1">
            <tr><th>Título</th><th>Nota</th><th>Classificação</th></tr>
            <?php foreach ($filmes as $filme): ?>
                <tr>
                    <td><?php echo $filme["titulo"]; ?></td>
                    <td><?php echo $filme["nota"]; ?></td>
                    <td><?php if ($filme["nota"] >= 8) { echo "Muito bom"; } else { echo "Razoável"; } ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </main>
    <?php include "rodape.php"; ?>
</body>

</html>
