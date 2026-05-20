<?php 

<?php

$nome = $_POST['nome'];
$email = $_POST['email'];
$idade = $_POST['idade'];
$cidade = $_POST['cidade'];
$sexo = $_POST['sexo'];
$observacoes = $_POST['observacoes'];

echo("<h1>Resultado do Cadastro</h1>");

if(
    empty($nome) ||
    empty($email) ||
    empty($idade) ||
    empty($cidade) ||
    empty($sexo)
){
    echo("Erro: Preencha todos os campos obrigatórios.");
}
else if(!is_numeric($idade)){
    echo("Erro: A idade deve ser numérica.");
}
else{

    echo("<p><strong>Nome:</strong> $nome</p>");
    echo("<p><strong>E-mail:</strong> $email</p>");
    echo("<p><strong>Idade:</strong> $idade</p>");
    echo("<p><strong>Cidade:</strong> $cidade</p>");
    echo("<p><strong>Sexo:</strong> $sexo</p>");
    echo("<p><strong>Observações:</strong> $observacoes</p>");

    echo("<h2>Cadastro realizado com sucesso!</h2>");
}

?>

 ?>