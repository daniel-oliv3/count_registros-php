<?php 

$host = "localhost";
$user = "root";
$pass = "";
$dbname = "banco_php";
$port = 3306;

try {
    //Conexão com a porta
    $conn = new PDO("mysql:host=$host;port=$port;dbname=" . $dbname, $user, $pass);

    //Conexão sem porta
    //$conn = new PDO("mysql:host=$host;dbname=" . $dbname, $user, $pass);

    echo "Conexão com banco de dados realzada com sucesso!";
}catch(PDOException $err){
    echo "Erro: Conexão com banco de dados não foi realizada!. Erro gerado " . $err->getMessage();
}


?>