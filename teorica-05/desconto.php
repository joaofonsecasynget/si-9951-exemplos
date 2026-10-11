<pre><?php
// Teórica 5 — Pergunta rápida: o que devolve calcula_desconto(50, 10)?
// Resposta: 50 - 5 = 45. Extensão: calcula_desconto(50, 10) + calcula_desconto(20, 50) = 45 + 10 = 55.
function calcula_desconto($preco, $percentagem) {
    return $preco - ($preco * $percentagem / 100);
}
echo calcula_desconto(50, 10);
echo "\n";
echo calcula_desconto(50, 10) + calcula_desconto(20, 50);
?></pre>
