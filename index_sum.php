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
    echo "Quantidade de produtosno estoque: " . $row_produtos['qnt_produtos'] . "<br><br>";
    
    ?>
</body>
</html>