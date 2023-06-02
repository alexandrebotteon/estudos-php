<html>
    <head>
        <title> Exercício 1 </title>
        <meta charset="utf-8">
    </head>
    <body>
        <center>
            <!-- Crie uma página PHP que recebe um número entre 1 e 10 e exibe a tabuada desse número. -->
            <form>
                Insira o número: <input type="number" name="num"/>
                <input type="submit" value="Enviar"/>
            </form>
            <?php
                $num = isset($_GET['num']) ? $_GET['num'] : null;
                echo "<h3> Tabuada do $num </h3>";
                if ($num == null){
                    echo"Você não inseriu o número!";
                } else {
                    if ($num < 1 || $num > 10){
                        echo "Informe somente valores de 1 a 10!";
                    } else {
                        for ($i = 1; $i <= 10 ; $i++){
                            $resultado = $i * $num;
                            echo "<br>";
                            echo "<br>";
                            echo "$i x $num = $resultado";
                        }
                    }
                }
            ?>
        </center>
    </body>
</html>