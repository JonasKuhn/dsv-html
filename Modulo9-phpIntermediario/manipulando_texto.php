<html>
    <head>
        <meta charset="UTF-8">  
        <title>MANIPULANDO TEXTO</title>
    </head>
    <body>
        <?php
           $nome = "Jonas Kuhn";
           
           $x = explode(" ", $nome);
           
           print_r($x);
        ?>
        <br><br><br>
        
        <?php
           $array = array("Jonas", " Kuhn");
           
           $x = implode(" ", $array);
           
           echo $x;
        ?>
        
        <br><br><br>
        
        <?php
           $y = number_format(8.2626626, 2, ",", ".");
           echo $y;
        ?>
        
        <br><br><br>
        
        <?php
           $texto = "O rato roeu a roupa!!";
            
           $string = str_replace("roeu", "comeu", $texto);
           
           echo $string;
        ?>
        
        <br><br><br>
        
        <?php
           echo strtolower("JONAS KUHN<br>");
           echo strtoupper("jonas kuhn");
        ?>
        
        <br><br><br>
        
        <?php
            $texto = "Jonas";
            
            $x = substr($texto, 0,3);
            
            echo $x;
        ?>
        
        <br><br><br>
        
        <?php
            $texto = "jonas";
            
            $x = ucfirst($texto);
            
            echo $x;
        ?>
        
        <br><br><br>
        
        <?php
            $texto = "jonas kuhn";
            
            $x = ucwords($texto);
            
            echo $x;
        ?>
    </body>
</html>


