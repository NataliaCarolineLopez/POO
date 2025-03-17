class pessoa {
    constructor(nome){
        if(this.constructor === pessoa){
            throw new error("Não pode criar esse objeto")
        }
        this.nome = nome;
    }
}
class aluno extends pessoa{}
const Natalia = new aluno ("Natália")
console.log(Natalia.nome)