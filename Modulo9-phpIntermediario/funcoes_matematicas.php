<html>
    <head>
        <meta charset="UTF-8">  
        <title>FUNÇÕES MATEMÁTICAS</title>
    </head>
    <body>
        <?php
            echo "FUNÇÕES MATEMÁTICAS<hr>";
            
            echo abs(10)."<br>";
            echo round(10.81273);
            
            $lista = array("Jonas", "Matheus", "Emer", "Julio", "Igor");
            
            $x = rand(0, 4);
            
            echo "<br>E o sortudo é: ".$lista[$x];
        ?>
    </body>
</html>


