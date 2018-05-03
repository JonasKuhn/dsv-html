<html>
    <head>
        <meta charset="UTF-8">  
        <title>FOR</title>
    </head>
    <body>
        <?php
        $array = array(
            "nome" => "Jonas",
            "idade" => 18,
            "cidade" => "Itapranga",
            "estado" => "SC"
        );
        echo "ARRAY_KEYS<br>";
        $array2 = array_keys($array);
        
        print_r($array2);
        
        echo "<br><br>";
        echo "ARRAY_VALUES<br>";
        $array3 = array_values($array);
        
        print_r($array3);
        
        echo "<br><br>";
        echo "ARRAY_POP<br>";
        array_pop($array);
        
        print_r($array);
        
        echo "<br><br>";
        echo "ARRAY_SHIFT<br>";
        array_shift($array);
        
        print_r($array);
        
        echo "<br><br>";
        echo "ASORT<br>";
        echo 'Ordena em ordem alfabética dos valores.<br>';
        asort($array);
        
        print_r($array);
        
        echo "<br><br>";
        echo "ARSORT<br>";
        echo 'Ordena em ordem reversa dos valores.<br>';
        arsort($array);
        
        print_r($array);
        
        echo "<br><br>";
        echo "COUNT<br>";
        
        $alunos = array(
            "Jonas",
            "Felipe",
            "Miguel",
            "Ademir",
            "Rosmeri"
        );
        
        echo 'TOTAL DE ALUNOS: '. count($alunos);
        
        echo "<br><br>";
        echo "IN_ARRAY<br>";
        
        if(in_array("Jonas", $alunos)){
            echo "Um dos vencedores foi Jonas.";
        }else{
            echo "Não está na lista .";
        }
        ?>
    </body>
</html>

