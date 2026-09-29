<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <title>O que chega ao browser?</title>
</head>
<body>
  <h1>O que chega ao browser?</h1>
  <!-- Abre esta página no servidor local e usa "Ver código fonte" (Ctrl+U): nenhum dos blocos PHP aparece. -->

  <h2>1.</h2>
  <?php echo "2 + 2 = " . (2 + 2); ?>

  <h2>2.</h2>
  <p>Hoje é <?php echo "um bom dia"; ?>.</p>

  <h2>3.</h2>
  <?php // este comentário não aparece ?><p>Texto normal</p>

  <h2>4.</h2>
  <?php $x = 10; $y = 5; echo $x + $y; ?>
</body>
</html>
