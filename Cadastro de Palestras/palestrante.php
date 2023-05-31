<?php
include 'conexao.php';
################ TELA PALESTRANTE #################
$foto = $_FILES['foto'];

$nome = $_POST['nome'];

$fone = $_POST['fone'];

$email = $_POST['email'];

$formac = $_POST['formacao'];

$empresa = $_POST['empresa'];

$respon = $_POST['responsavel'];

$observ = $_POST['observ'];



echo $foto ." ". $nome ." ". $fone . " ". $email . " " . $formac . " " . $empresa . " " . $respon . " " . $observ;


/*$sql = "INSERT INTO palestrante (nome,telefone,email,formacao,empresa,responsavel,observ) VALUES ('/*$foto','$nome','$fone','$email','$formac','$empresa','$respon','$observ')";

$result = mysqli_query($conexao,$sql);

if ($result){
    
    echo "Dados cadastrados com sucesso!";

}else{
    
    echo"Error...Tente novamente!";
}*/







?>