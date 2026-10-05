<?php
// Teórica 4 — exercício "prevê o resultado"
$fotos = 12;
$fotos += 3;
$paginas = $fotos / 5;
$sobra = $fotos % 4;
$legenda = "Álbum";
$legenda .= " de verão";
echo "<p>$legenda: $fotos fotos</p>";
echo "<p>Páginas: $paginas</p>";
echo "<p>Sobra: $sobra</p>";
?>
