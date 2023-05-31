<?php
include 'conexao.php';
################ TELA PARTICIPANTE #################

$nome = $_POST['nome'];

$data_nasc = $_POST['data_nasc'];

$sexo = $_POST['sexo'];

$cpf = $_POST['cpf'];

$telefone = $_POST['telefone'];

$email = $_POST['email'];

$escolaridade = $_POST['escolaridade'];

$empresa = $_POST['empresa'];

$palestra = $_POST['palestra'];

$periodo = $_POST ['periodo'];

$observ = $_POST['observ'];

echo $nome . " " . $data_nasc . " " . $sexo . " " . $cpf . " " . $telefone . " " . $email . " " . $escolaridade . " " . $empresa . " " . $palestra . " " . $periodo . " " . $observ;


$sql = "INSERT INTO participante (nome, data_nasc, sexo, cpf, telefone, email, escolaridade, empresa, palestra, periodo, observ) VALUES ('$nome','$data_nasc','$sexo','$cpf','$telefone','$email','$escolaridade','$empresa','$palestra','$periodo','$observ')";

$result = mysqli_query($conexao,$sql);

if ($result){
    
    echo "Dados cadastrados com sucesso!";

}else{
    
    echo"Error...Tente novamente!";
}

?>