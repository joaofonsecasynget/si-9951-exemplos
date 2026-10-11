<pre><?php
// Aula 8 — Exercício 1: prevê o resultado. (14 + 16 + 12) / 3 = 14.
// Extensão: com um quarto parâmetro $nota4 = 0 e divisão por 4, chamar sem o quarto valor dá 10.5.
function calcula_media($nota1, $nota2, $nota3) {
    return ($nota1 + $nota2 + $nota3) / 3;
}
echo calcula_media(14, 16, 12);
echo "\n";

function calcula_media4($nota1, $nota2, $nota3, $nota4 = 0) {
    return ($nota1 + $nota2 + $nota3 + $nota4) / 4;
}
echo calcula_media4(14, 16, 12);
?></pre>
