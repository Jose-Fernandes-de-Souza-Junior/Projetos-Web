<?php
include 'conexao.php';
################ TELA PALESTRA #################

$nome = $_POST['nome'];

$dt_i = $_POST['datai'];

$dt_term = $_POST['datater'];

$hr = $_POST['hora'];

$carga= $_POST['carga'];

$vagas = $_POST['vagas'];

$empresa = $_POST['empresa'];

$respon = $_POST['responsavel'];

$observ = $_POST['observ'];

echo $nome ." ". $dt_i . " ". $dt_term ." ". $hr . " ". $carga . " " . $vagas . " " . $empresa . " " . $respon . " " . $observ;


$sql = "INSERT INTO palestra (nome,data_inicio,data_termino,horario_inicio,carga,vagas,empresa,responsavel,observ) VALUES ('$nome', '$dt_i','$dt_term','$hr','$carga','$vagas','$empresa','$respon','$observ')";

$result = mysqli_query($conexao,$sql);

if ($result){
    
    echo "Dados cadastrados com sucesso!";

}else{
    
    echo"Error...Tente novamente!";
}

?>