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
    <title>Sapup3 - Juros</title>
</head>
<body>
    <a href="index_form_porc.php">Calcular desconto</a><br>
    <a href="index_form_porc_juros.php">Calcular juros</a>

    <h1>Calcular o juros</h1>
    <?php
    
    //Formulario para calcular a porcentagem
    $valor_orginal = 100;
    //$porcentagem = 25;

    echo "Valor original do produto R$: " . number_format($valor_orginal, 2, ",", ".") . "<br><br>";

    $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

    if(!empty($dados['SendPorcentagem'])){
        //var_dump($dados);
        $valor_juro = ($valor_orginal * $dados['porcentagem']) / 100;
        echo "Valor do juros R$: " . number_format($valor_juro, 2, ",", ".") . "<br><br>";

        $prod_com_juro = (($valor_orginal * $dados['porcentagem']) / 100 ) + $valor_orginal;
        echo "Produto com juros R$: " . number_format($prod_com_juro, 2, ",", ".") . "<br><br>";
    }
    

    ?>
    <form action="" method="POST">
        <label>Porcentagem</label>
        <input type="number" name="porcentagem" placeholder="Porcentagem" required /><br><br>

        <input type="submit" value="Calcular" name="SendPorcentagem" />
    </form>
</body>
</html>