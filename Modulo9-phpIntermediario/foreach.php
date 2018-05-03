<html>
    <head>
        <meta charset="UTF-8">  
        <title>FOREACH</title>
    </head>
    <body>
        <?php
        echo "FOREACH<hr>";
        $nomes = array(
            array("nome"=>"Jonas", "idade"=>18),
            array("nome"=>"Matheus", "idade"=> 20),
            array("nome"=>"Igor", "idade"=>30),
            array("nome"=>"Antônio", "idade"=>24),
            array("nome"=>"Marcos", "idade"=>25)
        );
        
            foreach ($nomes as $nome){
                echo "Nome: ".$nome["nome"]." - Idade: ".$nome["idade"]."<br>";
            }
        ?>
        
        <?php
        echo "<br><br>FOREACH<hr>";
        $nomes = array(
            "nome"=>"Jonas", 
            "idade"=>18,
            "cidade"=>"Itapranga",
            "estado"=>"SC"
        );
        
            foreach ($nomes as $chave => $dado){
                echo $chave." = ".$dado."<br>";
            }
        ?>
    </body>
</html>
