<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>
            Resultado do processamento
        </h1>
    </header>
    <main>
        <?php 
        /*
        
        $_GET $_POST $_COOKIES
       A $_REQUEST ENGLOBA TODAS JUNTAS.
       
        */

            $nome = $_GET["nome"];
            $sobrenome = $_GET["sobrenome"];
            //var_dump($_REQUEST);
          
            if ($nome == '' and $sobrenome == '')
                echo "<p> Você não inseriu nada em nome ou sobrenome </p>";
            else
                echo "<p>Prazer em conhecer você, $nome $sobrenome.</p>";
            

        ?>
        <p><a href="index.html">Voltar</a></p>
    </main>
</body>
</html>