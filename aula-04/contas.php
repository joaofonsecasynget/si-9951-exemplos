<!DOCTYPE html> 
<html lang="pt"> 
<head> 
    <meta charset="UTF-8"> 
    <title>Contas da encomenda</title> 
</head> 
<body> 
    <h1>Contas da encomenda</h1> 
    <?php 
        $preco = 7; 
        $quantidade = 4; 
        // multiplica o preço pela quantidade 
        $total = $preco * $quantidade; 
        $portes = 3; 
        // acrescenta os portes ao total 
        $total += $portes; 
        $pago = 50; 
        // subtrai o total ao dinheiro entregue 
        $troco = $pago ____ $total; 
        // verdadeiro se a quantidade for 4 ou mais 
        $temDesconto = $quantidade ____ 4; 
        echo "<p>Total a pagar: " . $total . " euros.</p>"; 
        echo "<p>Troco: " . $troco . " euros.</p>"; 
    ?> 
    <pre>
        <?php 
            var_dump($temDesconto); 
        ?>
    </pre> 
</body> 
</html>
