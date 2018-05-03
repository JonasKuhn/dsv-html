<html>
    <head>
        <meta charset="UTF-8">  
        <title>CRIPTOGRAFIA</title>
    </head>
    <body>
        <?php
            $nome = "Jonas";
            //criptografia inrrevercivel 
            $senha1 = md5($nome);
            echo "Senha full: ".$senha1;
            
            echo "<br><br>";
            
            $nome2 = "Jonas";
            //criptografia revercivel 
            $senha2 = base64_encode($nome2);
            
            echo "Senha encode: ".$senha2;
            
            echo "<br><br>";
            $senha3 = base64_decode($senha2);
            echo "Senha dencode: ".$senha3;
            
            //$autor = addcslashes($_POST["autor"]);
            
        ?>
    </body>
</html>