<pre><?php
// Aula 8 — Exercício 2: completa com funções de texto.
// Enunciado: $limpo = ____($filme); echo ____($limpo); — o comprimento tem de ser 26.
// Extensão: echo strtolower($limpo);
echo "\n";
// Nota: strtoupper() não converte letras acentuadas (dá "CóDIGO"). Para texto em português,
// usa mb_strtoupper(), que trata bem os acentos:
echo mb_strtoupper($limpo);
$filme = "  viagem ao fundo do código  ";
$limpo = trim($filme);
echo strtoupper($limpo);
echo "\n";
echo strlen($limpo);
echo "\n";
echo strtolower($limpo);
echo "\n";
// Nota: strtoupper() não converte letras acentuadas (dá "CóDIGO"). Para texto em português,
// usa mb_strtoupper(), que trata bem os acentos:
echo mb_strtoupper($limpo);
?></pre>
