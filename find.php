<?php
    $funcionarios =[
        ["id" => 0, "nome" => "Joao",   "salario" => 1500],
        ["id" => 1, "nome" => "Pedro",  "salario" => 4500],
        ["id" => 2, "nome" => "Zé",     "salario" => 2900],
    ];
    $id = $_POST['id'];
    foreach($funcionarios as $funcionario){
        if ($funcionario['id'] == $id){
            echo 'Nome: '.$funcionario['nome']. '<br/>Salario: R$ '. number_format($funcionario['salario'],2, ',', '.');
        }
    }
?>