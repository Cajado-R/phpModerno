<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valor Convertido</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <?php
        
        $valorEmReais = $_GET["numero"];
        $formatarValorEmReais = number_format($valorEmReais, 2, '.', '');
        echo "Com R$$formatarValorEmReais";
        $calculo = $valorEmReais / 4.94;
        $formatanrCalculo = number_format($calculo, 2, '.', '');
        echo "<p>Você irá receber: US$ $formatanrCalculo</p>"
        ?>
        <a href="index.html">Voltar</a>
    </main>
</body>
</html>