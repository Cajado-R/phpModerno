<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversão</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>
            Conversor v2.0
        </h1>
    </header>
    <main>
    <?php 
        //Inicio e fim utilizados para substituir a datra previa na propria API note que utilizo mes dia e ano pois é assim na api e nada pode ser alterado
        $inicio = date("m-d-Y", strtotime("- 7 days"));
        $fim = date("m-d-Y");
        //URL do banco central para utilizar a API de geração de dados, ao utilizar isto obtenho valores diretamente do sistema (API)
        $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $inicio .'\'&@dataFinalCotacao=\'' .$fim. '\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
        
        //Aqui converto os dados em um array pois optei por não usar como um objeto. 
        $dados = json_decode(file_get_contents($url), true);

        //A cotação é meio que um get do array eu busco no valor 0 a cotação de compra
        $cotacao = $dados["value"][0]["cotacaoCompra"];
        
        //Pegando o valor do arquivo HTML (procedimento padrão)
        $valor = $_GET["numero"];
        // Calculo 
        $calculoDolar = $valor / $cotacao;
        //Formatando ambos os valores tando o calculo do dólar quanto o valor obtido do HTML em duas casas decimais separadas por ponto. 
        $foramatarValor = number_format($calculoDolar, 2, '.', ''); number_format( $valor, 2, '.', '');
        echo " <p>O total em reais é de R$$$valor</p>";
        echo " <p>O total em dolares será US$$foramatarValor</p>";
    ?>
    <a href="index.html">Voltar</a>
    </main>
</body>
</html>