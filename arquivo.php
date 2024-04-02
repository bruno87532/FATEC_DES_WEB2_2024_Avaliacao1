<?php
session_start();
if($_SESSION['logado'] == FALSE){
    header('location: index.php');
}

if(isset($_POST['carro'])){
    $file_name = 'carros.txt';
    if($_POST['aluno'] != '' && $_POST['ra'] != '' && $_POST['placa'] != ''){
        if(!file_exists('carros.txt')){
            $arquivo = fopen('carros.txt', 'w');
        }else{
            $arquivo = fopen('carros.txt', 'a');
        }
        fwrite($arquivo, $_POST['aluno'].'|'.$_POST['ra'].'|'.$_POST['placa']."\n");
        fflush($arquivo);
        fclose($arquivo);
    }
}
if(isset($_POST['moto'])){
    $file_name = 'motos.txt';
    if($_POST['aluno'] != '' && $_POST['ra'] != '' && $_POST['placa'] != ''){
        if(!file_exists('motos.txt')){
            $arquivo = fopen('motos.txt', 'w');
        }else{
            $arquivo = fopen('motos.txt', 'a');
        }
        fwrite($arquivo, $_POST['aluno'].'|'.$_POST['ra'].'|'.$_POST['placa']."\n");
        fflush($arquivo);
        fclose($arquivo);
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <form action="" method="post">
        <p>
            <label for="aluno">Insira o nome do aluno</label>
            <input type="text" name="aluno" id="aluno">
        </p>
        <p>
            <label for="ra">Insira o RA do aluno</label>
            <input type="text" name="ra" id="ra">
        </p>
        <p>
            <label for="placa">Insira a placa do carro/moto do aluno</label>
            <input type="text" name="placa" id="placa">
        </p>
        <p>
            <input type="submit" name="carro" value="Inserir carro">
            <input type="submit" name="moto" value="Inserir moto">
        </p>
    </form>
    <a href="logout.php">Sair</a></br>
    <a href="registros.php">Verificar todos os registros</a>
</body>
</html>