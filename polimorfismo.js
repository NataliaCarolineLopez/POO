class pessoa{
    constructor(nome){
        this.nome = nome
    };
    apresentar = ()=> console.log
}
class aluno extends pessoa{
    apresentar = () => console.log(`${this.nome} está codando`);
}

class pessoa extends pessoa{
    apresentar = () => console.log(`Professor`)
}
