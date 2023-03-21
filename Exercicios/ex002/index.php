<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exemplo de PHP</h1>

    <?php 
    //Obtendo a zona de tempo das américas (GMT) mais especificamente GMT - 3, por se tratar de SP.
        date_default_timezone_set("America/Sao_Paulo");
    //Exibe a data (d - observe que é minusculo), (m- Mês por extenso m também minúsculo e Y - year ou ano.)
        echo "Hoje é dia ".date("d/m/Y");
    //
        echo " a hora atual é ".date("G:i:s");
    ?>
</body>
</html>