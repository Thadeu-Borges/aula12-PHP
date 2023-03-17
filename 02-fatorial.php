<!DOCTYPE html>
<html lang="pt">
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <?php
        $v = isset($_GET["val"])?$_GET["val"]:1;
        echo "<h1>Calculando o fatorial $v </h1> ";
        $c = $v;
        $fal = 1;
        do {
            $fal = $fal * $c;
            $c--;
        } while ($c>=1);
        echo "<h2>$v ! = $fal </h2>";
    ?>
    <p><a href="02index.html" class="botao">Voltar</a></p>
</div>
</body>
</html>
 