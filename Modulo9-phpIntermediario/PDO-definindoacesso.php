<?php
$dsn = "mysql:dbname=blog;host=localhost";
$dbuser = "root";
$dbpasswd = "1234";

try {
    $pdo = new PDO($dsn, $dbuser, $dbpasswd);
    
    $sql = "SELECT * FROM posts";
    
    //executa algo no banco
    $sql = $pdo->query($sql);
    
    //ver qual a ultima id inserida
    //echo "Noticia inserida: ".$pdo->lastInsertId();
    
    if ($sql->rowCount() > 0){
        echo "há noticias";
    }else{
        echo "Não ha noticias.";
    }
    
} catch (PDOException $e) {
    echo "Falhou: " . $e->getMessage();
}

