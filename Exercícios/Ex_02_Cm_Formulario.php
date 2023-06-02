<html>
    <head>
        <title> Exercício 2 </title>
        <meta charset="utf-8">
    </head>
    <body>
        <center>
            <!-- Crie uma página PHP que recebe 3 notas n1, n2 e n3, calcula a média final e apresenta uma mensagem com a média e a situação do aluno de acordo com os critérios abaixo.
                - média >= 7: aprovado
                - 5 < média < 7: recuperação
                - média < 5: reprovado
            -->
            <form>
                Nota 1: <input type="number" name="Nota1"/> <br><br>
                Nota 2: <input type="number" name="Nota2"/> <br><br>
                Nota 3: <input type="number" name="Nota3"/> <br><br>
                <input type="submit" value="Enviar"/>
            </form>
            <?php
                $n1 = isset($_GET['Nota1']) ? $_GET['Nota1'] : null;
                $n2 = isset($_GET['Nota2']) ? $_GET['Nota2'] : null;
                $n3 = isset($_GET['Nota3']) ? $_GET['Nota3'] : null;
                if (($n1 == null) || ($n2 == null) || ($n3 == null)){
                    
                    if ($n1 == null){
                    echo "Você não inseriu a sua primeira nota!<br>";
                    }
                    if ($n2 == null){
                            echo "Você não inseriu a sua segunda nota!<br>";
                        }
                    if ($n3 == null){
                            echo "Você não inseriu a sua terceira nota!<br>";
                        }
                } else {
                    $media = ($n1 + $n2 + $n3)/3;
                    if ($media >= 7){
                        echo "Sua média é $media, e você está APROVADO!<br>";
                    }
                    if (($media >= 5) && ($media < 7)){
                        echo "Sua média é $media, e você está de recuperação!<br>";
                    }
                    if ($media < 5){
                        echo "Sua média é $media, e você está REPROVADO!";
                    }
                }
            ?>
        </center>
    </body>
</html>