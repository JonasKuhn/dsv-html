<?php
require './config.php';

$id = 0;
if (isset($_GET['id']) && empty($_GET['id']) == FALSE) {
    $id = addslashes($_GET['id']);
    
    if (isset($_POST['nome']) && empty($_POST['nome']) == FALSE) {
        $nome = addslashes($_POST['nome']);
        $email = addslashes($_POST['email']);
        $senha = md5(addslashes($_POST['senha']));
        $sql = "UPDATE usuario SET nome = '$nome', email = '$email', senha = '$senha' WHERE id = '$id'";
        $pdo->query($sql);
        header("Location: ./index.php");
    }

    $sql = "SELECT * FROM usuario WHERE id = '$id'";
    $sql = $pdo->query($sql);
    if ($sql->rowCount() > 0) {
        $dado = $sql->fetch();
    } else {
        header("Location: ./index.php");
    }
}
?>

<form method="POST">
    Nome:
    <input type="text" name="nome" value="<?= $dado['nome'] ?>"/><br><br>

    E-mail:
    <input type="email" name="email" value="<?= $dado['email'] ?>"/><br><br>
    
    Senha:
    <input type="password" name="senha"/><br><br>


    <input type="submit" value="Atualizar"/>  
</form>