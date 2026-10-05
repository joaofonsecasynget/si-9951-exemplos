<?php
// Teórica 4 — operadores aritméticos, de concatenação (.) e de atribuição (+=, .=)
$preco = 4;  $qtd = 3;
$total = $preco * $qtd;
$total += 2;
$msg = "Total: " . $total;
$msg .= " euros";
echo $msg;
?>
