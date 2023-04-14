<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>
            Gerando Números Aleatórios
        </h1>

        <?php 
        $numero = mt_rand(0, 100);
        echo "<p>Gerando um número aleatorio entre 0 e 100 </br> O número gerado foi <strong>$numero</strong> </p>"
        ?>
        <button onclick="javascript:document.location.reload()">&#x1f504 Gerar Outro</button>
    </main>
</body>
</html>