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
    <title>Sapup3 - Sum</title>
</head>
<body>
    <?php
    
    //Soma a quantidade de produtos
    $query_produtos = "SELECT SUM(quantidade) AS qnt_produtos FROM produtos";
    $result_produtos = $conn->prepare($query_produtos);
    $result_produtos->execute();

    $row_produtos = $result_produtos->fetch(PDO::FETCH_ASSOC);
    echo "Soma a quantidade de produtos no estoque: " . $row_produtos['qnt_produtos'] . "<br><br>";

    //Soma a quantidade de produtos ativos
    $query_prod_ativos = "SELECT SUM(quantidade) AS qnt_produtos FROM produtos WHERE situacao=1";
    $result_prod_ativos = $conn->prepare($query_prod_ativos);
    $result_prod_ativos->execute();

    $row_prod_ativos = $result_prod_ativos->fetch(PDO::FETCH_ASSOC);
    echo "Quantidade de produtos ativos no estoque: " . $row_prod_ativos['qnt_produtos'] . "<br><br>";
    

    //Soma a quantidade de produtos inativos
    $query_prod_inativo = "SELECT SUM(quantidade) AS qnt_produtos FROM produtos WHERE situacao=2";
    $result_prod_inativo = $conn->prepare($query_prod_inativo);
    $result_prod_inativo->execute();

    $row_prod_inativo = $result_prod_inativo->fetch(PDO::FETCH_ASSOC);
    echo "Quantidade de produtos inativos no estoque: " . $row_prod_inativo['qnt_produtos'] . "<br><br>";


    ?>
</body>
</html>