function ex01() {

  console.log("Exemplo 01");

  var carro = {marca : "Fiat",
    modelo : "Palio",
    cor : "Branco",
    ano : 2010};

  console.log(carro);

  var pessoa = {nome : "João",
    sobrenome : "Silva",
    idade : 20};

  console.log(pessoa);

}


function ex02() {

  var pessoa = {nome : "João",
    sobrenome : "Silva",
    idade : 20};

  console.log(pessoa.nome);

  pessoa.nome = "José";

  console.log(pessoa["nome"]);

  console.log("O " + pessoa.nome
    + " tem " + pessoa.idade + " anos");

}


function ex03() {

  var pessoa = { nome : "Maria",
    sobrenome : "Silva",
    idade : 30,
    nomeCompleto : function () {
      return this.nome + " " + this.sobrenome;
    },
    imprime : function() {
      console.log(this.nome + " " + this.sobrenome +
        " tem " + this.idade + " anos.");
    }
  };

  console.log("O nome completo é " + pessoa.nomeCompleto());

  pessoa.imprime();

}


function imprimePessoa(pessoa) {
  console.log(pessoa.nome + " " + pessoa.sobrenome
    + " tem " + pessoa.idade + " anos");
}


function ex04() {

  var p1 = { nome : "João", sobrenome : "Silva", idade : 20};
  var p2 = { nome : "José", sobrenome : "Silva", idade : 25};
  var p3 = { nome : "Maria", sobrenome : "Silva", idade : 30};

  var v = [p1, p2, p3];

  for (var i = 0; i < v.length; ++i) {
    imprimePessoa(v[i]);
  }

}


function ex05() {

  var p1 = { nome : "João", sobrenome : "Silva", idade : 20};
  var p2 = { nome : "José", sobrenome : "Silva", idade : 25};
  var p3 = { nome : "Maria", sobrenome : "Silva", idade : 30};

  var v = [p1, p2, p3];

  for (var i = 0; i < v.length; ++i) {
    // Só imprime as pessoas com menos de 22 anos
    if (v[i].idade < 22) {
      imprimePessoa(v[i]);
    }
  }

}
