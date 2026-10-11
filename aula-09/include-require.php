<pre><?php
// Aula 9 — include de um ficheiro que falta: aviso (Warning) e a página continua.
// Com require "naoexiste.php" seria erro fatal e "continua" nunca aparecia (experimenta trocar).
include "naoexiste.php";
echo "continua";
?></pre>
