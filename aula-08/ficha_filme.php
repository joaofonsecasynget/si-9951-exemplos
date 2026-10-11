<pre><?php
// Aula 8 — Atividade: função ficha_filme($titulo, $ano, $nota) que limpa o título com trim(),
// formata a nota com number_format($nota, 1) e devolve "Título (Ano) — nota: X.X/10 — ficha gerada em DD/MM/AAAA".
// Extensão (opcional): quarto parâmetro $genero com valor por omissão "Desconhecido".
function ficha_filme($titulo, $ano, $nota, $genero = "Desconhecido") {
    $titulo = trim($titulo);
    $nota = number_format($nota, 1);
    $hoje = date("d/m/Y");
    return "$titulo ($ano, $genero) — nota: $nota/10 — ficha gerada em $hoje";
}
echo ficha_filme("  o regresso do código  ", 2024, 8.456);
echo "\n";
echo ficha_filme("Viagem ao Fundo do Código", 2023, 9, "Aventura");
?></pre>
