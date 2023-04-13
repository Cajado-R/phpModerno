<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sortear Números</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    function funcaoOnClick() {
        $numero = rand(0, 100);
        echo "<p>O número é: </p>".$numero;
    }
    ?>
    <main>
        <button onclick="<?php funcaoOnClick(); ?>">Gerar</button>
       
    </main>
</body>
</html>