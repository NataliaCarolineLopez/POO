<?php
$aluno = [
    "nome" => "Natalia",
    "idade" => "16",

    "estudar" => function() use (&$aluno){
        echo "{$aluno['nome']} está estudando";
    }
];
$aluno['estudar']();
