<pre><?php
// Teórica 4 — tipos de dados: var_dump() mostra o tipo e o valor; gettype() devolve o nome do tipo
$titulo = "Fotografia";   // string
$fotos = 12;              // int
$preco = 2.5;             // float
$publicado = true;        // bool
$tags = ["praia", "verão"]; // array (vem nas próximas aulas)

var_dump($titulo);
var_dump($fotos);
var_dump($preco);
var_dump($publicado);
var_dump($tags);

echo gettype($titulo), "\n";
echo gettype($fotos), "\n";
echo gettype($preco), "\n";
echo gettype($publicado), "\n";
echo gettype($tags), "\n";
?></pre>
