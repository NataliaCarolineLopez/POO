// criando a classe Aluno
class objeto{
    constructor(nome, idade) {
        // o instructor é um método tradicional
        this.nome = nome;
        this.idade = idade;
    }
        estudar = () => console.log(`${this.nome} está estudando.`);
    }

    const Natalia = new objeto("Natália" , 17)
   
    console.log(Natália.nome)
    Natália.estudar()