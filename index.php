<?php
session_start();
if(isset($_POST['user']) && isset($_POST['pass'])){
    if($_POST['user'] == 'portaria' && $_POST['pass'] == 'fatecAraras'){
        $_SESSION['logado'] = TRUE;
        header('location: arquivo.php');
        exit;
    }else{
        $_SESSION['logado'] = FALSE;
        echo 'Usuário ou senha incorretos'.'<br>';
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="" method="post">
        <p>
            <label for="user">Digite o usuário:</label>
            <input type="text" name="user" id="user">
        </p>
        <p>
            <label for="pass">Digite a senha:</label>
            <input type="text" name="pass" id="pass">
        </p>
        <p>
            <input type="submit" value="Enviar">
        </p>
    </form>
</body>
</html>