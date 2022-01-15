<?php
function findId($funcionarios, $id){
    foreach($funcionarios as $funcionario){
        if ($funcionario['id'] == $id){
            return $funcionario;
        }
    }
    //se não achar a opçao, retorna null
    return null;
}
//criando o array dos funcionários
$funcionarios =[
    ["id" => 0, "nome" => "Joao",   "salario" => 1500],
    ["id" => 1, "nome" => "Pedro",  "salario" => 4500],
    ["id" => 2, "nome" => "Zé",     "salario" => 2900],
];
//recebendo o id da página index
$id = $_POST['id'];
//crio a var funcionario, que vai receber a função findId, que precisa de um array(funcionarios) e um valor(id)
$funcionario = findId($funcionarios, $id);
if (is_null($funcionario)){
    echo 'Funcionário não encontrado';
    die();
}
//chama o nome do funcionario, depois o salário e formata ele com '.' na casa de mil, ',' nos centavos e duas casas depois da vírgula
echo 'Nome: '.$funcionario['nome']. '<br/>Salario: R$ '. number_format($funcionario['salario'],2, ',', '.');
?>