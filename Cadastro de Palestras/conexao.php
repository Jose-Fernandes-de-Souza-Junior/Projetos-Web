<?php

$dbHost = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "projetoweb";

$conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

if ($conexao->connect_error){
    echo "Erro ao conectar ao banco de dados";
}else{
    echo "Conectado com sucesso";
}

?>