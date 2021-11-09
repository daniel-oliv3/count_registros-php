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
    <title>Sapup3 - Sum 2</title>
</head>
<body>
    <?php
    
    //Somar o valor do estoque em reais
    $query_valor_compra = "SELECT SUM(quantidade * preco_compra) AS valor_estoque FROM produtos";
    $result_valor_compra = $conn->prepare($query_valor_compra);
    $result_valor_compra->execute();

    $row_valor_compra = $result_valor_compra->fetch(PDO::FETCH_ASSOC);
    echo "Valor do estoque (compra) R$: " . number_format($row_valor_compra['valor_estoque'], 2, ",", ".") . "<br><br>";

    //Somar o valor do estoque em reais
    $query_valor_venda = "SELECT SUM(quantidade * preco_venda) AS valor_estoque FROM produtos";
    $result_valor_venda = $conn->prepare($query_valor_venda);
    $result_valor_venda->execute();

    $row_valor_venda = $result_valor_venda->fetch(PDO::FETCH_ASSOC);
    echo "Valor do estoque (venda) R$: " . number_format($row_valor_venda['valor_estoque'], 2, ",", ".") . "<br><br>";


    //Lucro (a ordem altera o fator-)
    $lucro = $row_valor_venda['valor_estoque'] - $row_valor_compra['valor_estoque'];
    echo "Lucro R$: " . number_format($lucro, 2, ",", ".") . "<br><br>";
    ?>
</body>
</html>