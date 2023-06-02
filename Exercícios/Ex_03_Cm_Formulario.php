<html>
    <head>
        <title> Exercício 3 </title>
        <meta charset="utf-8">
    </head>
    <body>
        <!-- Crie uma página PHP que calcula a quantidade de litros de combustível e o valor a ser gasto com combustível para uma determinada viagem, dadas as seguintes informações:
            - distância
            - rendimento do veículo (em km/l)
            - preço do litro do combustível
        -->
        <center>
            <form>
                Distância: <input type="number" name="Distancia"/> <br><br>
                Rendimento: <input type="number" name="Rendimento"/> <br><br>
                Valor por Litro: <input type="number" name="vlr_litro"/> <br><br>
                <input type="submit" value="Enviar"/>
            </form>
            <?php
                $distancia = isset($_GET['Distancia']) ? $_GET['Distancia'] : null;
                $rendimento = isset($_GET['Rendimento']) ? $_GET['Rendimento'] : null;
                $vlr_litro = isset($_GET['vlr_litro']) ? $_GET['vlr_litro'] : null;
            
                if ($distancia == null || $rendimento == null || $vlr_litro == null){
                    if ($distancia == null) {
                        echo "Você não inseriu a distancia!<br>";
                    }
                    if ($rendimento == null) {
                        echo "Você não inseriu o rendimento!<br>";
                    }
                    if ($vlr_litro == null) {
                        echo "Você não inseriu a valor por litro!<br>";
                    }
                } else {
                    $qtdcombustivel = $distancia / $rendimento;
                    $vlr_total = $qtdcombustivel * $vlr_litro;
                    echo "A quantidade de combustível necessária é $qtdcombustivel e totalizará em R$ $vlr_total";
                }
            ?>
        </center>
    </body>
</html>