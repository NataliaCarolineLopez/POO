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


$nati = new Aluno ("Natalia", "Matemática", 9);
$sarah = new Aluno ("Sarah", "Biologia", 10);
$nicole = new Aluno ("Nicole", "Lingua Portuguesa", 10);
$nicolly = new Aluno ("Nicolly", "História", 8);



echo $nati -> falar();
echo $sarah -> falar();
echo $nicole -> falar();
echo $nicolly -> falar();


?>