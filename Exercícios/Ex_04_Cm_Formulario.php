<html>
    <head>
        <title> Exercício 4 </title>
        <meta charset="utf-8">
    </head>
    <body>
        <!-- Crie uma página em PHP para receber o valor da temperatura em ºC e escrever na tela o valor correspondente em ºF com base na fórmula abaixo. -->
        <center>
            <form>
                Graus (ºC): <input type="number" name="Celsius"/> <br><br>
                <input type="submit" value="Enviar"/> <br> <br>
            </form>
        <?php
            $celsius = isset($_GET['Celsius']) ? $_GET['Celsius'] : null;
            
            if ($celsius == null){
                echo "Insira os graus, por favor!";
            } else {
                $farenheit = 1.8*$celsius + 32;
                echo "$celsius °C = $farenheit °F"; 
            }
        ?>
        </center>
    </body>
</html>