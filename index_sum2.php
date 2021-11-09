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
    
    //Somar o valor do estoque em reais
    $query_valor = "SELECT SUM(quantidade * preco_venda) AS valor_estoque FROM produtos";
    $result_valor = $conn->prepare($query_valor);
    $result_valor->execute();

    $row_valor = $result_valor->fetch(PDO::FETCH_ASSOC);
    echo "Valor do estoque (venda) R$: " . number_format($row_valor['valor_estoque'], 2, ",", ".") . "<br><br>";

    ?>
</body>
</html>