<html>
    <head>
        <meta charset="UTF-8">  
        <title>FUNÇÕES</title>
    </head>
    <body>
        <?php
            echo "FUNÇÕES<hr>";
            function somaNumero($x, $y) {
                return $x + $y;
            }

            $resultado = somaNumero(10, 20);
            
            echo "Resultado: ".$resultado;
        ?>
    </body>
</html>