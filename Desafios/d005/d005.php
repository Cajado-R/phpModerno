<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analisador de Números</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>
            Analisando...
        </h1>
    </header>
    <main>
        <section>
            <?php
            /* UMA FORMA DE FAZER O REPLACE COMO VISTO EM AULA: 
            CRIAR UMA VARIAVEL PADRÃO: $padrão = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
            numfmt é para criar um padrão de formatação, neste caso estamos formatando em português do Brasil, logo em seguida utilizariamos dentro do echo essa formatação 

            echo "... " . numfmt_format_currency($padrão, $numero, "BRL"). " você consegue comprar um total de " . numfmt_format_currency($padrão, $numeroDolar, "USD"). "

            Onde o USD e o BRL são os tipos de moedas que seriam formatadas caso eu escolhesse utilziar este método. 
            
            
            */
            
            // str_replace(',', '.', $_GET['numero'] serve para adicionar as virgulas e pontos no "Local correto" )
                $numero = str_replace(',', '.', $_GET['numero']);
            //Aqui é feita a substituição para pegar apenas a parte fracionada
                $parteFracionada = substr(strrchr($numero, '.'), 1);
            //intval serve para obter somente o valor inteiro do intervalo
                $parteInteira = intval($numero);
            //number_format serve para formatar o número da forma como foi pedido no exercicio, adicionado o ponto e a virgula nos lugares corretos. 
                $numeroFormatado = number_format($numero, 2, ',', '.');

                echo "<p>Analisando o núemro <strong>$numeroFormatado</strong>informado pelo usuário: </p>";
                echo "<li>A parte fracionada do número é: <strong>$parteFracionada</strong></li>";
                echo "<li>A parte inteira do número é: <strong>$parteInteira</strong></li>";


            ?>

           
        </section>
        <button><a href="index.html">Voltar</a></button>
    </main>
</body>
</html>