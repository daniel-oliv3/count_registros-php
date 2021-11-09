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
    <title>Sapup3 - Porcentagem</title>
</head>
<body>
    <?php
    //Desconto
    $valor_original = 100;
    $porcentagem = 25;

    $valor_desconto = $valor_original / 100 * $porcentagem;
    echo "Valor do desconto R$: " . number_format($valor_desconto, 2, ",", ".") . "<br>";

    $prod_com_desconto = $valor_original - $valor_desconto;
    echo "Produto com desconto R$: " . number_format($prod_com_desconto, 2, ",", ".") . "<br><br>";

    //Acréscimo
    $valor_acrescentado = ($valor_original * $porcentagem) / 100;
    echo "Valor do acréscimo R$: " . number_format($valor_acrescentado, 2, ",", ".") . "<br>";

    $prod_com_aumento = (($valor_original * $porcentagem) / 100) + $valor_original;
    echo "Produto com aumento R$: " . number_format($prod_com_aumento, 2, ",", ".") . "<br>";
    ?>
</body>
</html>