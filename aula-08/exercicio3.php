<pre><?php
// Aula 8 — Exercício 3: altera o exemplo para recortar só a primeira palavra ("o")
// e trocar "senhor" por "regresso". Extensão: substr($titulo, -5) dá os últimos 5 carateres.
$titulo = "o senhor dos aneis";
echo substr($titulo, 0, 1);
echo "\n";
echo str_replace("senhor", "regresso", $titulo);
echo "\n";
echo substr($titulo, -5);
?></pre>
