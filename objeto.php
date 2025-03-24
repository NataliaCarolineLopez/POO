<?php
$aluno = [
    "nome" => "Natalia",
    "idade" => "16",

    "estudar" => function() use (&$aluno){
        echo "{$aluno['nome']} esta estudando";
    }
];
$aluno['estudar']();
?>