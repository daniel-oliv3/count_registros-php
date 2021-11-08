<?php
    include_once "conexao.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut ico" href="favicon.ico" type="image/x-ico">
    <title>Sapup3</title>
</head>
<body>
    <?php
    //Conta a quantidade total de produtos
    $query_produtos = "SELECT COUNT(id) AS qnt_produtos FROM produtos";
    $result_produtos = $conn->prepare($query_produtos);
    $result_produtos->execute();

    $row_produto = $result_produtos->fetch(PDO::FETCH_ASSOC);
    echo "Quantidade de produtos: " . $row_produto['qnt_produtos'] . "<br><br>";


    //Conta a quantidade de produtos ativos
    $query_produtos = "SELECT COUNT(id) AS qnt_produtos FROM produtos WHERE situacao=1";
    $result_produtos = $conn->prepare($query_produtos);
    $result_produtos->execute();

    $row_produto = $result_produtos->fetch(PDO::FETCH_ASSOC);
    echo "Quantidade de produtos ativos: " . $row_produto['qnt_produtos'] . "<br><br>";

    ?>
</body>
</html>