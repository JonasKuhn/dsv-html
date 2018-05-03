<html>
    <head>
        <meta charset="UTF-8">  
        <title>FUNÇÃO DATE</title>
    </head>
    <body>
        <?php
            echo "FUNÇÃO DATE<hr>";
            $dataatual = date("d/m/y \à\s H:i:s");
            
            echo $dataatual;
        ?>
        <?php
            echo "<br><br>FUNÇÃO TIME<hr>";
            $dataatual = date("d/m/y", strtotime("+10 days"));
            
            echo $dataatual;
        ?>
    </body>
</html>


