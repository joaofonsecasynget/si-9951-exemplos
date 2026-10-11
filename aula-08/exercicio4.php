<pre><?php
// Aula 8 — Exercício 4: escreve de raiz um programa que imprima a data de hoje (d/m/Y),
// o dia da semana em português (array indexado por date("w")) e os anos passados desde 2010.
echo date("d/m/Y");
echo "\n";
$dias = ["Domingo", "Segunda-feira", "Terça-feira", "Quarta-feira", "Quinta-feira", "Sexta-feira", "Sábado"];
echo $dias[(int) date("w")];
echo "\n";
echo (int) date("Y") - 2010;
?></pre>
