<pre><?php
// Teórica 5 — function, parâmetros, return e valor por omissão.
function saudacao($nome, $cargo = "aluno") {
    return "$nome ($cargo)";
}
echo saudacao("Ana", "formadora");
echo "\n";
echo saudacao("Bruno");
?></pre>
