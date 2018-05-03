<html>
    <head>
        <meta charset="UTF-8">  
        <title>FOR</title>
    </head>
    <body>
        <!-- CRIAR SESSÃO -->
        <?php
        //session_start();
        //$_SESSION["teste"] = "Jonas Kuhn";
        //$_SESSION["teste"] = array(
        //  "asdasdsadasd"
        //);
        //echo "Sessão foi feita...";
        //echo "Meu nome é: ".$_SESSION["teste"];
        ?>
        
        <!-- CRIAR COOKIE -->
        <?php 
        
        //setcookie("Meuteste", "Jonas Kuhn", time()+3600);
        
        //echo "Cookie setado com sucesso!";
        
        echo "Meu cookie é de: ".$_COOKIE['Meuteste'];
        
        ?>
    </body>
</html>