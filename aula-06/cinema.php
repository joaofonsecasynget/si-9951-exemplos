<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <title>Calculadora de bilhetes</title>
</head>

<body>
    <h1>Calculadora de bilhetes</h1>
    <?php
    // Atividade: calculadora de bilhetes de cinema.
    // Menor de 12 anos paga 4,50; 65 anos ou mais paga 5,00; estudante (dos restantes) paga 6,00; os outros pagam 7,50.
    // Testa com pelo menos três combinações de $idade e $estudante.
    // Extensão (opcional): crianças até aos 5 anos entram de graça — fica no primeiro if, porque a ordem conta.
    $idade = 17;
    $estudante = true;

    if ($idade <= 5) {
        $preco = 0;          // extensão
    } elseif ($idade < 12) {
        $preco = 4.50;
    } elseif ($idade >= 65) {
        $preco = 5.00;
    } elseif ($estudante) {
        $preco = 6.00;
    } else {
        $preco = 7.50;
    }
    ?>
        <p>Idade: <?php echo $idade; ?> · Estudante: <?php echo $estudante ? "sim" : "não"; ?></p>
        <p>Preço do bilhete: <?php echo number_format($preco, 2, ",", ""); ?> euros.</p>
        <?php
    ?>
</body>

</html>
