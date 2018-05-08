<html>
    <head>
        <meta charset="utf-8">
        <title>Sistema de Login</title>
    </head>
    <body>
        <?php
        session_start();

        if (isset($_POST['email']) && empty($_POST['email']) == FALSE) {
            $email = addslashes($_POST['email']);
            $senha = md5(addslashes($_POST['senha']));

            $dsn = "mysql:dbname=blog;host=localhost";
            $dbuser = "root";
            $dbpasswd = "1234";

            try {
                $pdo = new PDO($dsn, $dbuser, $dbpasswd);

                $sql = $pdo->query("SELECT * FROM usuario WHERE email = '$email' AND senha = '$senha'");

                if ($sql->rowCount() > 0) {
                    $dado = $sql->fetch();
                    
                    $_SESSION['id'] = $dado['id'];
                    header("Location: ./index.php");
                } else {
                    
                }
            } catch (PDOException $e) {
                echo "Falhou: " . $e->getMessage();
            }
        }
        ?>
        <form method="POST">
            E-mail:
            <input type="email" name="email"/><br><br>

            Senha:
            <input type="password" name="senha"/><br><br>

            <input type="submit" value="Entrar"/>  
        </form>
    </body>
</html>