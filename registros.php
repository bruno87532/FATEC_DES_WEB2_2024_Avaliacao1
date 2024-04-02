<?php
session_start();
if($_SESSION['logado'] == FALSE){
    header('location: index.php');
}
if(isset($_POST['verifica_moto'])){
    $arquivo = fopen('motos.txt', 'r');
    echo "Motos:"."</br>";
    while(!feof($arquivo)){
        $linha = fgets($arquivo);
        echo $linha."</br>";
    }
    fclose($arquivo);
}
if(isset($_POST['verifica_carro'])){
    $arquivo = fopen('carros.txt', 'r');
    echo "Carros:"."</br>";
    while(!feof($arquivo)){
        $linha = fgets($arquivo);
        echo $linha."</br>";
    }
    fclose($arquivo);
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registros</title>
</head>
<body>
    <form action="" method="post">  
        <input type="submit" name="verifica_moto" value="Verificar registro das motos"></br>
        <input type="submit" name="verifica_carro" value="Verificar registro dos carros"><br>
    </form>
    <a href="logout.php">Sair</a>
</body>
</html>