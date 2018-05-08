<html>
    <head>
        <meta charset="utf-8">
        <title>Controle de Usuários</title>
    </head>
    <body>
        <?php
        require './config.php';
        ?>
        <button><a href="adicionar.php">Novo usuário</a></button>
        <br><br>
        <table border="1" width="100%">
            <thead>
                <tr>
                    <th>Nome </th>
                    <th>E-mail </th>
                    <th>Ações </th>
                </tr>
            </thead>
            <?php
            $sql = "select * from usuario";
            $sql = $pdo->query($sql);
            if ($sql->rowCount() > 0) {
                foreach ($sql->fetchAll() as $usuario) {
                    ?>
                    <tbody>
                        <tr>
                            <td><?=$usuario['nome']?></td>
                            <td><?=$usuario['email']?></td>
                            <td>
                                <a href="editar.php?id=<?=$usuario['id']?>">Editar - </a>
                                <a href="excluir.php?id=<?=$usuario['id']?>">Excluir</a>
                            </td>
                        </tr>
                    </tbody>
                    <?php
                }
            } else {
                
            }
            ?>
        </table>
    </body>
</html>