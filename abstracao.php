<?php
abstract class Pessoa{
    public $nome;

    public function __construct($nome){
        $this->nome=$nome;
    }
}

class Aluno extends Pessoa{
}
$natalia =new Aluno ("Natalia");
echo $natalia->nome . "É ele";

?>