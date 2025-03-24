<?php

class Pessoa{
    public $nome;
    public $materia;
    private $nota;

    public function __construct($nome, $materia, $nota)
    {
        $this->nome = $nome;
        $this->materia = $materia;
        $this->nota = $nota;
    }
    public function verNota(){
        return $this->nota;
    }
}

class Aluno extends Pessoa{
    public function falar()
    {
        echo "Oi! Meu nome é {$this->nome}, sou aluno e gosto de {$this->materia}.<br>";
    }
}

class Professor extends Pessoa{
    public function falar()
    {
        echo "Oi! Sou o Professor {$this->nome} e dou aula de {$this->materia}.<br>";
    }
}

class Diretor extends Pessoa{
    public function falar()
    {
        echo "Oi! Meu nome é {$this->nome} e sou Diretor.<br>";
    }
}

class Funcionario extends Pessoa{
    public function falar()
    {
        echo "Oi! Sou o funcionário {$this->nome} e sou {$this->materia}.<br>";
    }
}

$nati = new Aluno ("Natalia", "Matemática", 9);
$sarah = new Aluno ("Sarah", "Biologia", 10);
$nicole = new Aluno ("Nicole", "Lingua Portuguesa", 10);
$nicolly = new Aluno ("Nicolly", "História", 8);


$enzo = new Professor ("Enzo", "Lingua Portuguesa", 7);
$joana = new Professor ("Joana", "Matemática", 5);
$roberta = new Professor ("Roberta", "Biologia", 7.5);
$isa = new Professor ("Isabela", "História", 8);

$edi = new Diretor ("Edivânia", "Diretora", 4.5);

$ari = new Funcionario ("Ariadne", "Coordenadora do ensino médio", 8);
$fabi = new Funcionario ("Fabiana", "Coordenadora do ensino fundamental II", 5);


echo $nati -> falar();
echo $sarah -> falar();
echo $nicole -> falar();
echo $nicolly -> falar();


?>