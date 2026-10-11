<pre><?php
// Teórica 5 — Pergunta rápida: o que imprime com $nota = 14? E com 9?
// switch (true): cada case é uma condição; ganha o primeiro verdadeiro. Resposta: Bom; com 9, Insuficiente.
function classifica($nota) {
    switch (true) {
        case $nota >= 18:
            return "Excelente";
        case $nota >= 14:
            return "Bom";
        case $nota >= 10:
            return "Suficiente";
        default:
            return "Insuficiente";
    }
}
echo classifica(14) . "\n";
echo classifica(9);
?></pre>
