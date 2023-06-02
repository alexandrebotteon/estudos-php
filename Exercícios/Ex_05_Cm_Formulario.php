<html>
    <head>
        <title> Exercício 5 </title>
        <meta charset="utf-8">
    </head>
    <body>
        <!--Escreva uma página PHP que recebe um número maior que 100 e exibe todos os números pares de 0 até o número informado.-->
        <center>
            <form>
                Insira o número: <input type="number" name="Num"/> <br><br>
                <input type="submit" value="Enviar"/> <br> <br>
            </form>
            <?php
                $num = isset($_GET['Num']) ? $_GET['Num'] : null;
            
                if ($num < 100){
                    echo "Por favor, insira um número maior que 100";
                } else {
                    for ($i = 0; $i < $num; $i++){
                        if ($i%2 == 0){
                            echo "$i <br>";
                        }
                    }
                    /*$i = 0;
                    while ($i < $num){
                        if ($i%2 == 0){
                            echo "$i <br>";
                        }
                    $i = $i + 1;
                    }*/
                }
            ?>
        </center>
    </body>
</html>